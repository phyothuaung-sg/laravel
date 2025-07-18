@extends('mytemplate.layout')


@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url({{asset ('template_assets/assets/img/home-bg.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Home Page</h1>
                    <span class="subheading">This is landing Page.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        @foreach($todos as $todo)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$todo['title']}}</h5>
                    <p class="card-text">{{$todo['body']}}</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</main>
@endsection