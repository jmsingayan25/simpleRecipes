@extends('layouts.app')
@section('title', 'Simple Recipes')
@section('content')

<div class="container-fluid p-0 overflow-hidden">
    <img src="{{asset('storage/images/homepage.jpg')}}" class="img-fluid object-fit-cover" alt="" style="width: 100%; height: 500px;">
    <!-- New Recipes Section -->
    <div class="row justify-content-center py-3">
        <div class="col-md-10">
            <p class="fs-2">
                Try mo na 'tong mga bagong recipes!
            </p>
            <div class="row justify-content-around">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
            <div class="row justify-content-center py-2">
                <div class="col-md-4 text-center">
                    <div type="button" class="btn btn-outline-primary btn-lg p-4">
                        <i class="bi bi-chevron-right"></i> Show More Recipes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-gradient-img">
        <img src="{{asset('storage/images/homepage.jpg')}}" class="img-fluid object-fit-cover" alt="" style="width: 100%; height: 500px">
        <div class="home-gradient-overlay">
            <div class="row">
                <div class="col-md-4 offset-md-2 mt-5">
                    <p class="fs-1 text-black fw-medium">
                        7 All-in-Onederful Dishes na P100 or less!
                    </p>
                    <p class="fs-4 text-black">
                        Bilang mommy, di natin gustong tipirin sa sarap ang mga niluluto natin for the family. Kahit tight ang budget, marami tayong mahahanap na paraan para makapaghain ng mga dishes na masarap at balanse sa sustansiya.
                    </p>
                    <div type="button" class="btn btn-lg btn-secondary">
                        <i class="bi bi-chevron-right"></i> Read More
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-container">
        <div class="row justify-content-center my-3">
            <div class="card p-3 w-75">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h1 class="card-title pb-1">Discover the MAGGI Range</h1>
                            <h4 class="card-title pb-3">MAGGI, your cooking ally</h4>
                            <p class="card-text fs-5">Sa bawat araw, kasama mo ang MAGGI sa pagpapasarap ng lutuin. Para sa kahit anong handa, may MAGGI product para sa 'yo. Kasama ang MAGGI, nasa kamay po ang pagpapasarap ng buhay.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <button class="btn btn-lg btn-outline-dark"><i class="bi bi-journal-bookmark"></i> All Products</button>
                                    <button class="btn btn-lg btn-outline-primary">
                                        <i class="bi bi-chevron-right"></i> Learn More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="recipe-for-the-day-container">
        <div class="row justify-content-center my-3">
            <div class="card p-3 w-75">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{asset('storage/images/homepage.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h1 class="card-title pb-1">Recipe of the Day</h1>
                            <h4 class="card-title pb-3">All-in-One Pinakbet with Lechon Kawali</h4>
                            <p class="card-text fs-5">Ang pinakbet mo, mas may isasarap pa with this All-in-Onederful Pinakbet recipe na may lechon kawali. Try mo na!</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <button class="btn btn-lg btn-outline-dark"><i class="bi bi-journal-bookmark"></i> Try it!</button>
                                    <button class="btn btn-lg btn-outline-primary">
                                        <i class="bi bi-chevron-right"></i> All Recipes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
