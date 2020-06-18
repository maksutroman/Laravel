<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->
<?php $testimonials = App\Testimonial::all();?>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                            {{-- <?php $autor = App\User::find($testimonial->id)?> --}}
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="{{Voyager::image( $testimonial->avatar) }}" alt="" class="img-fluid">
                                <h4>{{$testimonial->autor_name}}</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> {{$testimonial->title}}</h3>
                            <p class="lead">{{$testimonial->body}}</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                     @endforeach
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
