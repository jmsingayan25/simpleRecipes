@extends('layouts.app')
@section('title', 'Recipes')
@section('content')

<div class="container-fluid p-0 overflow-hidden">
    @if(session('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif
    <img src="{{asset('storage/images/homepage.jpg')}}" class="img-fluid object-fit-cover" alt="" style="width: 100%; height: 500px;">
    
    <!-- Search Recipe Section -->
    <div class="row justify-content-center pt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 justify-content-center">
                            <div class="btn-group btn-group-lg d-flex" role="group" aria-label="Button group with nested dropdown">
                                <a href="{{ route('recipes.create') }}" type="button" class="btn btn-danger btn-lg">Create</a>
                                <button type="button" class="btn btn-primary btn-lg"><i class="bi bi-funnel"></i> Filter</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sorting
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Rating Descending</a></li>
                                        <li><a class="dropdown-item" href="#">Latest First</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 justify-content-center">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Recipe name" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- List of Recipe Section -->
    <div class="row justify-content-center py-3">
        <div class="col-md-10">
            <p class="fs-2">
                Recipes
            </p>
            <div class="row justify-content-around">
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text stretched-link">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <a href="#"class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="" width>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                            <a href="#"class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="" width>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                            <a href="#"class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text stretched-link">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <a href="#"class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="" width>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                            <a href="#"class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="card-img-top" alt="" width>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row pb-2">
                                <div class="col-md-4">
                                    @for($i=0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4">
                                    45 Min <i class="bi bi-stopwatch"></i>
                                </div>
                                <div class="col-md-4">
                                    Intermediate <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                            <a href="#"class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection