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
                <div id="down">
                    <div class="row">
                        <div class="col-md-3  left">
                            <div class=" one" style=" border-top-left-radius: 3px;">
                                <span><a href="/profile/{{Auth::user()->id}}/editprofile" class="fa fa-pencil" aria-hidden="true"></a></span>
                                    <h1>{{ \Auth::user()->name }}<span>{{ \Auth::user()->user_surname }}</span></h1>
                                <img src="{{ Auth::user()->avatar }}">
                            </div>
                            <div class="col-md-12  two">
                                <ul>
                                    <li><i class="fa fa-thumbs-up pull-left" aria-hidden="true"></i>    
                                        <p>APPRECIATIONS</p><span class="pull-right">0</span></li>
                                    <li><i class="fa fa-user pull-left" aria-hidden="true"></i>
                                     <p>FOLLOWERS</p><span class="pull-right">{{$follower}}</span></li>
                                    <li><i class="fa fa-user pull-left" aria-hidden="true"></i>
                                        <p>FOLLOWING</p><span class="pull-right">{{$following}}</span></li>
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
                                @foreach ($shares as $share)
                        <div class="thumb" id="{{ $share->id }}">
                            <div class="thumbImgWrapper">
                                <img src="{{ $share->share_content }}" class="thumbImg img-responsive">
                            </div>

                            <div class="row row1">
                                <div class="col-xs-1 thumbLogo">
                                    <img src="https://a3.behance.net/img/galleries/icons/square/1x/gallery-4.png?cb=244765838">
                                </div>
                            </div><!-- end .row1 -->

                            <div class="row row2">
                                <div class="col-xs-1 thumbLikeIcon">
                                    <form method="POST" action="/like">
                                        <input type="submit" name="beyen" value="beyen">
                                        <input type="hidden" name="share_id" value="{{ $share->id }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                                <div class="col-xs-1 thumbLikeCount">
                                    <p>{{ $share->like_systems->where('share_id', $share->id )->count() }}</p>
                                </div>
                                <a  href="/edit/{{ $share->id }}" type="button" class="btn btn-default" >Update</a>
                                <form method="POST" action="/delete/{{ $share->id }}">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>
                        </div><!-- end .thumb -->
                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
