@extends($theme . '.shop_layout')
@section('slide')
@endsection


@push('style')
@endpush

@section('content')
    <main id="main" class="">


        <div class="page-wrapper page-left-sidebar">
            <div class="row">

                <div id="content" class="large-9 right col" role="main">
                    <div class="page-inner">

                        <div class="row row-small" id="row-86050051">
                            <div class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                    <p><strong>GỐM SỨ HOA HỒNG<br>
                                        </strong></p>
                                    {{-- <p><strong>Bảo Khánh Ceramic co.,ltd</strong></p> --}}
                                    <p>Địa chỉ: {{ $configs['site_address'] }}</p>
                                    <p>Điện thoại: {{ $configs['site_phone'] }}</p>
                                    <p>Email: {{ $configs['site_email'] }}</p>
                                </div>
                            </div>
                            <div class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                    <div role="form" class="wpcf7" id="wpcf7-f13-p253-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="{{ url('lien-he.html') }}" method="post">
                                            {{ csrf_field() }}
                                            <div style="display: none;">
                                                <input type="hidden" name="email" value="">
                                                <input type="hidden" name="_wpcf7_version" value="4.9.2">
                                                <input type="hidden" name="_wpcf7_locale" value="vi">
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f13-p253-o1">
                                                <input type="hidden" name="_wpcf7_container_post" value="253">
                                            </div>
                                            <p><label> Tên của bạn (*)<br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input required
                                                            type="text" name="name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"></span> </label></p>
                                            <p><label> Số điện thoại của bạn (*)<br>
                                                    <span class="wpcf7-form-control-wrap your-email"><input required
                                                            type="number" name="phone" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false"></span> </label></p>
                                            <p><label> Tiêu đề gửi<br>
                                                    <span class="wpcf7-form-control-wrap your-subject"><input name="title"
                                                            type="text" name="your-subject" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text"
                                                            aria-invalid="false"></span> </label></p>
                                            <p><label> Nội dung tin nhắn (*)<br>
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea required name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"></textarea>
                                                    </span> </label></p>
                                            <p><input type="submit" value="Gửi tin"
                                                    class="wpcf7-form-control wpcf7-submit"></p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <style scope="scope">
                                #row-86050051>.col>.col-inner {
                                    padding: 20px 0px 0px 0px;
                                }
                            </style>
                        </div>


                    </div>
                    <!-- .page-inner -->
                </div>
                <!-- end #content large-9 left -->
                @include($theme. '.components.pages._left_sidebar')

                <!-- end sidebar -->

            </div>
            <!-- end row -->
        </div>
        <!-- end page-right-sidebar container -->

    </main>
    <script>
        document.body.classList.remove('home');
    </script>
@endsection

@section('breadcrumb')
@endsection

@push('scripts')
    <script>
        $("#contact-nav_item").toggleClass("active");
    </script>
@endpush
