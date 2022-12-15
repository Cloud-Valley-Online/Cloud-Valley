@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Auth::check())

                            <div class="row">
                                <div class="col-8 carousel_updates">

                                    <div id="carouselLatestUpdates" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                          <li data-target="#carouselLatestUpdates" data-slide-to="0" class="active"></li>
                                          <li data-target="#carouselLatestUpdates" data-slide-to="1"></li>
                                          <li data-target="#carouselLatestUpdates" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://via.placeholder.com/1000x275" alt="First slide">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="https://via.placeholder.com/1000x275" alt="Second slide">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="https://via.placeholder.com/1000x275" alt="Third slide">
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselLatestUpdates" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselLatestUpdates" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>

                                      <div class="row mt-2">
                                        <div class="col-4" style="border:1px solid red;">
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1.png?t=1670946605_6.00_01" height="300px" width="300px" alt="aotw">
                                        </div>

                                        <div class="col-4">
                                           <img src="https://i.pinimg.com/736x/f1/95/5b/f1955bd56aa00ea5c58de5023d9f4396.jpg" width="294px" height="300px" alt="aaotw">
                                        </div>

                                        <div class="col-4">
                                            <ul>
                                                <li>This is a featured topic </li>

                                                <li>This is a featured topic </li>

                                                <li>This is a featured topic </li>

                                                <li>This is a featured topic </li>

                                                <li>This is a featured topic </li>
                                            </ul>
                                        </div>
                                      </div>

                                </div>

                                <div class="col-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="notifications-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Notifications</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Announcements</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="notifications-tab">
                                            <ul>
                                                <li>You were quoted by <a href="Spring"></a> in <a href="I'm hungry!"></a></li>

                                                <li>You were quoted by <a href="Spring"></a> in <a href="I'm hungry!"></a></li>

                                                <li>You were quoted by <a href="Spring"></a> in <a href="I'm hungry!"></a></li>

                                                <li>You were quoted by <a href="Spring"></a> in <a href="I'm hungry!"></a></li>

                                                <li>You were quoted by <a href="Spring"></a> in <a href="I'm hungry!"></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="announcements-tab">

                                        </div>
                                      </div>
                                </div>
                            </div>

                        @else
                            <div class="alert alert-warning">
                                <p>You are currently viewing the site as a guest! Consider <a href="/login">logging in</a>
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
