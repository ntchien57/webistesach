@extends($theme . '.shop_layout', ['title' => $news_currently->title, 'header' => ['description' => $news_currently->description, 'description' => $news_currently->description, 'keyword' => $keyword, 'og_image' => asset('documents/website/' . $news_currently->image)]])
@push('style')
    <link href="{{ asset('css/guest/news/news-detail.css') }}" rel="stylesheet" type="text/css" />
    <style>
        ul {
            margin-left: 1rem;
        }
    </style>
@endpush
@section('content')
    <main id="main" class="">

        <div id="content" class="blog-wrapper blog-single page-wrapper">


            <div class="row row-large ">

                <div class="large-9 col">



                    <article id="post-265"
                        class="post-265 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                        <div class="article-inner ">
                            <header class="entry-header">
                                {{-- <div class="entry-image relative">
                                <a href="index.htm">
                                    <img width="500" height="411" src="../wp-content/uploads/2017/10/den-hoa-ky.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="../wp-content/uploads/2017/10/den-hoa-ky.jpg 500w, ../wp-content/uploads/2017/10/den-hoa-ky-300x247.jpg 300w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                                <div class="badge absolute top post-date badge-square">
                                    <div class="badge-inner">
                                        <span class="post-date-day">18</span><br>
                                        <span class="post-date-month is-small">Th10</span>
                                    </div>
                                </div>
                            </div> --}}
                                <!-- .entry-image -->

                                <div class="entry-header-text entry-header-text-bottom text-left">
                                    <h6 class="entry-category is-xsmall">
                                        <a href="{{ url('tin-tuc.html') }}" rel="category tag">Tin tức</a>
                                    </h6>

                                    <h1 class="entry-title">{{ $news_currently->title }}</h1>
                                    <div class="entry-divider is-divider small"></div>

                                    <div class="entry-meta uppercase is-xsmall">
                                        <span class="posted-on">Ngày đăng <a  rel="bookmark"><time
                                                    class="entry-date published"
                                                    datetime="2017-10-18T08:15:56+00:00">{{ date_format($news_currently->updated_at, 'd/m/Y') }}</time></a></span>
                                        <span class="byline"> bởi <span class="meta-author vcard"><a class="url fn n"
                                                   >admin</a></span></span>
                                    </div>
                                    <!-- .entry-meta -->
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content single-page">

                                <p class="newsdetail-brief">{!! $news_currently->content !!}</p>
                                 
                                                    
                            </div>
                            <!-- .entry-content2 -->



                        

                        </div>
                        <!-- .article-inner -->
                    </article>
                    <!-- #-265 -->

                 
                    <!-- #comments -->
                </div>
                <!-- .large-9 -->

                <div class="post-sidebar large-3 col" style="padding-top:10px;" >
                    <div id="secondary" class="widget-area " role="complementary">

                        <aside id="flatsome_recent_posts-5" class="widget flatsome_recent_posts"> <span
                                class="widget-title "><span>Bài viết &#8211; tin tức</span></span>
                            <div class="is-divider small"></div>
                            <ul>



                                @foreach ($blogs_limit5 as $item)
                                <li class="recent-blog-posts-li ">
                                    <div class="flex-row recent-blog-posts align-top pt-half pb-half ">
                                        <div class="flex-col mr-half ">
                                            <div class="badge post-date badge-square ">
                                                <div class="badge-inner bg-fill "
                                                    style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url({{ asset('documents/website/'.$item->image) }}); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;>
                                                <span class="
                                                    post-date-day"="">{{ date_format($item->updated_at, 'd') }}<br>
                                                    <span class="post-date-month is-xsmall">Th{{ date_format($item->updated_at, 'm') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .flex-col -->
                                        <div class="flex-col flex-grow">
                                            <a href="{{ url('bai-viet/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}"
                                                title="{{ $item->title }}">{{ $item->title }}</a>
                                            <span class="post_comments oppercase op-7 block is-xsmall"><a
                                                    href="{{ url('bai-viet/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}"></a></span>
                                        </div>
                                    </div>
                                    <!-- .flex-row -->
                                </li>
                                @endforeach
                             




                            </ul>
                        </aside>
                    </div>
                    <!-- #secondary -->
                </div>
                <!-- .post-sidebar -->

            </div>
            <!-- .row -->

        </div>
        <!-- #content .page-wrapper -->


    </main>

    <script>
        document.body.classList.remove('home');
    </script>
@endsection
@push('scripts')
    <script>
        $("#news-nav_item").toggleClass("active");
    </script>
@endpush
