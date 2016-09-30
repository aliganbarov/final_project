@extends('layout')

@section('content')
<section id="activity">
        <div class="wrapper">
            <div class="my_container">
                <div class="thumbWrapper">
                    @foreach ($shares as $share)
                        <div class="thumb" id="{{ $share->id }}">
                            <div class="thumbImgWrapper">
                                <img src="{{ $share->share_content }}" class="thumbImg img-responsive">
                            </div>

                            <div class="row row1">
                                <div class="col-xs-1 thumbLogo">
                                    <img src="https://a3.behance.net/img/galleries/icons/square/1x/gallery-4.png?cb=244765838">
                                </div>
                                <div class="col-xs-6 thumbType">
                                    <a href="#">Motion</a>
                                </div>
                                <div class="col-xs-1 thumbStar pull-right">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div><!-- end .row1 -->

                            <div class="row row2">
                                <div class="col-xs-1 thumbLikeIcon">
                                   <form method="POST" action="{{url('/like')}}">
                                       <input type="submit" name="beyen" id="bb" value="beyen" style="">
                                       {{-- <label for="bb" ><i class="fa fa-thumbs-up" aria-hidden="true"></i></label> --}}
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="hidden" name="share_id" value="{{ $share->id}}">     
                                   </form> 
                                </div>
                                <div class="col-xs-1 thumbLikeCount">
                                    <p>{{ $share->like_systems->where('share_id',$share->id)->count() }}</p>  
                                </div>
                                <div class="thumbUserName">
                                    <span>by</span>
                                    <a href="/profile/{{$share->users->id}}" class="user_name">{{ $share->users->name }}</a>
                                </div>
                            </div>
                                                  
                        </div><!-- end .thumb -->
                    @endforeach
                </div><!-- end .thumbWrapper -->
                
                    @foreach ($shares as $share)
                    <div class="smallInfo hide" id="user_small_{{ $share->id }}">
                        <div class="row1">
                            <div>
                                <img src="/storage/mask.jpg">
                                <div class="smallInfoName">
                                    <a href="/profile/{{$share->users->id}}" class="name">{{ $share->users->name }}</a>
                                </div>
                                <div class="smallInfoFollow pull-right text-center">
                                    <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
                                </div>
                            </div>
                        </div><!-- end .row1 -->

                        <div class="clear"></div>

                        <div class="row2">
                            <div class="smallImgWrapper">
                            <?php 
                                $i = 0; 
                                $limit = $share->users->shares->count() < 3 ? $share->users->shares->count() : 3;
                            ?>
                                @while($i < $limit)
                                <img src="{{ $share->users->shares[$i]->share_content }}" >
                                <?php $i++ ?>
                                @endwhile
                            </div>
                        </div><!-- end .row2 -->

                        <div class="row3">
                            <div class="smallImgViews">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>1003</span>
                            </div>
                            <div class="smallImgLike">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i><span>412</span>
                            </div>
                            <div class="smallImgFollowe">
                                <i class="fa fa-users" aria-hidden="true"></i><span>1003</span>
                            </div>
                        </div>      
                    </div><!-- end .smallInfo -->
                @endforeach

            </div>
        </div>
</section>
@stop
