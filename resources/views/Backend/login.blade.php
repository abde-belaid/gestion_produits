@extends('Master.layouts')
@section('content')
    <div class="container d-flex justify-content-center justify-item-center  ">
        <div class="row mt-5 border p-5 border-2 border-warning w-75 login  rounded-3">
            <div class="col-md-5">
                <img class="w-100 h-100 rounded-2"
                    src="https://cdn.pixabay.com/photo/2020/02/17/18/12/office-4857268_1280.jpg" alt="">
            </div>
            <div class="col-md-1">
                <span class="vertical-line"></span>
            </div>
            <div class="col-md-5">

                <form action="{{route('login')}}" class="" method="post">
                    @csrf
                    <input type="text" class="form-control m-3" placeholder="Login" name="login">
                    <input type="password" class="form-control m-3" placeholder="Mot de passe" name="password">
                    <button class="btn btn-primary m-3">connecter</button>
                </form>

            </div>
        </div>
    </div>
@endsection
