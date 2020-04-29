@extends('layouts.master')

@section('page.name', __('home.name'))

@push('css')
@endpush

@section('page.body')

    <section class="main-two">
        <h1>@lang('Exchange')</h1>
    </section>

    <section class="s-pravicy-policy">
        <div class="container">
            <div class="accordion-wrap">
                <div class="accordion-item text-center">
                    <h1 class="semi-bold">@lang('How it Works')</h1>
                </div>
            </div>
            <div class="row">
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/tag-money.svg" alt="@lang('Buy & Sell Offers')">
                    </div>
                    @lang('Buy & Sell Offers')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/qrcode.svg" alt="@lang('2FA Auth')">
                    </div>
                    @lang('2FA Auth')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/tag-time.svg" alt="@lang('Real Time Coin Price')">
                    </div>
                    @lang('Real Time Coin Price')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/wallet.svg" alt="@lang('Crypto Wallets')">
                    </div>
                    @lang('Crypto Wallets')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/card.svg" alt="@lang('Diverse Payment Method')">
                    </div>
                    @lang('Diverse Payment Method')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/secury.svg" alt="@lang('Secure Escrow')">
                    </div>
                    @lang('Secure Escrow')
                </div>
            </div>
            <div class="accordion-wrap">
                <div class="accordion-item">
                    <h3 class="title title-line-left">@lang('Creating Offers')</h3>
                    <div class="accordion-content" style="display: block;">
                        <p>@lang('Users can create a buy or sell offer for a specific currency supported by the platform. The following parameters can be defined for each offer:')</p>
                        <h6>@lang('PAYMENT METHOD:')</h6>
                        <p>@lang('Your choice of payment among the predefined payment methods you want to pay or receive payments from.')</p>
                        <h6>@lang('VALUE RANGE:')</h6>
                        <p>@lang('The value range that must be defined when creating the offer. For a sale offer, you must have more than the value range in your portfolio before it can be shown to potential buyers. However, for the buy offer, you can specify as many options as possible, as long as the deal has been initiated by a potential seller, you must fulfill the payment before the deal automatically expires.')</p>
                        <h6>@lang('PROFIT MARGIN:')</h6>
                        <p>@lang('As a buyer or seller, you can choose to win or lose. The profit margin is used to determine this for each trade. For example, if you set a profit margin of 5% in a $ 5000 trade, you will receive $ 250. Generally, most purchase offers are defined as a negative profit margin in order to attract a potential seller.')</p>
                        <h6>@lang('OFFER LABEL:')</h6>
                        <p>@lang("Any marketing text like \"INSTANT LAUNCH\", \"NO RECEIPT REQUIRED\" that will appear after your payment method. Maximum of 25 characters and only letters and numbers.")</p>
                        <h6>@lang('OFFER TAGS:')</h6>
                        <p>@lang("Quickly add that they describe the terms of the offer, such as \"No ID required\", \"No receipt required\". And you can only select a maximum of 3. These tags are predefined.")</p>
                        <h6>@lang('OFFER TERMS:')</h6>
                        <p>@lang('The conditions that you want the interested business partner to fulfill, before a negotiation starts.')</p>
                        <h6>@lang('OFFER INSTRUCTION:')</h6>
                        <p>@lang('This is displayed to your trading partner after the start of trading. It may contain more information to ensure a successful trade.')</p>
                        <h6>@lang('VISIBILITY / PREFERENCE OF REQUIREMENTS:')</h6>
                        <p>@lang("You can specify a user's verification requirement (such as phone or email verification) before a deal can start with you. In addition, you can limit your visibility to only trusted contacts.")</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/wallet2.svg" alt="@lang('Send Wallet')">
                    </div>
                    @lang('Send Wallet')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/graphic.svg" alt="@lang('Real Time Presence')">
                    </div>
                    @lang('Real Time Presence')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/change.svg" alt="@lang('Trade Dispute System')">
                    </div>
                    @lang('Trade Dispute System')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/5star.svg" alt="@lang('5-Star Rating')">
                    </div>
                    @lang('5-Star Rating')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/btc.svg" alt="@lang('Multi-Coin Support')">
                    </div>
                    @lang('Multi-Coin Support')
                </div>
                <div class="policy-box col-2"></div>
            </div>
            <div class="accordion-item">
                <h3 class="title title-line-left">@lang('STARTING TRADE')</h3>
                <div class="accordion-content">
                    <p>@lang('As a buyer or seller, you can select from the list of offers available on the market with which you can start a trade. Some of the characteristics of the trade include.')</p>
                    <h6>@lang('REAL-TIME CHAT:')</h6>
                    <p>@lang('This is the most essential. Both parts of a trade have a means of exchanging information in real time directly on the platform. This includes support for sharing files, which they can easily drag and drop to upload.')</p>
                    <h6>@lang('COUNTDOWN TIMER AND AUTOMATIC CANCELLATION OF THE TRADING:')</h6>
                    <p>@lang("As the currency is kept in the seller's custody as soon as the trade is initiated, the seller can set a trade countdown before it is canceled. However, the buyer can \"confirm the payment\", which will stop the timer and wait for the seller to release the currency.")</p>
                    <h6>@lang('RAISING DISPUTE:')</h6>
                    <p>@lang('Once the dialogue is not reached, both parties will be able to choose to raise a dispute, which will attract the attention of any available moderator who participates in the negotiation and makes an absolute decision, that is, cancel the negotiation or release the currency.')</p>
                    <h6>@lang('5 STAR CLASSIFICATION SYSTEM:')</h6>
                    <p>@lang('After each successful negotiation, the partner who initiated the negotiation can rate the other based on 5 stars and a comment. New partners usually feed on this before starting a deal with the same user.')</p>
                </div>
            </div>

            <div class="row">
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/chat.svg" alt="@lang('Buy & Sell Offers')">
                    </div>
                    @lang('Buy & Sell Offers')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/cell2.svg" alt="@lang('Email & SMS Notification')">
                    </div>
                    @lang('Email & SMS Notification')
                </div>
                <div class="policy-box col-2">
                    <div>
                        <img src="./theme/icons/change2.svg" alt="@lang('Multi-Currency Support')">
                    </div>
                    @lang('Multi-Currency Support')
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="title title-line-left">@lang('OTHER FEATURES')</h3>
                <div class="accordion-content">
                    <h6>@lang('SELF-HOSTED WALLETS')</h6>
                    <p>@lang('As stated earlier, this is associated with FREE wallet management for users, with which they can generate addresses, send and receive wallet transactions. We maintain connection to the blockchain network directly or through third parties, so you can read more about it above and in the documentation.')</p>
                    <h6>@lang('SUPPORT FOR MULTIPLE CURRENCIES:')</h6>
                    <p>@lang('It is what you would not find on most P2P cryptocurrency exchange platforms. We offer support for multiple currencies, however, the package included in this version is only Bitcoin, Dash and Litecoin. We hope to offer free choice of crypto currencies in future updates.')</p>
                    <h6>@lang('REAL TIME NOTIFICATION:')</h6>
                    <p>@lang('We guarantee that nothing goes through the user, providing a real-time notification system of all active transactions and activities. With this, the user may not need to update the browser, but only hear the notification tone received.')</p>
                    <h6>@lang('CRYPTOMOED PRICES IN VARIOUS CURRENCIES AND REAL TIME:')</h6>
                    <p>@lang('Regardless of where you want to set up your business, we have over 100 fiat currencies that your users can choose from. The price of the portfolio balance is also updated with the real-time equivalent of your conversion.')</p>
                    <h6>@lang('E-MAIL AND SMS NOTIFICATION:')</h6>
                    <p>@lang('Although some notifications may not be as essential, in addition to the standard email notification, we also provide SMS notification, which is made available only so that some really important information is passed on. Regardless of everything, users can enable or disable the type of notification they want.')</p>
                    <h6>@lang('REAL-TIME PRESENCE STATUS:')</h6>
                    <p>@lang('Users can be away, online or offline at any time. Therefore, to avoid potential misleading marketers, it supports the real-time presence status of all users who are updated in real time.')</p>
                    <h6>@lang('AUTHENTICATION OF TWO FACTORS:')</h6>
                    <p>@lang('Currently, most security-enhanced platforms require the user to set up two-factor authentication using Google Authenticator or Authy. You can search more about how they work on their official websites.')</p>
                    <h6>@lang('VERIFICATION BY PHONE AND E-MAIL:')</h6>
                    <p>@lang('It was created with security in mind, so we tend to add as many verification means as possible. Among them, it also supports email and sms confirmation, just make sure that both drivers are configured correctly. You may need to consult the documentation.')</p>
                    <h6>@lang('USER CONTACTS')</h6>
                    <p>@lang('Users can save contacts from their most trusted business partners, giving them faster access to their offers, instead of looking through the many offers on the market all the time.')</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.sections.banner')

    @include('layouts.sections.contact')

    @include('layouts.sections.form')

@endsection

@push('scripts')
    <script>
        $('.accordion-item:eq(0) .accordion-content').show('ease');
        $('.accordion-item .title').on('click', function () {
            console.log(1);
            $(this).parents('.accordion-item').toggleClass('active');
            $(this).parents('.accordion-item').find('.accordion-content').toggle('ease');
        });
    </script>
@endpush