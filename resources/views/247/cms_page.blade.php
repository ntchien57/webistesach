@extends($theme . '.shop_layout')
@section('slide')
@endsection

@section('content')
    <main id="main" class="">


        <div class="page-wrapper page-left-sidebar">
            <div class="row">

                <div id="content" class="large-9 right col" role="main">
                    <div class="page-inner">

                        <h2 class="newsdetail-brief">{{ $title }}</h2>
                        <p class="newsdetail-brief">{!! $page->content !!}</p>
                 


                    </div>
                    <!-- .page-inner -->
                </div>
                <!-- end #content large-9 left -->

               @include($theme. '.components.pages._left_sidebar')
            </div><!-- .flex-col -->
            
        </div><!-- .flex-row -->



        <script>
            document.body.classList.remove('home');
        </script>
    </main>
@endsection

@section('breadcrumb')
    {{-- <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">Trang chủ</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class="">{{ $title }}</li>

              </ul>
            </div>
          </div>
        </div>
      </div> --}}
@endsection
