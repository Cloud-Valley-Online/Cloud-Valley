@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')

    <div class="container main-content-wrapper border border-dark border-1 rounded p-2 shadow-sm">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-1" style="width:55px;">
                                <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif" alt="Chatterbox">
                            </div>
                            <div class="col-11 pt-2">
                                <h2>Topic Listing</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sub Forums -->

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            ToDO
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-10">
                        <button class="btn btn-primary">New Topic</button>
                    </div>
                    <div class="col-2">
                        <a href="">1</a><a href="">2</a><a href="">3</a>
                    </div>
                </div>


                <!-- Thread -->
                <div class="row p-2">
                    <table class="table table-striped border border-1 border-dark rounded">
                        <thead>
                            <tr>
                                <th scope="col">Topic</th>
                                <th scope="col">Replies</th>
                                <th scope="col">Author</th>
                                <th scope="col">Last Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($threads)
                                @foreach ($threads as $thread)
                                    <tr>
                                        <th scope="row">
                                            <a href="/forum/{{ $thread->forum->forum_name_clean }}/{{ $thread->thread_subject_clean }}/{{ $thread->id }}">{{ $thread->thread_subject }}</a>
                                        </th>
                                        <td>{{ $thread->reply_count }}</td>
                                        <td><a href="Spring">{{ $thread->last_poster_name }}</a></td>
                                        <td>{{ $thread->last_reply_date }}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
