<div>
    <div class="row">
        <div class="row post-username my-3 p-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 rounded p-4 shadow" style="max-height: 350px;">
                        <h5>Quick reply</h5>

                            <div class="form-group">
                                <textarea class="form-control" wire:model="post" name="post" cols="100" rows="10">

                                </textarea>
                            </div>
                            <div class="btngroup mt-1">
                                <button class="btn btn-sm btn-primary">Submit</button>
                                <button class="btn btn-sm btn-primary" id="preview">Preview</button>
                            </div>
                    </div>

                    <div class="col-md-7">
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
                                           {{ nl2br($post) }}
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