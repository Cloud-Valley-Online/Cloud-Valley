    <x-head.tinymce-config-quick-reply />

    <!-- Handle post success message  -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Handle post Error message  -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div x-data="{ open: false }" class="wrapper">
        <!-- Post area -->
        <div class="col-sm-3 thread-buttons">
            <div class="row align-items-start">
                <div class="col-12">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Reply</button>
                        <button x-on:click="open = ! open" type="button"
                            class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false" style="border:1px solid #0a58ca;">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                    </div>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Subscribe</button>
                    <button type="button" class="btn btn-primary">Report</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row post-username my-3 p-3">
                <div class="col-md-12">
                    <div class="row" x-show="open" x-transition>
                        <!--quick-reply textarea-->
                        <div class="col-md-4 p-4">
                            <form action="/forum/thread/storepost" method="POST">
                                @csrf
                                <h3>Quick reply</h3>
                                <textarea name="post" id="post"></textarea>
                                <button class="btn btn-primary mt-1">Submit</button>
                                <input type="hidden" name="thread_id" value={{ last(request()->segments()) }}>
                            </form>
                        </div>
                        <!-- Preview area -->
                        <div x-data="{ open: false }" class="col-md-8 shadow rounded">
                            <div class="row post-area p-2">
                                <div class="col-sm-1 post-avi-side" style="width:150px;">
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
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row post-buttons mt-2">
                                        <div class="col">
                                        </div>
                                    </div>
                                    <div class="row post-bubble overflow-auto">
                                        <!-- Preview post content -->
                                        <div class="col-12 post mt-2 rounded" style="border:2px solid #818181; ">
                                            <p id="preview-post-content"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
