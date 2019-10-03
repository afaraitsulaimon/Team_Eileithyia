<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>TokunboCars Dealer - Sign up</title>

        <meta name="description" content="TokunboCars Dealer - sign up | Tokunbo Cars Nigeria a brand of CARSNOWNOW LIMITED which offers the most flexible, reliable and affordable alternative for purchasing a “Used” car from the United States, We have carefully created a DIY(do it yourself) system that allows you buy cars of your choice at extremely affordable rates"/>
        <meta name="robots" content="noodp"/>
        <meta name="keywords" content="tokunbo, US cars, Buy tokunbo cars, tokunbo cars in Nigeria, tokunbo cars in Lagos, tokunbo cars in Abuja, olx, jiji, olx cars, jiji cars, cars in Nigeria, cars, toyota, camry, corolla, acura, ford, edge, bmw, lexus, rx330, rx350, es300, es330, es 350, is250, highlander, chevrolet"/>
        <link rel="canonical" href="https://tokunbocars.ng/" />
        <link rel="publisher" href="https://business.google.com/b/103903205382144847070/dashboard/l/16294573529077345710?hl=en"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="TokunboCars Dealer - Sign up | Nigeria's No. 1 Site for Tokunbo Cars" />
        <meta property="og:description" content="TokunboCars Dealer - Sign up | TokunboCars - Nigeria's No. 1 Site for Tokunbo Cars" />
        <meta property="og:url" content="https://tokunbocars.ng/" />
        <meta property="og:site_name" content="TokunboCars.NG" />

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '396502644107667');
            fbq('track', 'PageView');
        </script>
        <noscript>
    <img height="1" width="1" 
         src="https://www.facebook.com/tr?id=396502644107667&ev=PageView
         &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113820192-1"></script>
    <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-113820192-1');
    </script>

    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>images/favicon.png' />
    <!-- /site favicon -->

    <!-- Entypo font stylesheet -->
    <link href="<?= base_url() ?>dealers/css/entypo.css" rel="stylesheet">
    <!-- /entypo font stylesheet -->

    <!-- Font awesome stylesheet -->
    <link href="<?= base_url() ?>dealers/css/font-awesome.min.css" rel="stylesheet">
    <!-- /font awesome stylesheet -->

    <!-- Bootstrap stylesheet min version -->
    <link href="<?= base_url() ?>dealers/css/bootstrap.min.css" rel="stylesheet">
    <!-- /bootstrap stylesheet min version -->

    <!-- Integral core stylesheet -->
    <link href="<?= base_url() ?>dealers/css/integral-core.css" rel="stylesheet">
    <!-- /integral core stylesheet -->

    <link href="<?= base_url() ?>dealers/css/integral-forms.css" rel="stylesheet">
    <link href="<?= base_url() ?>dealers/toast/toastr.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>dealers/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>dealers/toast/toastr.min.js"></script>
    

</head>
<body class="login-page">

    <div class="login-container">
        <div class="login-branding">
            <a href="<?= base_url() ?>" style="color: #E5E4EA; font-size: 27px; font-weight: bold;">TokunboCars.NG Car Dealers</a>
        </div>
 <div class="row">
        <div class="col-lg-6 col-md-offset-3" >
            <div class="panel panel-default" style="background: #2C365A">
                <div class="panel-heading clearfix" style="background: #2C365A">
                    <!--<h4 style="font-weight: bold; text-align: center; font-size: 20px;">Means of Identification</h4>-->
                    <p style="color: yellowgreen; text-align: center; font-size: 16px; font-weight: 600px;">Upload a copy of either your International Passport or Drivers License or Voter's Card</p>
                    <?= validation_errors()?>
                    <?= $status ?>
                </div>
                <div class="panel-body">
                    <?= form_open_multipart('dealers/id_verification/'.$id, array('class' => 'form-horizontal')); ?>
                    

                        <div class="line-dashed"></div>
                        <div class="form-group"> 
                            <label class="col-sm-4 control-label" style="font-size: 16px;">Select Image</label> 
                            <div class="col-sm-8"> 
                                <input type="file" name="userfile" class="form-control" required="">
                                <input type="hidden" name="id_verify" value="1"/>
                            </div> 
                        </div>

                        <div class="line-dashed"></div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Continue</button>
                        </div>
                        <p class="text-center">Don't have this document yet? <a href="<?= base_url()?>signin">Click Here to Login</a></p>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    </div>

   
    <!--Load JQuery-->

    <script src="<?= base_url() ?>dealers/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>dealers/js/loader.js"></script>
</body>

</html>