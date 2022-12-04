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
    <div class="container-fluid posts-main-content-wrapper" style="margin-top:50px;">
        <div class="row">
            <hr>
            <div class="col-sm-12 breadcrumbs">
                <a href="">Forums >></a>
                <a href="">Forums >></a>
                <a href="">Forums</a>
            </div>
            <hr>

        </div>

        <div class="row title-area pb-2">
            <div class="col-sm-10">
                <h2>This is the first thread!</h2>
            </div>
            <div class="col-sm-2 thread-buttons">
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

            <div class="row thread-tools-area">
                <div class="col-sm-3 thread-buttons">
                    <div class="row align-items-start">
                        <div class="col">
                            <button type="button" class="btn btn-primary">Reply</button>
                            <button type="button" class="btn btn-primary">Subscrive</button>
                            <button type="button" class="btn btn-primary">Report</button>

                            <div class=" pagination">
                               <a href="">1</a><a href="">2</a><a href="">3</a>
                            </div>
                        </div>
    
                    </div>
                </div>
               
            </div>
            <div class="container">
            <div class="row posts">
                @isset($posts)
                    @foreach ($posts as $post)
                        <div class="row post-area p-2">
                            <div class="col-sm-2 text-center post-avi-side">
    
                                <div class="row post-username">
                                    <div class="col">
                                        (flar)
                                        <b>Spring</b> (?)
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
                                            src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1_flip.png?t=1670122533_6.00_11"
                                            alt="avatar">
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Dropdown button
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
                                    <div class="col post mt-3 rounded" style="border:2px solid #818181; ">
                                        oi
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <hr>
    
                        <div class="row post-area p-2">
                            <div class="col-sm-10" >
    
                                <div class="row post-buttons mt-2">
                                    <div class="col">
                                        <button type="button" class="btn btn-sm btn-primary">Quote</button>
                                        <button type="button" class="btn btn-sm btn-secondary">Tip</button>
                                        <button type="button" class="btn btn-sm btn-success">React</button>
                                    </div>
                                </div>
    
                                <div class="row post-bubble">
                                    <div class="col post mt-3 rounded" style="border:2px solid #818181; ">
                                        dddddd
                                    </div>
                                </div>
    
                            </div>
                            <div class="col-sm-2 text-center" >
                                <div class="row post-username">
                                    <div class="col">
                                        (flar)
                                        <b>Spring that guy</b>
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
                                            src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1_flip.png?t=1670122533_6.00_11"
                                            alt="avatar">
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Dropdown button
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
                    @endforeach
                @endisset
            </div>
            
        </div>
   
    </div>

    <footer>
        hey
    </footer>
@endsection
