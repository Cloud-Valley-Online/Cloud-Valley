<div x-data="{ open: false }">
 <!-- Post successful  -->
 @if (session()->has('message'))
 <div class="alert alert-success">
     {{ session('message') }}
 </div>
@endif

<!-- LW Validation -->
@error('post') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- Load TinyMCE config -->
    <x-head.tinymce-config/>
    <div class="col-sm-3 thread-buttons">
        <div class="row align-items-start">
            <div class="col-12">
               <!-- Example split danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Reply</button>
                    <button x-on:click="open = ! open" type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                            style="border:1px solid #0a58ca;">
                    <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                </div>
                <button type="button" class="btn btn-primary">Subscribe</button>
                <button type="button" class="btn btn-primary">Report</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row post-username my-3 p-3">
            <div class="col-md-12">
                <div class="row" x-show="open" x-transition>
                    <!--TinyMCE quick-reply-->
                    <div wire:ignore class="col-md-4 rounded p-4 shadow">
                        <h3>Quick reply</h3>
                            <textarea wire:model="post" id="myeditorinstance" name="post"></textarea>
                            <button wire:click="save" class="btn btn-primary mt-1">Submit</button>
                    </div>

                    <!-- Preview area -->
                    <div class="col-md-8">
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
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row post-buttons mt-2">
                                    <div class="col">
                                       <small class="fst-italic">This is a live preview</small>
                                    </div>
                                </div>

                                <div class="row post-bubble">
                                    <div class="col post mt-2 rounded" style="border:2px solid #818181; ">
                                        <p style="font-weight:100;" class="post-body">
                                           {!!  $post !!}
                                        </p>
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
