@extends('master')
@section('navbarcontent')
<div class="navbar-header">
    <button type="button" id="sidebarCollapse" class="btn navbar-btn ">
        <i class="glyphicon glyphicon-align-left"></i>
        <span>menu</span>
    </button>
</div>
<div class="navbar-collapse-right" id="bs-example-navbar-collapse-1">
    <h4 style="margin-right: 20px; font-family: 'Yellowtail', cursive;">Hi, <?//=$_SESSION["nama"]?><h4>
</div>
@endsection

@section('content')
<br>
<h4>what do you want to do? </h4><br>
<div class="card text-center" style="margin-bottom: 20px;">
    <div class="card-header">
        <span class="material-icons md-light">
            add
        </span>
    </div>
    <div class="card text-white">
        <div class="card-body">
            <h5 class="card-title">ADD NEW PRODUCTS</h5>
            <p class="card-text">add your new product and let everyone see it</p>
            <a href="./add_product.php" class="btn btn-outline-light btn-sm">go</a>
        </div>
    </div>
</div>
<div class="card text-center " style="margin-bottom: 20px;">
    <div class="card-header">
        <span class="material-icons md-light">
            update
        </span>
    </div>
    <div class="card text-white">
        <div class="card-body">
            <h5 class="card-title">UPDATE YOUR PRODUCT INFORMATION</h5>
            <p class="card-text">keep your product up-to-date</p>
            <a href="./update_product.php?key=all" class="btn btn-outline-light btn-sm">go</a>
        </div>
    </div>
</div>
<div class="card text-center" style="margin-bottom: 20px;">
    <div class="card-header">
        <span class="material-icons md-light">
            delete
        </span>
    </div>
    <div class="card text-white">
        <div class="card-body">
            <h5 class="card-title">DELETE A PRODUCT</h5>
            <p class="card-text">throw away your old product</p>
            <a href="./delete_product.php?key=all" class="btn btn-outline-light btn-sm">go</a>
        </div>
    </div>
</div>

@endsection