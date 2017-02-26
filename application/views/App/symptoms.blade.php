@extends('app-master')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="heading center-align white-text">SYMPTOMS</h3>
            <div class="search">
                <form action="" method="GET">
                    <input type="text" name="symptom-value" class="search-input" placeholder="Search here">
                </form>
            </div>
            <ul class="collection">
            @for($x=0;$x<10;$x++)
                <li class="collection-item">
                    <p class="disease-name">Back pain</p>
                    <p>A pain in the back...</p>
                </li>
            @endfor
            </ul>
            <ul class="pagination center-align">
                <li class="disabled"><a href="#!"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">6</a></li>
                <li class="waves-effect"><a href="#!">7</a></li>
                <li class="waves-effect"><a href="#!">8</a></li>
                <li class="waves-effect"><a href="#!">9</a></li>
                <li class="waves-effect"><a href="#!">10</a></li>
                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
