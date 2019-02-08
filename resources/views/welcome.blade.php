<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Strings Unlimited | a complete apparel solution | Chennai | India</title>
   <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
    <div class="wrap">
        <div id="header">
            <div id="logo">
                <img src="{{ URL::asset('images/logo.bmp') }}" alt="Strings Unlimited" />
                <div>
                    a complete apparel solution . . .</div>
            </div>
            <ul id="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </div>
        
        
        <div id="Ads">
            <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();"><a href="contactus.html"> Strings Unlimited is coming up with an exciting offer... Hurry!!!</a></marquee>
        </div>
        <!-- /header -->
        <div id="content">
            <table id="Mainpage">
                <tr>
                    <td style="width: 100%;">
                        <div id="lefttd">
                            <object width="1000" height="250" title="Strings Unlimited">
                                <param name="movie" value="{{ URL::asset('images/movie2.swf') }}" />
                                <param name="quality" value="high" />
                                <param name="wmode" value="transparent" />
                                <embed src="{{ URL::asset('images/movie2.swf') }}" width="1280" height="330" wmode="transparent"></embed>
                            </object>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- /content -->
        </div>
        <div class="clearfix">
            <p>
                <b style="color: White; font-size: 16px;">Welcome to Strings Unlimited</b></p>
            Strings Unlimited is a professionally managed progressive manufacturing/sourcing company engaged
            in apparel merchandise classifications from Asia.<br />
            Our presence in India and UK enables us to provide end to end services for a wide
            gamut of products to our international clients.<br />
            Our exhaustive range of products are garments for Men, Women, Kids, Beach wear,
            Formal Wear, Sleep Wear/ Undergarments, Sport Wear and Home Furnishings.<br />
        </div>
    </div>
</body>
</html>
