@extends('layout.logreg')
@section('lrTitle')
<h4 class="login-text">LOGIN</h4>
@endsection
@section('logregContent')
<form action="../config/action-login.php" method="POST">
    <h4 class="login-text">LOGIN</h4>
    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off" required></div>
    <div class="form-group">
        <!-- <div class="mata"> -->
        <input class="form-control" type="password" name="password" placeholder="Password" required>
        <!-- <div class="eye"> -->
        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
        <!-- </div> -->
        <!-- </div> -->
    </div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button>
</form>
@endsection