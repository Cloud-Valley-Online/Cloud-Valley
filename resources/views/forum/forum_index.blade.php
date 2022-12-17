@extends('layouts.app')

@section('content')
    <div class="container main-content-wrapper border border-dark border-1 rounded p-2 shadow-sm">
        @if (isset($forums[0]->category->name) && isset($forums[0]))
            <div class="row">
                <div class="col-sm-9">
                    <div class=" mx-auto">
                        <ul class="nav nav-tabs forum-nav mb-5">
                            <li class="nav-item">
                                <a class="nav-link active" style="background:#4d6c99; color:white;" href="#">Forum
                                    List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray" href="#">Trending </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray" href="#">New Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray" href="#">New Threads</a>
                            </li>
                        </ul>
                        <a href="" class="text-decoration-none bolder" style="color:#4e6c9a;">
                            <h3>{{ $forums[0]->category->name }}</h3>
                        </a>
                        <div style="border:1px solid #4d6c99;"></div>
                    </div>
                    <div class="main-content mx-auto p-3 my-3 border" style="background:white; border-color: #edf4fa;">
                        @isset($forums)
                            @foreach ($forums as $forum)
                                @if ($forum->id % 2 == 0)
                                    <div class="row p-1" style="background-color:#edf4fa">
                                        <div class="col-1">
                                            <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                                class="img-rounded" alt="Chatterbox">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <a href="/forum/{{ $forum->forum_name_clean }}/{{ $forum->id }}"
                                                class="text-decoration-none">
                                                <h5 style="color:#4e6c9a;">
                                                    {{ $forum->forum_name }}
                                                </h5>
                                            </a>
                                            <p>{{ $forum->forum_description }}</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                            <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                                class="px-1">Threads: {{ $forum->forum_thread_count }}</span> <span
                                                style="color:#5c656f; font-size: 80%;">Posts:
                                                {{ $forum->forum_post_count }}</span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is
                                                a
                                                new
                                                thread come join me us...</a>
                                            <small style="color:#5c656f;">
                                                Posted: Today at 2:27 PM
                                            </small>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                                class="img-rounded" alt="Chatterbox">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <a href="/forum/{{ $forum->id }}/{{ $forum->forum_name_clean }}"
                                                class="text-decoration-none">
                                                <h5 style="color:#4e6c9a;">
                                                    {{ $forum->forum_name }}
                                                </h5>
                                            </a>
                                            <p>{{ $forum->forum_description }}</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                            <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                                class="px-1">Threads: {{ $forum->forum_thread_count }}</span> <span
                                                style="color:#5c656f; font-size: 80%;">Posts:
                                                {{ $forum->forum_post_count }}</span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is
                                                a
                                                new
                                                thread come join me us...</a>
                                            <small style="color:#5c656f;">
                                                Posted: Today at 2:27 PM
                                            </small>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
                <!-- Top posters -->
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card shadow-sm">
                                <div class="card-body">

                                    <h5 class="card-title"><i class="fa-solid fa-face-grin-stars"></i> Top poster of the
                                        month!
                                    </h5>
                                    <small class="card-text">Top posters get an exclusive crown item and a custom flair! <a
                                            href="">learn more</a></small>
                                    <hr>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <i class="fa-solid fa-crown" style="color:#ffea3b;"></i>
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="">Spring</a> with 101 posts!
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa-solid fa-crown" style="color:silver;"></i>
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="">Spring</a> with 100 posts!
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa-solid fa-crown" style="color:brown;"></i>
                                            <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="">Spring</a> with 100 posts!
                                        </li>
                                        <li class="list-group-item"><img
                                                src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="">Spring</a> with 100 posts!
                                        </li>
                                        <li class="list-group-item"><img
                                                src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                alt="avatar headshot">
                                            <a href="">Spring</a> with 100 posts!
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                <p>There are currently no forums to show!</p>
            </div>
        @endif
    </div>
@endsection
