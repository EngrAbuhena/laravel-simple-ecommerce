<?php

    use App\Http\Controllers\ProductController;

    $total = 0;
    if (session()->has('user')) {
        $total = ProductController::cartItems();
    }
?>


<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orders">Orders</a>
                </li>
                <form action="/search" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="/cart-list">Cart<span class="badge bg-dark text-white ms-1 rounded-pill">{{$total}}</span></a>
                </li>

                    {{--Dropdown start here--}}
                @if(session()->has('user'))
                <li class="nav-item dropdown">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-target="#navbar"
                            aria-haspopup="true" aria-expanded="false">
                        {{session()->get('user')['name']}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuButton">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                    <a class="nav-link" href="/login">Login</a>
                    <a class="nav-link" href="/register">Register</a>
                @endif
                    {{--Dropdown ends here--}}

            </ul>


        </div>
    </div>
</nav>
