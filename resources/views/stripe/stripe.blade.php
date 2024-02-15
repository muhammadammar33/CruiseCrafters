<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        <title>CruiseCrafters</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="home/css/animate.css">

        <link rel="stylesheet" href="home/css/owl.carousel.min.css">
        <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="home/css/magnific-popup.css">

        <link rel="stylesheet" href="home/css/aos.css">

        <link rel="stylesheet" href="home/css/ionicons.min.css">

        <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="home/css/jquery.timepicker.css">


        <link rel="stylesheet" href="home/css/flaticon.css">
        <link rel="stylesheet" href="home/css/icomoon.css">
        <link rel="stylesheet" href="home/css/style.css">
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body>

        <!-- Navigation -->
        @include('stripe.nav')

        {{-- Hero --}}
        @include('stripe.hero')

        {{-- Contact Conatiner --}}
        @include('stripe.stripecontainer')

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
        <script type="text/javascript">

        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/
            
            var $form = $(".require-validation");
            
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
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
            
            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
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

        {{-- Footer --}}
        @include('home.footer')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="home/js/jquery.min.js"></script>
        <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="home/js/popper.min.js"></script>
        <script src="home/js/bootstrap.min.js"></script>
        <script src="home/js/jquery.easing.1.3.js"></script>
        <script src="home/js/jquery.waypoints.min.js"></script>
        <script src="home/js/jquery.stellar.min.js"></script>
        <script src="home/js/owl.carousel.min.js"></script>
        <script src="home/js/jquery.magnific-popup.min.js"></script>
        <script src="home/js/aos.js"></script>
        <script src="home/js/jquery.animateNumber.min.js"></script>
        <script src="home/js/bootstrap-datepicker.js"></script>
        <script src="home/js/jquery.timepicker.min.js"></script>
        <script src="home/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClbFGhscGbuJd0IQ37FILwjy95Bvszmg8&sensor=false"></script>
        <script src="home/js/google-map.js"></script>
        <script src="home/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>
</html>