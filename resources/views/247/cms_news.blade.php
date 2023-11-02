@extends($theme . '.shop_layout', ['title' => 'Tin tức'])

@push('style')
    <link href="{{ asset('css/guest/news/news.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <main id="main" class="">

        <div id="content" class="blog-wrapper blog-archive page-wrapper">


            <div class="row row-large ">

                <div class=" col">


                    <div id="row-509010257" class="row large-columns-4 medium-columns-3 small-columns-1 row-masonry"
                        data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>

                        @foreach ($news as $item)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img width="300" height="200"
                                                    src="{{ asset('documents/website/'.$item->image) }}"
                                                    class="attachment-medium size-medium wp-post-image" alt=""
                                                    srcset="{{ asset('documents/website/'.$item->image) }} 300w, {{ asset('documents/website/'.$item->image) }} 670w"
                                                    sizes="(max-width: 300px) 100vw, 300px">
                                            </div>
                                        </div>
                                        <!-- .box-image -->
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">


                                                <h5 class="post-title is-large ">{{ $item->title }}</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">{{ $item->description }}</p>



                                            </div>
                                            <!-- .box-text-inner -->
                                        </div>
                                        <!-- .box-text -->
                                        <div class="badge absolute top post-date badge-square">
                                            <div class="badge-inner">
                                                <span class="post-date-day">{{ date_format($item->updated_at, "d") }}</span><br>
                                                <span class="post-date-month is-xsmall">{{ date_format($item->updated_at, "m") }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .box -->
                                </a>
                                <!-- .link -->
                            </div>
                            <!-- .col-inner -->
                        </div>
                        @endforeach
                      
                        <!-- .col -->

                        
                        <!-- .col -->
                        
                        <!-- .col -->
                    </div>

                </div>
                <!-- .large-9 -->

             
            </div><!-- .flex-col -->

        </div><!-- .flex-row -->

        {!! $news->links($theme.'.components.my-pagination') !!}
  
   
        <!-- .page-wrapper .blog-wrapper -->


    </main>
    <script>
        document.body.classList.remove('home');
    </script>
@endsection
@push('scripts')
    <script>
        $(".news-nav_item").toggleClass("active");
    </script>
@endpush
