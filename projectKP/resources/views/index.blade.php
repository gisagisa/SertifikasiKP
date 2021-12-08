@extends('master')
@section('navbarcontent')
<div class="navbar-header">
    <button type="button" id="sidebarCollapse" class="btn navbar-btn ">
        <i class="glyphicon glyphicon-align-left"></i>
        <span>menu</span>
    </button>
</div>

@endsection
@section('tag')
<div class="navbar-collapse-right" id="bs-example-navbar-collapse-1">
    <ul class="nav">
        <li class="menu_page"><a href="#about_us">About Us</a></li>
        <li class="menu_page"><a href="#our_products">Our Products</a></li>
        <li class="menu_page"><a href="#official_store">Official store</a></li>
        <!-- <li><a href="#">Page</a></li> -->
    </ul>
</div>
@endsection

@section('content')


<h2 id="about_us">About Us</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<div class="line"></div>

<h2 id="our_products">Our Products</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="position-absolute top-50 start-50 translate-middle">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/bag4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #755f56;">Classic Casual Bags</h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <!-- <img src="data:image/jpeg;base64,<? //= $nama_gmb 
                                                            ?>" class="card-img-top" alt="gambar product"> -->
                    @foreach($dataProduct as $product)
                    @if ($product['status'] == 'new')
                    {
                    <img src="/image/{{$product['image']}}.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #47403b;">New</h5>
                    </div>
                    }
                    @endif
                    @endforeach

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>


<div class="line"></div>

<h2 id="official_store">Official Store</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<!-- <div class="line"></div>

<h3></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->



@endsection