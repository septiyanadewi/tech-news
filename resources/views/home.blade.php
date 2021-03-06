@extends('layouts.app')
  
@section('content')

    <!-- SLIDER -->
    @if($sliders)
        <div class="slider">
            <div class=" py-0">
                <div class="owl-carousel hero-slide owl-style">
                    @foreach($sliders as $slider)
                        <div class="">
                            <div class="container">
                                <div class="half-post-entry d-block d-lg-flex bg-light">
                                <div class="img-bg" style="background-image: url('{{ $slider->image_bg }}')"></div>
                                <div class="contents">
                                    <span class="caption">Editor's Pick</span>
                                    <h2><a href="blog-single.html">{{ $slider->title }}</a></h2>
                                    <p class="mb-3">{{ $slider->description }}</p>
                                    
                                    <div class="post-meta">
                                    <span class="d-block">
                                        <a href="#">{{ $slider->creator_name }}</a> 
                                        @if(count($slider->news_keywords)>0)
                                            in 
                                            @foreach($slider->news_keywords as $keyword)
                                                @if($keyword)
                                                    <a href="#">{{ $keyword->keyword }}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <span class="date-read">{{ $slider->published_date_formatted }} </span>
                                    </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                    <!-- <div class="">
                        <div class="container">
                            <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image: url('images/big_img_1.jpg')"></div>
                            <div class="contents">
                                <span class="caption">Editor's Pick</span>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                                
                                <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>     -->
                </div>
            </div>
        </div>
    @endif
@endsection