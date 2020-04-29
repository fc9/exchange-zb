<!-- form section start -->
<section class="form-area ptb-90" id="apn">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="vcontact-form">
                    <h3>{{ strtoupper(__('home.form.header')) }}</h3>
                    <p>@lang('home.form.text')</p>
                    <p class="form-message"></p>
                    <form id="" action="{{ route('contact') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="@lang('home.form.name')">
                        <input type="email" name="email" placeholder="@lang('home.form.email')">
                        <input type="text" name="subject" placeholder="@lang('home.form.subject')">
                        <textarea placeholder="@lang('home.form.message')" name="message"></textarea>
                        <button type="submit" name="submit">@lang('home.form.button')</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <a target="_blank" href="{{ env('APP_URL') }}">@lang('Title')</a>
                    &copy; {{ date('Y') }}. @lang('All rights reserved.')
                </div>
            </div>
        </div>
    </div>
</section><!-- form section end -->