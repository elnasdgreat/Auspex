<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// include APPPATH . 'controllers/MY_Controller.php';

class App extends MY_Controller {




    public function __construct() {
        parent::__construct();
        $this->load->model("Data");
    }




    public function tests() {
    }




    public function index()
    {
        // $this->load->model('Data');
        $category_results = $this->Data->getCategories();
        $symptoms_results = $this->Data->getSymptoms();

        $categories = [];

        foreach ($category_results as $cat) {
            $categories[$cat->name] = [];
        }

        foreach ($symptoms_results as $symptom) {
            array_push(
                $categories[$symptom->category],
                [$symptom->id,$symptom->name]
            );
        }

        $this->dataSet = [
            'title' => 'Auspex',
            'categories' => $categories
        ];
    }





    public function predict() {
        // $this->load->model('Data');

        $symptoms_results = $this->Data->getSymptoms();
        $diseases_results = $this->Data->getDiseases();

        $symptomsDictionary = [];

        foreach ($symptoms_results as $symptoms) {
            $symptomsDictionary[] =
            [
                $symptoms->id,
                $symptoms->name,
                $symptoms->desc
            ];
        }

        $diseases = [];

        foreach ($diseases_results as $disease) {
            $diseases[$disease->name] = [unserialize($disease->symptoms),$disease->desc];
        }

        $userInput = $this->input->post('symptoms');

        foreach ($userInput as $id) {
            $readableUserInput[] = $symptomsDictionary[array_search($id,array_column($symptomsDictionary, 0))][1];
        }


        $numberOfSymptomsUser = count($userInput);


        $range = [
            'start' => -5,
            'end' => 5
        ];

        $matchedPredictions = [];
        $nearPredictions = [];

        foreach($diseases as $disease => $symptoms) {
            $numberOfSymptomsDB = count($symptoms[0]);
            $numberOfMatchedSymptoms = count(array_intersect($symptoms[0], $userInput));

            $diffMatchedDB = ($numberOfSymptomsDB - $numberOfMatchedSymptoms);
            $diffMatchedUser = ($numberOfSymptomsUser - $numberOfMatchedSymptoms);

            $precision = ($diffMatchedDB + $diffMatchedUser)/2;

            if( ( (($numberOfSymptomsUser + $numberOfSymptomsDB) / 2) === $numberOfMatchedSymptoms ) && $numberOfMatchedSymptoms > 0) :

                unset($readableSymptoms);

                foreach ($symptoms[0] as $id) {
                      $readableSymptoms[] = $symptomsDictionary[array_search($id,array_column($symptomsDictionary, 0))][1];
                 }

                $nearPredictions[$disease] = ['matches' => $numberOfMatchedSymptoms, 'symptoms' => $readableSymptoms];

             elseif( ($diffMatchedDB >= $range['start'] && $diffMatchedDB <= $range['end']) && ($numberOfMatchedSymptoms > 0) ) :

                unset($readableSymptoms);

                 foreach ($symptoms[0] as $id) {
                      $readableSymptoms[] = $symptomsDictionary[array_search($id,array_column($symptomsDictionary, 0))][1];
                 }

                $nearPredictions[$disease] = ['matches' => $numberOfMatchedSymptoms, 'symptoms' => $readableSymptoms, 'desc' => $symptoms[1]];
            endif;
        }

        echo json_encode($nearPredictions);
    }




    public function diseases() {
        $this->dataSet = [
            'title' => 'Diseases - Auspex'
        ];
    }




    public function symptoms() {
        $this->dataSet = [
            'title' => 'Symptoms - Auspex'
        ];
    }



    public function login() {

        $this->dataSet = [
            'title' => 'Login - Auspex'
        ];

    }




    public function auth() {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $result = $this->Data->findUser($username, $password);

        if(count($result) > 0) {

            echo json_encode([

                "status" => "success",
                "user" => $result

            ]);

        } else {

            echo json_encode([

                "status" => "error",
                "fields" => [
                    "msg" => "Invalid username or password."
                ]

            ]);

        }

    }



}

/* End of file App.php */
/* Location: ./application/controllers/App.php */
