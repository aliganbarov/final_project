@extends('layout')
@section('content')
        <section id="vusal">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-xs-12">
                        <div class="itemsMain">
                        @foreach ($shares as $share)
                            <div class="boxes">
                                <div class="img">
                                    <a href="#">
                                        <img src="{{ $share->share_content }}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <p id="firstP"><a href="#">{{ $share->share_title }}</a></p><br>
                                    <p id="secondP">
                                        by&nbsp;&nbsp;<span><a href="/profile/{{$share->users->id}}">{{ $share->users->name }}</a></span>
                                    </p>
                                    <hr>
                                    <p id="thirdP">{{ $share->share_description }}</p>
                                    
                                    <div class="bottom">
                                        <i class="fa fa-thumbs-o-up" aria-hidden="true">&nbsp;&nbsp;367</i>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                            
                    <div class="col-lg-3 col-xs-12 col-md-3 col-sm-6 fixed">
                        <div class="line"></div>
                        <div id="right">
                            <p>YOUR CREATIVE FIELDS</p>
                            <span class="firstLine"></span>
                            <input  type="search" placeholder=" Search...">
                            <span class="secondLine"></span>
                            <p id="para">FILTER BY</p>
                            <div class="schedule">
                                <span><a href="#">SCHOOLS </a><i class="first fa fa-lg fa-graduation-cap" aria-hidden="true"></i></span>
                                <span><a href="#">TOOLS USED </a><i class=" second fa-lg fa fa-wrench" aria-hidden="true"></i></span>
                                <span><a href="#">COLOR </a><i class="third fa-lg fa fa-tint" aria-hidden="true"></i></span>
                            </div>
                            <div class="scheduleBottom"><a href="#">VISIT GALLERIES </a><i class="fa fa-lg fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop