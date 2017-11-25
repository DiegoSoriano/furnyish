@extends('layouts.master')

@section('stripe')
    <script src="{{ URL::asset('https://js.stripe.com/v3/') }}"></script>
      <script src="{{ URL::asset('js/index.js') }}" data-rel-js></script>

      <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto') }}" rel="stylesheet">
      <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Quicksand') }}" rel="stylesheet">
      <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Source+Code+Pro') }}" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/base.css') }}" data-rel-css="" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/example2.css') }}" data-rel-css="" />
@endsection
    {{-- expr --}}


@section('content')

    <main>
    
    <section class="container-lg">
      
      <!--Example 2-->
      <div class="cell example example2">
        <form action="{{ route('checkout') }}" method="POST">
            {{ csrf_field() }}

            <div class="row">
                <div class="field">
                  <input id="name" data-tid="elements_examples.form.name_placeholder" class="input empty" type="text" placeholder="Jane Doe" required="">
                  <label for="name" data-tid="elements_examples.form.name_label">Name</label>
                  <div class="baseline"></div>
                </div>
              </div>

          <div class="row">
            <div class="field">
              <input id="address" data-tid="elements_examples.form.address_placeholder" class="input empty" type="text" placeholder="185 Berry St" required="">
              <label for="address" data-tid="elements_examples.form.address_label">Address</label>
              <div class="baseline"></div>
            </div>
          </div>

          <div class="row">
                <div class="field">
                  <input id="card-name" data-tid="elements_examples.form.card-name_placeholder" class="input empty" type="text" placeholder="Jane Doe" required="">
                  <label for="card-name" data-tid="elements_examples.form.card-name_label">Card Holder</label>
                  <div class="baseline"></div>
                </div>
              </div>

          <div class="row">
            <div class="field half-width">
              <input id="city" data-tid="elements_examples.form.city_placeholder" class="input empty" type="text" placeholder="San Francisco" required="">
              <label for="city" data-tid="elements_examples.form.city_label">City</label>
              <div class="baseline"></div>
            </div>

            <div class="field quarter-width">
              <input id="state" data-tid="elements_examples.form.state_placeholder" class="input empty" type="text" placeholder="CA" required="">
              <label for="state" data-tid="elements_examples.form.state_label">State</label>
              <div class="baseline"></div>
            </div>

            <div class="field quarter-width">
              <input id="zip" data-tid="elements_examples.form.postal_code_placeholder" class="input empty" type="text" placeholder="94107" required="">
              <label for="zip" data-tid="elements_examples.form.postal_code_label">ZIP</label>
              <div class="baseline"></div>
            </div>
          </div>

          <div class="row">
            <div class="field">
              <div id="card-number" class="input empty"></div>
              <label for="card-number" data-tid="elements_examples.form.card_number_label">Card number</label>
              <div class="baseline"></div>
            </div>
          </div>

          <div class="row">
            <div class="field half-width">
              <div id="card-expiry" class="input empty"></div>
              <label for="card-expiry" data-tid="elements_examples.form.card_expiry_label">Expiration</label>
              <div class="baseline"></div>
            </div>

            <div class="field half-width">
              <div id="card-cvc" class="input empty"></div>
              <label for="card-cvc" data-tid="elements_examples.form.card_cvc_label">CVC</label>
              <div class="baseline"></div>
            </div>
          </div>

        <button type="submit" data-tid="elements_examples.form.pay_button">Pay $25</button>

          <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
              <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
              <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
            </svg>
            <span class="message"></span></div>
        </form>
        
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message">Thanks for trying Stripe Elements. No money was charged, but we generated a token: </span><span class="token">tok_189gMN2eZvKYlo2CwTBv9KKh</span></p>
          <a class="reset" href="#">
            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
            </svg>
          </a>
        </div>

        
      </div>

      

      {{-- <!--Example 5-->
      <div class="cell example example5">
        <form>
          <div id="example5-paymentRequest">
            <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame30" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-payment-request-c36681cedf6cee5b5b902ced20aa39d1.html#style[paymentRequestButton][theme]=light&amp;locale=en&amp;componentName=paymentRequestButton&amp;wait=false&amp;rtl=false&amp;features[noop]=false&amp;origin=https%3A%2F%2Fstripe.github.io&amp;referrer=https%3A%2F%2Fstripe.github.io%2Felements-examples%2F&amp;controllerId=__privateStripeController0" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; height: 40px;"></iframe>
                <input class="__PrivateStripeElement-input" aria-hidden="true" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important;"></div>
          </div>
          <fieldset>
            <legend class="card-only" data-tid="elements_examples.form.pay_with_card">Pay with card</legend>
            <legend class="payment-request-available" data-tid="elements_examples.form.enter_card_manually">Or enter card details</legend>
            <div class="row">
              <div class="field">
                <label for="example5-name" data-tid="elements_examples.form.name_label">Name</label>
                <input id="example5-name" data-tid="elements_examples.form.name_placeholder" class="input" type="text" placeholder="Jane Doe" required="">
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-email" data-tid="elements_examples.form.email_label">Email</label>
                <input id="example5-email" data-tid="elements_examples.form.email_placeholder" class="input" type="text" placeholder="janedoe@gmail.com" required="">
              </div>
              <div class="field">
                <label for="example5-phone" data-tid="elements_examples.form.phone_label">Phone</label>
                <input id="example5-phone" data-tid="elements_examples.form.phone_placeholder" class="input" type="text" placeholder="(941) 555-0123" required="">
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-address" data-tid="elements_examples.form.address_label">Address</label>
                <input id="example5-address" data-tid="elements_examples.form.address_placeholder" class="input" type="text" placeholder="185 Berry St" required="">
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-city" data-tid="elements_examples.form.city_label">City</label>
                <input id="example5-city" data-tid="elements_examples.form.city_placeholder" class="input" type="text" placeholder="San Francisco" required="">
              </div>
              <div class="field">
                <label for="example5-country" data-tid="elements_examples.form.country_label">Country</label>
                <select id="example5-country" class="input">
                  <option selected="selected" value="US" data-tid="elements_examples.form.country_placeholder">United States</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-card" data-tid="elements_examples.form.card_label">Card</label>
                <div id="example5-card" class="input"></div>
              </div>
            </div>
            <button type="submit" data-tid="elements_examples.form.pay_button">Pay $25</button>
          </fieldset>
          <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
              <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
              <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
            </svg>
            <span class="message"></span></div>
        </form>
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message">Thanks for trying Stripe Elements. No money was charged, but we generated a token: </span><span class="token">tok_189gMN2eZvKYlo2CwTBv9KKh</span></p>
          <a class="reset" href="#">
            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
            </svg>
          </a>
        </div> --}}

    
      </div>
    </section>

    </main>


  <!-- Simple localization script for Stripe's examples page. -->


@endsection

@section('scripts')
      <script src="{{ URL::asset('js/l10n.js') }}" data-rel-js></script>

  <!-- Scripts for each example: -->

  <script src="{{ URL::asset('js/example2.js') }}" data-rel-js></script>
@endsection