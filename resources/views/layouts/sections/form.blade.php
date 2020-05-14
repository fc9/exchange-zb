<!-- form section start -->
<section class="form ptb-90 bg-gradient-1" id="form">
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
                    <h3>{{ strtoupper(__('#nav Contact')) }}</h3>
                    <p>@lang('home.form.text')</p>
                    <p class="form-message"></p>
                    <form id="" action="{{ route('contact') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="@lang('#form Name')">
                        <input type="email" name="email" placeholder="@lang('#form Email')">
                        <input type="text" name="subject" placeholder="@lang('#form Subject')">
                        <textarea placeholder="@lang('#form Your message')" name="message"></textarea>
                        <button type="submit" name="submit">@lang('#form Send Message')</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <a target="_blank" href="{{ env(' home ') }}">@lang('#fullname')</a>
                    &copy; {{ date('Y') }}. @lang('All rights reserved.')
                </div>
            </div>
        </div>
    </div>
</section><!-- form section end -->