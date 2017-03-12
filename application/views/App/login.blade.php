@extends('app-master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3" id="login-div">
                <form id="login-form">

                    <div class="col s12 center-align">
                        <h3 class="black-text center-align">LOGIN</h3>

                        <p class="msg center-align"></p>

                        <div class="input-field">
                            <input id="username" name="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>

                        <button id="login-button" class="waves-effect waves-light btn-flat red accent-2 white-text">Login</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
