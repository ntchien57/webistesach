@extends($theme . '.shop_layout')

@push('style')
    <link href="{{ asset('css/guest/news/news.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div class="page-title shop-page-title product-page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container" style="padding-left:0">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-medium">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang chủ</a> <span class="divider">&#47;</span> <a>{{ $title }}</a> </nav>
            </div>
        </div>
        <!-- .flex-left -->
      
        <div class="flex-col medium-text-center">
        </div>
        <!-- .flex-right -->
    </div>
    <!-- flex-row -->
  
</div>

<main id="main" class="">

    <div id="content" class="blog-wrapper blog-archive page-wrapper">


        <div class="row row-large ">

            <div class=" col">
                <header class="entry-header">
                    <h1 class="entry-title mb uppercase">{{ $title }}</h1>
                </header>

                <div id="row-509010257" class="row large-columns-3 medium-columns-3 small-columns-1 row-masonry"
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
        @if (isset($slug))
            $('#menu-nav .nav > .nav-links > a[slug="{{ $slug }}"]').toggleClass("active");
        @endif
        @if (isset($categorySelf))
            @if ($categorySelf->getParent())
                $("#menu-article-{{ $categorySelf->getParent()->id }}").toggleClass("active");
            @else
                $("#menu-article-{{ $categorySelf->id }}").toggleClass("active");
            @endif
        @endif
    </script>
@endpush
