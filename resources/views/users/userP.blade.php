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
             @if($user->id == Auth::user()->id)
            <div class="row">
                    <button class="ed"><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit Profile</span></button>
                    <button class="sh pull-right"><i class="fa fa-share" aria-hidden="true"></i><span>Share</span></button>
            </div>
            @endif
                <div id="down">
                    <div class="row">
                        <div class="col-md-3  left">
                            <div class=" one" style=" border-top-left-radius: 3px;">
                                <span><a class="fa fa-pencil" aria-hidden="true"></a></span>
                               
                                    <h1>{{ $user->name }}<span>{{ $user->user_surname }}</span></h1>
                               
                                <img src="/storage/mask.jpg" alt="">
                            @if($followOrNot)
                                <form method="POST" action="/follow">
                                    <input type="submit" name="follow"  value="unfollow" >
                                    <input type="hidden" name="share_user_id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            @else
                                <form method="POST" action="/follow">
                                    <input type="submit" name="follow"  value="follow" >
                                    <input type="hidden" name="share_user_id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>

                            @endif
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
                         @foreach ($share as $sharee)
                        <div class="thumb">
                            <div class="thumbImgWrapper">
                                <img src="{{ $sharee->share_content }}" class="thumbImg img-responsive">
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
                                        <input type="hidden" name="share_id" value="{{ $sharee->id }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                                <div class="col-xs-1 thumbLikeCount">
                                    <p>{{ $sharee->like_systems->where('share_id', $sharee->id )->count() }}</p>
                                </div>
                                @if($user->id == Auth::user()->id)
                                    <a  href="/edit/{{ $sharee->id }}" type="button" class="btn btn-default" >Update</a>
                                    <form method="POST" action="/delete/{{ $sharee->id }}">
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                @endif
                                <div class="thumbUserName">
                                </div>
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
