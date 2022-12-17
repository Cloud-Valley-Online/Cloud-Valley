@extends('layouts.app')

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
                                Subforum todo
                            </div>
                        </div>
                    </div>

                <div class="row justify-content-center">
                    <div class="col-2">
                       <a href="/forum/compose/thread/new/{{ request()->segment(2) }}">
                            <button class="btn btn-primary">New Topic</button>
                       </a>
                    </div>
                    <div class="col-5 offset-5" >
                        <div class="pagination">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                               {{ $threads->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thread -->
                <div class="row p-2">
                    <table class="table table-striped border border-1 border-dark rounded">
                        <thead>
                            <tr>
                                <th scope="col">Topic</th>
                                <th scope="col">Replies</th>
                                <th scope="col">Created on</th>
                                <th scope="col">Last post</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($threads)
                                @foreach ($threads as $thread)
                                    <tr>
                                        <th scope="row">
                                            <a href="" class="text-decoration-none">
                                                <img class="pe-1"
                                                    src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/39/6f/418277428f6f39_48x48.gif?t=1538183181_6.00_00"
                                                    alt="avatar headshot">
                                            </a>

                                            @if ($thread->thread_announced)
                                                <span><i class="fa-sharp fa-solid fa-bullhorn"></i> Announcement:</span>
                                            @elseif($thread->thread_stuck)
                                                <span><i class="fa-solid fa-note-sticky"></i> Sticky:</span>
                                            @endif


                                            <a class="text-decoration-none"
                                                href="/forum/{{ $thread->forum->forum_name_clean }}/{{ $thread->id }}/{{ $thread->thread_subject_clean }}">
                                                <span>{{ $thread->thread_subject }}</span>
                                            </a>

                                        </th>
                                        <td>{{ $thread->reply_count }}</td>
                                        <td>{{ $thread->created_at->diffForHumans() }}</td>
                                        <td><a href="">Spring</a> {{ Carbon\Carbon::parse($thread->last_reply_date)->diffForHumans() }}</td>
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
