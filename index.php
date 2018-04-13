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
    <script src="//g.alicdn.com/tmapp/tida/3.2.97/tida.js?appkey=23492108"></script> 
    <!-- <script src="//g.alicdn.com/tmapp/animation-data/4.1.37/jc/tools/vconsole.min.js"></script> -->
    <style>
        html {
            min-height: 100%;
            background-image: url(/img/taobaoImage/mark/background01.png);
            background-size: 100% 100%;
            background-repeat: no-repeat repeat;
        }
        body {
            background: transparent;
        }
        #main-box {
            width: 276px;
            height: 491px;
            margin: 5px auto;
            background-image: url(/img/taobaoImage/mark/mainImg01.png);
            background-size: 100% 100%;
            padding: 35px 15px ;
            position: relative;
        }
        #main-img {
            width: 247px;
            height: 438px;
            padding: 9px 5px;
            box-sizing: border-box;
        }
        #main-img {
            background: #fff;
        }
        #mainImg {
            width: 100%;
            height: 100%;
        }
        #coupon-box img{
            width: 321px;
            height: auto;
            margin: 10px auto;
        }
        #touch-img {
            width: 96px;
            height: 61px;
            bottom: 3px;
            right: -42px;
            position: absolute;
        }
    </style>
</head>

<body class="no-skin pos-rel coming-soon">
    <div class="section">
        <img id="avatarImg" src="" alt="" class="img-inline" width=25 id="avatar">
    </div>
    <div class="section">
        <div id="main-box">
            <!-- <img id="mainImg" src="" alt="" class="img-block"> -->
            <div id="main-img">
                <img id="mainImg" src="" alt="" class="img-block">
            </div>
            <img id="touch-img" class="img-block" src="/img/taobaoImage/mark/touch01.png" alt="">
        </div>
    </div>
    <div class="section">
        <a id="coupon-box" href="https://taoquan.taobao.com/coupon/unify_apply.htm?sellerId=94399436&activityId=f19449456bf04f77b21a13fe8a7fa66f">
            <img class="img-block" src="/img/taobaoImage/mark/coupon01.png" alt="">
        </a>
    </div>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script>
    $.ajaxSetup({
        cache: false //关闭AJAX缓存
    });
    var mixNick = "";
    Tida.ready( {
        module : ["device", "media", "server", "social", "widget", "sensor", "share", "buy", "draw", "im", "calendar", 'award', 'ar'],
        debug : 1,
        combo : 0,
        console:1
    }, function(e) {
        Tida.doAuth(true, function (data) {
            if(data.finish) {
                Tida.mixNick({}, function (d) {
                    mixNick = d.mixnick;
                    $.get('https://m.shiwan66.top/Taobao/getImage?imgId=<?php  echo $_GET['imgId'] ?>&mixNick='+mixNick, function(result) {
                        $("#mainImg").attr('src', result.mainImg);
                        $("#avatarImg").attr('src', result.avatarImg);
                    })
                })
            }
        });
    });
</script>
</html>