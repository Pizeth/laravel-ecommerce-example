<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title', '')</title>
<meta name="DC.title" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="csrf-token" content="AdZZWyca8LT4m5m1Lny420ym4eP20X1bkORTjHQb">
<meta name="Vectorcoder" content="http://ionicecommerce.com">
<link href="{{ asset('css/ecom/app.theme.1.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ asset('css/jquery-ui.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ asset('css/flag-icon-css/css/flag-icon.css') }}" media="all" rel="stylesheet" type="text/css">
<!-- slider -->
<link href="{{ asset('css/bootstrap-slider.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ asset('css/bootstrap-select.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ asset('css/owl.carousel.css') }}" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="{{ asset('css/rtl.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ asset('css/ecom/responsive.css') }}" media="all" rel="stylesheet" type="text/css">
<!--------- stripe js ------>
<script src="{{ asset('js/saved_resource') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/stripe.css') }}" data-rel-css="">
<!------- paypal ---------->
<script src="{{ asset('js/checkout.js.download') }}"></script>
<script async="true" id="xo-pptm" src="{{ asset('js/pptm.js.download') }}"></script>
<!---- onesignal ------>
<script src="{{ asset('js/OneSignalSDK.js.download') }}" async=""></script>
<script>
    var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            //push here
    });
    //onesignal
    OneSignal.push(["init", {
        appId: "6053d948-b8f6-472a-87e4-379fa89f78d8",
        // safari_web_id: oneSignalSafariWebId,
        persistNotification: false,
        notificationClickHandlerMatch: 'origin',
        autoRegister: false,
        notifyButton: {
            enable: false
        }
    }]);
</script>
<script type="text/javascript" charset="UTF-8" src="{{ asset('js/common.js.download') }}"></script>
<script type="text/javascript" charset="UTF-8" src="{{ asset('js/util.js.download') }}"></script>
<script type="text/javascript" charset="UTF-8" src="{{ asset('js/stats.js.download') }}"></script>