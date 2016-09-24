@extends('layout')
@section('content')
    <section id="teymur">
        <section id="profile">
            <div class="container-fluid">
                <div class="col-md-12 text-center">
                    <a href=""><span>MY PROFILE</span></a>
                </div>
            </div>
        </section>
        <section id="projects" class="container">
            <div class="mycon">
                <div class="row">
                    <button class="ed"><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit Profile</span></button>
                    <button class="sh pull-right"><i class="fa fa-share" aria-hidden="true"></i><span>Share</span></button>
                </div>
                <div id="down">
                    <div class="row">
                        <div class="col-md-3  left">
                            <div class=" one" style=" border-top-left-radius: 3px;">
                                <span><a class="fa fa-pencil" aria-hidden="true"></a></span>
                                <h1></h1>
                                <img src="assets/img/no.jpg" alt="">
                            </div>
                            <div class="col-md-12  two">
                                <ul>
                                    <li><i class="fa fa-eye pull-left" aria-hidden="true"></i>
                                        <p>PROJECT VIEWS</p><span class="pull-right">0</span></li>
                                    <li><i class="fa fa-thumbs-up pull-left" aria-hidden="true"></i>
                                        <p>APPRECIATIONS</p><span class="pull-right">0</span></li>
                                    <li><i class="fa fa-user pull-left" aria-hidden="true"></i>
                                        <p>FOLLOWERS</p><span class="pull-right">0</span></li>
                                    <li><i class="fa fa-user pull-left" aria-hidden="true"></i>
                                        <p>FOLLOWING</p><span class="pull-right">0</span></li>
                                </ul>
                            </div>
                            <div class="col-md-12  three">
                                <span><a class="fa fa-pencil" aria-hidden="true"></a></span>
                                <h1>ABOUT ME</h1>
                                <P>---</P>
                            </div>
                            <div class="col-md-12  four">
                                <span><a class="fa fa-pencil" aria-hidden="true"></a></span>
                                <h1>WORK EXPERIENCE</h1>
                                <P>---</P>
                            </div>
                            <div class="col-md-12 fifth" style=" border-bottom-left-radius: 3px;">
                                <h1>MEMBER SINCE: SEPTEMBER 8, 2016</h1>
                            </div>
                        </div>
                        <div class="col-md-9   right">
                            <div class="col-md-12  text-center proje ">
                                <h1><span>Projects</span></h1>
                            </div>
                            <div class="col-md-12  text-center file">
                                <label for="inpt" class="col-md-8 col-md-offset-2 upload">
                                    <div><i class="fa fa-cloud-upload fa-5x icon" aria-hidden="true"></i></div>
                                    <h1>Add your first project</h1>
                                    <input type="file" id="inpt">
                                    <label for="inpt"><i class="fa fa-cloud-upload pull-right " aria-hidden="true"><span>Upload Files</span></i></label>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
