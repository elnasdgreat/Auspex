@extends('app-master')

@section('content')
    <div class="title-block center-align white-text">
        <h1 class="title-heading">Auspex</h1>
        <p class="title-extra">Predicts possible diseases based on your symptoms.</p>
    </div>

    <div class="container">

        <div class="row scale-transition center-align hide" id="spinner">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-red-only spinner-color-override">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p class="white-text">Please wait.</p>
        </div>
        <div class="row scale-transition" id="content">
            <h4 class="white-text">Select symptoms</h4>
            <p class="white-text"><span id="count" class="right"></span>Please select at least 3 - 5 symptoms.</p>



            <form id="symptoms-form" action="prediction.php" method="POST">


                <ul class="collapsible" data-collapsible="accordion">
                    @foreach ($categories as $catName => $catArrValues)
                    <li>
                        <div class="collapsible-header waves-effect waves-light">{{$catName}}</div>
                        <div class="collapsible-body">
                            <div class="row">
                            <ul>
                            @foreach ($catArrValues as $arrValues)
                                <li class="col m4">
                                    <p>
                                        <input type="checkbox" id="{{$arrValues[0]}}"  name="symptoms[]" value="{{$arrValues[0]}}" data-symptom="{{$arrValues[1]}}" />
                                        <label for="{{$arrValues[0]}}">{{$arrValues[1]}}</label>
                                    </p>
                                </li>
                            @endforeach
                            </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </form>


        </div>
        <div class="row">
            <div class="red accent-2 white-text hide" id="symptoms-container"><p>Selected symptoms : </p><p id="symptoms" class="white-text"></p></div>
            <span class="white-text right" id="msg"></span>
            <button id="start-button" class="col s12 waves-effect waves-light btn-large btn-flat right scale-transition red accent-2 white-text">Start Prediction</button>
        </div>

        <div class="row scale-transition hide" id="results">
            <ul class="collection with-header result-items">
                <li class="collection-header red accent-2 white-text"><h5>Possible diseases</h5></li>
            </ul>
            <a href="/" class="col s12 waves-effect waves-light btn-flat btn-large right scale-transition red accent-2 white-text">Go Back</a>
        </div>
    </div>
@endsection
