<?php 

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
    <meta name="spm-id" content="a1z51.23025092"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="./styles/bootstrap.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="Shortcut Icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="//g.alicdn.com/tmapp/tida2/2.2.16/tida.js?appkey=23025092"></script> 
</head>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    Tida.ready({
        // interactId:"", // 互动实列ID type string 若无抽奖模块，此参数无须传入。给错误的实例ID会走错误流程
        // module: [] // 应用所需要的模块。非必选，默认加载所有模块。支持的模块见注释。
        // sellerNick:"" // 商家名称 
        // shopId:123 // 店铺ID 从url中取 可选
        console: 1
    }, function(){
        // TODO
        Tida.doAuth(true, function(data){
            if(data.finish){
                // 授权成功 可以顺利调用需要授权的接口了
                alert('auth success');
                Tida.mixNick({}, function (d) {
                    alert(d)
                })
            }else {
                // 未能成功授权
            }
        });       
    })
});
</script>
</html>