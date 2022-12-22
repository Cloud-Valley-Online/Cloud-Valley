@extends('layouts.app')

@section('content')

    <x-head.tinymce-config-default />

    <script src="{{ asset('js/forum/compose.js') }}"></script>

    <div x-data class="container posts-main-content-wrapper p-3 rounded" style="background: white;">

        <div class="row">

            <div class="col-1" style="width:55px;">

                <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif" alt="Chatterbox">

            </div>

            <div class="col-11 pt-2">

                <h2>Post a new thread</h2>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12">

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/forum">{{ config('app.name') }} Forums</a></li>

                        <li class="breadcrumb-item"><a href="/forum">{{ $forum->category->name }}</a></li>

                        <li class="breadcrumb-item active"> <a
                                href="/forum/{{ $forum->id }}/{{ $forum->forum_name_clean }}">{{ $forum->forum_name }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page"> New Thread </li>

                    </ol>

                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- post area -->
                <form method="post" action="/forum/storethread">
                    @csrf
                    <input type="text" name="subject" class="form-control mb-1" placeholder="Thread topic" required>
                    <input type="text" name="tags" class="form-control mb-1"
                        placeholder="Example: art, gaming, movies" required>
                    <textarea name="post" id="newthread"></textarea>
                    <input type="submit" class="btn btn-primary mt-1"></button>
                    <input type="hidden" name="forum_id" value={{ last(request()->segments()) }}>
            </div>

            <div class="col-sm-4">
                <!-- Poll area -->
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-square-poll-horizontal"></i> Add poll
                </button>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <div class="form-group" id="options">
                            <label for="poll-question">Poll Question</label>
                            <textarea class="form-control" name="poll-question" id="poll-question" rows="2"></textarea>
                            <label for="option1">Options</label>
                            <input type="text" name="option1" class="form-control">
                            <input type="text" name="option2" id="option2" class="form-control d-none">
                            <input type="text" name="option3" id="option3" class="form-control d-none">
                            <input type="text" name="option4" id="option4" class="form-control d-none">
                            <input type="text" name="option5" id="option5"class="form-control d-none">
                            <input type="text" name="option6" id="option6"class="form-control d-none">
                            <input type="text" name="option7" id="option7" class="form-control d-none">
                            <input type="text" name="option8" id="option8" class="form-control d-none">
                            <input type="text" name="option9" id="option9" class="form-control d-none">
                            <input type="text" name="option10" id="option10" class="form-control d-none">
                        </div>
                        <a x-on:click="addOption()" class="btn btn-primary mt-1"><i class="fa-solid fa-plus"></i> Add
                            more</a>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    </div>

@endsection
