@extends('layouts.app')

@section('title', 'Gaiaonline')

<style>
    .card-img {

        filter: brightness(50%);
    }

    .nav-tabs {
        --bs-nav-tabs-border-width: px;
    --bs-nav-tabs-border-color: #dee2e6;
    --bs-nav-tabs-border-radius: 0.375rem;
    --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
    --bs-nav-tabs-link-active-color: #495057;
    --bs-nav-tabs-link-active-bg: #f8fafc;
    --bs-nav-tabs-link-active-border-color: #4e6c9a #4e6c9a #4e6c9a !important;
    border-bottom: 5px solid #4e6c9a !important;
}
</style>

@section('content')
    <div class="container-fluid main-content-wrapper">
        <div class="row">
            <div class="col-12 d-sm-none d-md-block">
                <!-- Nested Row to hide on mobile -->
                <div class="row">
                    <h5>Trending user forums</h5>

                    <div class="col d-none d-md-block">
                        <div class="card text-bg-dark overflow-auto">
                            <img src="https://i0.wp.com/www.alittlebithuman.com/wp-content/uploads/2022/04/maxresdefault-1.jpg?resize=1170%2C700&ssl=1"
                                class="card-img img-responsive" style="height: 200px;" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title bolder">Anime</h5>
                                <p class="card-text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Laudantium...</p>
                                <p class="card-text bold"><img
                                        src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot"> <small>Created by: Spring</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-none d-md-block">
                        <div class="card text-bg-dark overflow-auto">
                            <img src="https://media.wired.com/photos/62feb60bcea7c0581e825cb0/master/pass/Fate-of-Game-Preservation-Games-GettyImages-1170073827.jpg"
                                class="card-img" style="height: 200px;" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title bolder">Video Games</h5>
                                <p class="card-text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Laudantium...</p>
                                <p class="card-text bold"><img
                                        src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot"> <small>Created by: Spring</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-none d-md-block">
                        <div class="card text-bg-dark overflow-auto">
                            <img src="https://s.yimg.com/os/creatr-uploaded-images/2022-02/13f2b700-97f8-11ec-9e9f-b1970c5a83c5"
                                class="card-img" style="height: 200px;" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title bolder">Pokemon</h5>
                                <p class="card-text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Laudantium...</p>
                                <p class="card-text bold"><img
                                        src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot"> <small>Created by: Spring</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-none d-md-block">
                        <div class="card text-bg-dark overflow-auto">
                            <img src="https://u1cdn.gaiaonline.com/mfs/index/adminupload/c3b982e0aa22.png" class="card-img"
                                style="height: 200px;" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title bolder">Gaia</h5>
                                <p class="card-text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Laudantium...</p>
                                <p class="card-text bold"><img
                                        src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot"> <small>Created by: Spring</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-none d-md-block">
                        <div class="card text-bg-dark overflow-auto">
                            <img src="https://www.rd.com/wp-content/uploads/2019/09/GettyImages-621924830-scaled.jpg"
                                class="card-img" style="height: 200px;" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title bolder">Funny</h5>
                                <p class="card-text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Laudantium...</p>
                                <p class="card-text bold"><img
                                        src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot"> <small>Created by: Spring</small></p>
                            </div>
                        </div>
                    </div>
                    <small>Updated x minutes ago.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="w-75 mx-auto">
                    <ul class="nav nav-tabs mb-5">
                        <li class="nav-item">
                          <a class="nav-link active" style="background:#4d6c99; color:white;" href="#">Forum List</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Trending </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">New Posts</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">New Threads</a>
                        </li>
                      </ul>
                      
                    <a href="" class="text-decoration-none bolder" style="color:#4e6c9a;">
                        <h3>General Forums</h3>
                    </a>
                    <div style="border:1px solid #4d6c99;"></div>
                </div>
                <div class="main-content w-75 mx-auto p-3 my-3 border" style="background:white; border-color: #edf4fa;">
                    @isset($forums)
                        @foreach ($forums as $forum)
                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif" class="img-rounded"
                                        alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}" class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row" style="background-color:#edf4fa">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif" class="img-rounded"
                                        alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="w-75 mx-auto">
                    <a href="" class="text-decoration-none bolder" style="color:#4e6c9a;">
                        <h3>General Forums</h3>
                    </a>
                    <div style="border:1px solid #4d6c99;"></div>
                </div>
                <div class="main-content w-75 mx-auto p-3 my-3 border" style="background:white; border-color: #edf4fa;">
                    @isset($forums)
                        @foreach ($forums as $forum)
                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row" style="background-color:#edf4fa">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="w-75 mx-auto">
                    <a href="" class="text-decoration-none bolder" style="color:#4e6c9a;">
                        <h3>General Forums</h3>
                    </a>
                    <div style="border:1px solid #4d6c99;"></div>
                </div>
                <div class="main-content w-75 mx-auto p-3 my-3 border" style="background:white; border-color: #edf4fa;">
                    @isset($forums)
                        @foreach ($forums as $forum)
                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row" style="background-color:#edf4fa">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif"
                                        class="img-rounded" alt="Chatterbox">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="/forum/{{ $forum->forum_name }}/{{ $forum->id }}"
                                        class="text-decoration-none">
                                        <h5 style="color:#4e6c9a;">
                                            {{ $forum->forum_name }}
                                        </h5>
                                    </a>
                                    <p>Welcome to the Chatterbox! Stay around and have fun.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 my-4">
                                    <span style="color:#5c656f; font-size: 80%; border-right: 1px solid black;"
                                        class="px-1">Threads 50k</span> <span style="color:#5c656f; font-size: 80%;">Posts:
                                        100K</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                        alt="avatar headshot">
                                    <a href="Is this" class="text-decoration-none bolder" style="color:#212121">This is a new
                                        thread come join me us...</a>
                                    <small style="color:#5c656f;">
                                        Posted: Today at 2:27 PM
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
