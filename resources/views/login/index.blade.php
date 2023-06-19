@extends('layout.main')
@section('title')
    login
@endsection
@section('body')
   <div class="container ">
    <div class="row" style="margin-top: 50px;margin-bottom: 50px">
        <div class="col m4 offset-m4 s12">
            <div class="form-container">
                <p class="title">Login</p>
                <form class="form" accept="/login" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="name" id="username" placeholder="">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="">
                        <div class="forgot">
                            <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                        </div>
                    </div>
                    <button class="sign">Sign in</button>
                </form>



            </div>
        </div>
    </div>
   </div>
@endsection
