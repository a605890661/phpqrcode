<?php
include "./sharepic.php";


$PhpQrcode = new PhpQrcode();// new PhpQrcode(图片存放地址);
$href = "www.baidu.com";// 跳转地址
$pic = "./images/1.png";// 二维码中心图片
$img = "./images/2.png";// 二维码外面图


// 生成二维码
// echo $PhpQrcode -> Qrcode1($href);// -> Qrcode1(跳转地址[必填]);

// 生成二维码中间带图
// echo $PhpQrcode -> Qrcode2($href,$pic);// -> Qrcode2(跳转地址[必填] , 二维码中心图片[必填] , 二维码总大小 , 二维码总大小坐标位置, 中心图片X轴,中心图片Y轴)

// // 图片中放入二维码
// echo $PhpQrcode -> Qrcode3($href,$img);// -> Qrcode2(跳转地址[必填] , 二维码外围图片[必填] , 二维码高度[ 数字越大二维码越往下 ] , 二维码总大小[ 数字越小图片越大 ] , 二维码总大小坐标位置, 中心图片X轴,中心图片Y轴)

// // 图片中放入二维码,二维码中带图片
echo $PhpQrcode -> Qrcode4($href,$pic,$img);// -> Qrcode2(跳转地址[必填] , 二维码中心图片[必填] , 二维码外围图片[必填] , 二维码高度[ 数字越大二维码越往下 ] , 二维码总大小[ 数字越小图片越大 ] , 二维码总大小坐标位置, 中心图片X轴,中心图片Y轴)