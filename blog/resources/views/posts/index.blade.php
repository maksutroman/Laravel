@extends('layouts.app')
@section('content')

<section >
	
	
	@include('includes.blog')
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
					@if(Count($posts)>0)
					<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
					@else
					<p class="lead">Not Found</p>
					<a href="/blog" class="btn btn-success">Back to Blog</a>
					@endif
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="{{$post->img ?? asset('images/default.jpg')}}" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">{{ $post->created_at }}</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">{{ $post->name }}</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">{{ $post->short_title }}</a></h2>
						</div>
						<div class="blog-desc">
							<p>{{ $post->description }}</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More<span></a>
						</div>
					</div>
                </div><!-- end col -->
                    @endforeach
                <div>
					
					{{ $posts->links() }}
				
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    
	</section>
	@endsection