@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<div class="container main-class py-5">
    <div class="row mx-auto col-md-6">

        <div class="panel panel-default credit-card-box">

            <div class="panel-body card text-bg-light p-3">
                <h1>Promote your ad</h1>

                @include('admin-dash.include.message')

                <form role="form" action="{{ route('stripe.post') }}" method="POST" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ config('services.stripe.key') }}"
                    id="payment-form">
                    @csrf

                    <input type="hidden" name="ad_id" value="{{$id}}">
                    <div class='form-row row mb-3'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label text-black ms-1'>Name</label>
                            <input type="text" class='form-control input-white' size='4'>
                        </div>
                    </div>

                    <div class='form-row row mb-3'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label text-black ms-1'>Card Number</label>
                            <input autocomplete='off' class='form-control card-number input-white' size='20'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row mb-3'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label text-black ms-1'>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc input-white' placeholder='ex. 311'
                                size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label text-black ms-1'>Expiration Month</label>
                            <input class='form-control card-expiry-month input-white' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label text-black ms-1'>Expiration Year</label>
                            <input class='form-control card-expiry-year input-white' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Price: ($5)
                            </button><br>
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <div class="col-xs-12">
                            <button class="btn btn-style2 btn-lg btn-block" type="submit">Pay</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        
        var $form = $(".require-validation");
       
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
                             $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');
            
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            
            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                  number: $('.card-number').val(),
                  cvc: $('.card-cvc').val(),
                  exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
        
    });
    
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
            .removeClass('hide')
            .find('.alert')
            .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
    
});
</script>
@endsection