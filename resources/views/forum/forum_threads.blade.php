@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')
    <div class="container main-content-wrapper border border-dark border-1 rounded p-2 shadow-sm">
        <div class="row">
            <div class="col-sm-12">
                <div class="row" style="border:1px solid red;">
                    <div class="col-12">
                        Topic listing: Chatterbox...todo
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <button class="btn btn-primary">New Topic</button>
                    </div>
                    <div class="col-2">
                        <a href="">1</a><a href="">2</a><a href="">3</a>
                    </div>
                </div>
                <div class="main-content border border-dark rounded mx-auto p-3 my-3" style="background:white;">
                    <div class="row p-2">
                        <table class="table table-striped border border-1 border-dark">
                            <thead>
                              <tr>
                                <th scope="col">Topic</th>
                                <th scope="col">Replies</th>
                                <th scope="col">Author</th>
                                <th scope="col">Last Post</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">This is a topic</th>
                                <td>10 is a topic</td>
                                <td>headshot</td>
                                <td>today</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    {{-- @isset($threads)
                        @foreach ($threads as $thread)
                            <a
                                href="/forum/{{ $thread->forum->forum_name_clean }}/{{ $thread->thread_subject_clean }}/{{ $thread->id }}">{{ $thread->thread_subject }}</a>
                        @endforeach
                    @endisset --}}
                </div>
            </div>
        </div>

    </div>
@endsection
