@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .post {
            border: 2px solid #818181;
            padding: 30px;
            font-weight: 900;
            font-family: arial;

        }
    </style>
    <div class="container posts-main-content-wrapper p-3 rounded" style="background: white;">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">[Site Name] Category</a></li>
                  <li class="breadcrumb-item"><a href="#">General Chat </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Town Square</li>
                </ol>
              </nav>

            <div class="col-sm-2 my-1">
                <div class="pagination">
                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                          <button type="button" class="btn btn-secondary">1</button>
                          <button type="button" class="btn btn-secondary">2</button>
                          <button type="button" class="btn btn-secondary">3</button>
                          <button type="button" class="btn btn-secondary">4</button>
                        </div>
                      </div>
                </div>
            </div>
            <hr>

        </div>

        <div class="row title-area pb-2 mb-5">
            <div class="col-sm-10">
                <h1> <i class="fa-regular fa-file" style="font-size: 30px;"></i> This is the first thread!</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 thread-buttons">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Lock</a>
                            <a href="#" class="btn btn-primary">Sticky</a>
                            <a href="#" class="btn btn-primary">Move</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row thread-tools-are pb-4" style="border-bottom:1px solid #c8c9cb; ">
            <livewire:thread-quick-reply />
        </div>
        <div class="container">
            <div class="row posts">
                @isset($posts)
                    @foreach ($posts as $key => $post)
                        @if ($post->id % 2 == 1)
                            <div class="row post-area p-2">
                                <div class="col-sm-2 post-avi-side" style="width:150px;">
                                    <div class="row post-username">
                                        <div class="col">
                                            <img src="//graphics.gaiaonline.com/images/usericons/b15c767d65e9.png"
                                                alt="flare">
                                            <b
                                                style="text-shadow: 0px 0px 6px #ff0000;
                                        position: relative;
                                        right: 5px;
                                        bottom: 1px;
                                        color: #333333;">Spring</b>
                                        </div>
                                    </div>
                                    <div class="row" style="position:relative; bottom:10px; left:15px;">
                                        <div class="col">
                                            <small style="color">Administrator</small>
                                        </div>
                                    </div>
                                    <div class="row" style="position:relative; bottom:10px;">
                                        <div class="col">
                                            <img class="avatar-normal"
                                                src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1_flip.png?t=1670122533_6.00_11"
                                                alt="avatar">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-primary pe-4" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-face-smile" style="color:#feea00;"></i> Online
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="row post-buttons mt-2">
                                        <div class="col">
                                            <button type="button" class="btn btn-sm btn-primary">Quote</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Tip</button>
                                            <button type="button" class="btn btn-sm btn-success">React</button>
                                        </div>
                                    </div>

                                    <div class="row post-bubble">
                                        <div class="col post mt-2 rounded" style="border:2px solid #818181; ">
                                            <p style="font-weight:100;">
                                                {{ $post->post_text }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @else
                            <!-- Alt post reversed -->
                            <div class="row post-area p-2">
                                <div class="col-sm-10">

                                    <div class="row post-buttons mt-2">
                                        <div class="col">
                                            <button type="button" class="btn btn-sm btn-primary">Quote</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Tip</button>
                                            <button type="button" class="btn btn-sm btn-success">React</button>
                                        </div>
                                    </div>

                                    <div class="row post-bubble">
                                        <div class="col post mt-3 rounded" style="border:2px solid #818181; ">
                                           <p style="font-weight:100 !important;">
                                            {{ $post->post_text }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <div class="row post-username pe-5">
                                        <div class="col">
                                            <img src="//graphics.gaiaonline.com/images/usericons/b15c767d65e9.png"
                                                alt="flare" style="position: relative; top:5px; left:5px;">
                                            <b
                                                style="text-shadow: 0px 0px 6px #ff0000;
                                                        position: relative;
                                                        left: 5px;
                                                        top: 8px;
                                                        color: #333333;">Test
                                                User</b>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            Administrator
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <img class="avatar-normal"
                                                src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c9/ad/6380e0d52bfadc9.png?t=1670697198_6.00_01"
                                                alt="avatar">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-primary post-actions pe-4" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-face-smile" style="color:#feea00;"></i> online
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
    @livewireScripts
@endsection
