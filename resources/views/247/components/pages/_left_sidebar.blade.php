
                <div class="large-3 col col-first col-divided" style="padding-top: 10px;">
                    <div id="secondary" class="widget-area " role="complementary">

                        <aside id="flatsome_recent_posts-5" class="widget flatsome_recent_posts"> <span
                                class="widget-title "><span>Bài viết &#8211; tin tức</span></span>
                            <div class="is-divider small"></div>
                            <ul>

                                @foreach ($news as $item)
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
                                            <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}"
                                                title="{{ $item->title }}">{{ $item->title }}</a>
                                            <span class="post_comments oppercase op-7 block is-xsmall"><a
                                                    href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}"></a></span>
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