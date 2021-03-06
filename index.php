<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style-main.css">
  </head>
  <body>
    <div class="container">
        <section class="main">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 no-padding">
                    <img src="./images/desktop/lagebanner_love1site.jpg" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 image_bg">
                    <div class="col-sm-8 col-md-8 col-xs-8">
                        <img src="./images/desktop/sign-banner.jpg" class="img-responsive"/>
                    </div>

                </div>
            </div>


            <div class="row">

<div class="col-sm-8 col-md-8 col-xs-8">
                        <!-- <a href="https://www.facebook.com/events/833690193346943/" class="btn btn-success btn-signfb" target="_blank" >ลงทะเบียนด้วย Facebook</a> -->
                        <a href="https://www.facebook.com/events/833690193346943/"  target="_blank" >
                            <img src="./images/desktop/RegisterSizeB.jpg" class="img-responsive"/>
                        </a>
                    </div>
             </div>

            <div id="plainBanner" class="row">
                <div class="boxItem">
                    <a href="http://blog.weloveshopping.com/love-at-first-site/" target="_blank"><img src="./images/desktop/banner/about.jpg"/></a>
                    <div class="flag">
                        <img src="./images/pink1.png" class="forgroundFlag">
                        <span>About</span>
                    </div>
                </div>
                <a href="#">
                <div class="boxItem">
                    <img src="./images/desktop/banner/celeb.jpg"/>
                    <div class="flag">
                        <img src="./images/pink1.png" class="forgroundFlag">
                        <span>Celeb</span>
                    </div>
                </div>
                </a>
                <a href="event.php">
                    <div class="boxItem">
                        <a href="https://www.facebook.com/events/833690193346943/" target="_blank"><img src="./images/desktop/banner/event.jpg"/></a>
                        <div class="flag">
                            <img src="./images/pink1.png" class="forgroundFlag">
                            <span>Event</span>
                        </div>
                    </div>
                </a>
                <a href="http://portal.weloveshopping.com/style-passion-zone" target="_blank">
                    <div class="boxItem" style="margin-left: 7px;">
                        <img src="./images/desktop/banner/welove1_15.jpg"/>
                    </div>
                </a>
            </div>
            <div id="whatsgoingon" class="row">
                <div class="col-sm-offset-1 col-xs-offset-1 col-sm-10 col-md-10 col-xs-10" style="margin-top:20px;">
                    <div class="col-sm-2">
                        <img src="./images/desktop/What-going-on.png"/>
                    </div>

                    <div class="col-sm-2 pull-right"><img src="./images/desktop/LIVE_22.jpg" style="float:right;margin-right:-8px;"></div>
                </div>
                <div id="instragram" class="clearfix col-sm-offset-1 col-sm-10 col-md-10 col-xs-10">

                </div>
            </div>
        </section><!-- / End of section main -->
        <section class="footer">

        </section><!-- / End of section footer -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="instafeed.min.js"></script>
    <script type="text/javascript">
        var feed = new Instafeed({
            target : "instragram",
            get: 'tagged',
            tagName: 'LoveAt1stSite',
            clientId: '28380b49945e4f768775c4052b690db8',
            template: '<div class="feedBox col-sm-2 col-xs-2"><a target="_blank" href="{{link}}"><h5>#LoveAt1stSite</h5><img src="{{image}}" /><div class="bottom-panel"><img src="./images/desktop/heart.png">{{likes}} <img src="./images/desktop/chat.png">{{comments}}</div></a></div>',
            resolution: 'thumbnail',
            limit: 5,
        });
        feed.run();
    </script>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WC9VDR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WC9VDR');</script>
    <!-- End Google Tag Manager -->
  </body>
</html>