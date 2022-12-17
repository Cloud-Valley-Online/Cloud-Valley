@extends('layouts.app')

@section('content')
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .post {
            padding: 30px;
            font-family: arial;

        }

        .speech-bubble {
            position: relative;
            border-radius: .4em;
        }

        .speech-bubble:after {
            content: '';
            position: absolute;
            left: 0;
            top: 15%;
            width: 0;
            height: 0;
            border: 13px solid transparent;
            border-right-color: #818181;
            border-left: 0;
            border-bottom: 0;
            margin-top: -6.5px;
            margin-left: -13px;
        }

        .speech-bubble-reversed {
            position: relative;
            border-radius: .4em;
        }

        .speech-bubble-reversed:after {
            content: '';
            position: absolute;
            right: 0;
            top: 15%;
            width: 0;
            height: 0;
            border: 13px solid transparent;
            border-left-color: #818181;
            border-right: 0;
            border-bottom: 0;
            margin-top: -6.5px;
            margin-right: -13px;
        }
    </style>
    <div x-data class="container posts-main-content-wrapper p-3 rounded" style="background: white;">
        <div class="row">
            @if ($posts[0])
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/forum">{{ config('app.name') }} Forums</a></li>
                        <li class="breadcrumb-item">
                            <a
                                href="/forum/{{ $posts[0]->thread->forum_id }}/{{ $posts[0]->thread->forum->forum_name_clean }}">General
                                Forums </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $posts[0]->thread->forum->forum_name }}
                        </li>
                    </ol>
                </nav>

                <!-- Begin Post logic -->
                <div class="col-sm-12 pagination">
                    {{ $posts->links() }}
                </div>
                <hr>
        </div>

        <div class="row title-area pb-2 mb-5">
            <div class="col-sm-10">
                <h1> <i class="fa-regular fa-file" style="font-size: 30px;"></i> {{ $posts[0]->thread->thread_subject }}
                </h1>
            </div>
            @if (Auth::check())
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 thread-buttons">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-lock"></i> Lock</a>
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-note-sticky"></i> Sticky</a>
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-reply-all"></i> Move</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <div class="row thread-tools-area" style="border-bottom:1px solid #c8c9cb; ">
            <!-- Component-->
            @if(Auth::check())
                <x-forum.quick-reply/>
            @endif
        </div>

        <div class="container">
            <div class="row posts">
                @isset($posts)
                    @foreach ($posts as $key => $post)
                        @if ($key % 2 == 0)
                            <!-- Post area -->
                            <div class="row post-area p-2 mb-2" id="post.{{ $post->id }}">
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
                                        color: #333333;">{{ userIdToUsername($post->post_author) }}</b>
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
                                            <button type="button" x-on:click="tinymce.activeEditor.execCommand('mceInsertContent', false, '<br>@quote:{{ userIdToUsername($post->post_author) }} </br>')" class="btn btn-sm btn-primary">Quote</button>
                                            <button type="button" class="btn btn-sm btn-primary">Tip</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-sm btn-success">Delete</button>
                                            <a href="/report">report</a>
                                        </div>
                                    </div>

                                    <div class="row speech-bubble">
                                        <div class="col post mt-2 rounded overflow-auto" style="border:2px solid #818181; ">
                                            <p>
                                                {!! $post->post_text !!}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                        @else
                            <!-- Alt post reversed -->
                            <div class="row post-area p-2 mb-2" id="post.{{ $post->id }}">
                                <div class="col-sm-10">

                                    <div class="row post-buttons mt-2">
                                        <div class="col">
                                            <button type="button" class="btn btn-sm btn-primary">Quote</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Tip</button>
                                            <button type="button" class="btn btn-sm btn-success">React</button>
                                        </div>
                                    </div>

                                    <div class="row speech-bubble-reversed">
                                        <div class="col post mt-3 rounded overflow-auto" style="border:2px solid #818181; ">
                                            <p>
                                                {!! $post->post_text !!}
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
                                                        color: #333333;">{{ userIdToUsername($post->post_author) }}</b>
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
                            <hr>
                        @endif
                    @endforeach
                @endisset
                <div class="col-sm-12 pagination">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="alert alert-danger">Uh oh there was a problem, no posts were found! Please report this.</div>
            @endif
                <!-- End post logic -->
            </div>
        </div>
    </div>
@endsection
