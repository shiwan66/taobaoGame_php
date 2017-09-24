<?php 
require "vendor/autoload.php"
include "TopSdk.php";


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--允许全屏-->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <meta name="spm-id" content="a1z51.23492108"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="./styles/bootstrap.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="Shortcut Icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="//g.alicdn.com/tmapp/tida2/2.2.16/tida.js?appkey=23492108"></script> 
</head>

<body class="no-skin pos-rel coming-soon">
    <div class="section flex-wrap">
        <div class="flex-content">
            <div class="hr"></div>
        </div>
        <div class="flex-content">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 text-center" style="font-size: 13px;font-weight: bold;line-height: 25px;">
                    <img src="/img/taobaoImage/mark/avatar.png" alt="" class="img-inline" id="avatar">
                </div>
            </div>
        </div>
        <div class="flex-content">
            <div class="hr"></div>
        </div>
    </div>
    <div class="section img-section">
        <div class="row img-box">
            <div class="col-xs-10 col-xs-offset-1">
                <img src="/img/taobaoImage/mark/mainImg.png" alt="" class="img-block">
            </div>
            <div class="col-xs-10 col-xs-offset-1"  style="font-size: 11px;font-weight: bold;line-height: 16px;margin-top: 15px;">
                <img src="/img/taobaoImage/mark/address.png" alt="" id="address-img" class="img-inline">&nbsp;&nbsp;无锡市梁溪区中山路343号大东方百货
            </div>
        </div>
    </div>
    <div class="section row" style="background: #ececec; padding-top: 8px;padding-bottom: 8px;">
        <div class="col-xs-6 logo2">
            <img src="/img/taobaoImage/mark/logo2.png" alt="" class="img-inline">&nbsp;马克华菲旗舰店
        </div>
        <div class="col-xs-6">
            <div class="flex-horizontal a-c">
                <div class="btn print-btn"><img src="/img/taobaoImage/mark/print.png" alt="" class="img-inline">&nbsp;点击打印照片</div>
                <div class="text-center" style="font-size:9px; line-height: 15px; color: #000;margin-top: 2px;">（找导购进店取您的照片）</div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="box clearfix">
            <div class="section text-center" style="font-size:15px;line-height: 25px; color: #85b19b;font-weight: bold;">
                <img src="/img/taobaoImage/mark/logo.png" alt="" class="img-inline" style="margin-top: -2px;">&nbsp;推荐商品
            </div>
            <div class="clearfix flex-wrap" style="padding: 5px;">
                <div class="flex-content" style="padding-left:5px;padding-right:5px;"><img src="/img/taobaoImage/mark/product1.png" alt="" class="img-block"></div>
                <div class="flex-content" style="padding-left:5px;padding-right:5px;"><img src="/img/taobaoImage/mark/product2.png" alt="" class="img-block"></div>
                <div class="flex-content" style="padding-left:5px;padding-right:5px;"><img src="/img/taobaoImage/mark/product3.png" alt="" class="img-block"></div>
                <div class="flex-content" style="padding-left:5px;padding-right:5px;"><img src="/img/taobaoImage/mark/product4.png" alt="" class="img-block"></div>
            </div>
            <div class="section row">
                <div class="col-xs-8 col-xs-offset-2">
                    <a href="" style="display: block">
                        <img src="/img/taobaoImage/mark/coupon.png" class="img-block" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
var nick;
Tida.ready({console:1}, function() {
    Tida.isLogin(true, function() {
        if(data.finish) {
            alert('auth success')
            alert(JSON.stringify(data))
            nick = getMixNick()
        } else {
            alert('auth fail')
            alert(JSON.stringify(data))
        }
    })
})
function getMixNick() {
    Tida.mixNick({}, function(data) {
        alert(JSON.stringify(data));
        return JSON.stringify(data);
    })
}
<?php 
    $nick="<script type=text/javascript>document.write(nick)</script>"
    echo $nick;
 ?>
</script>
</html>