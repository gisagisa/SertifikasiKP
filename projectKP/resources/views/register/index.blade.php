@extends('layout.logreg')
@section('lrTitle')
<h4 class="addAdmin-text">ADD ADMIN</h4>
@endsection

@section('logregContent')
<form action="/register" method="POST">
    @csrf
    <h4 class="addAdmin-text">ADD ADMIN</h4>
    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
    <div class="form-group"><input type="text" name="username"  placeholder="Username" class="form-control @error('username') is-invalid @enderror" autocomplete="off" required></div>
    <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" required></div>
    <div class="form-group">
        <!-- <div class="mata"> -->
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
        <!-- <div class="eye"> -->
        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
        <!-- </div> -->
        <!-- </div> -->
    </div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Add Admin</button>
</form>
@endsection