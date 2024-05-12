<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&family=Poetsen+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.css" rel="stylesheet">
    <title>Vieclam5chau</title>
    <style>





        body{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .menu{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
       .menu-title{
            color: white;
            font-size: 17px;
        }
        .logo{
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-image: url(https://dxwd4tssreb4w.cloudfront.net/web/images/common/company-default-banner.jpg);
        }
        .slogans{
            width: 40%;
            text-align: center;
        }
        .slogan{
            align-items: center;
            width: 17%;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }
        .slogans h2{
            font-family: "Freeman", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 25px;

        }
        .slogan .slogan-logo{
            color: rgb(95,101,171);
            font-weight: 600;
            font-size: 22px;
        }

        .location{
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mylocation{
            font-size:14px;
        }
        .country{
            font-size:14px;
            font-weight: 600;
            color: rgb(17,18,19);

        }
        .sign{
            font-size:14px;
            font-weight: 600;
            color: rgb(17,18,19);

        }
        .people{
            font-size: 14px;
            font-weight: 500;

        }
        .locate{
            margin-left: 10px;
        }
        .slide{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer{
            background: #2e3192;
            bottom: 0;
        }
        .footer{
            color: white;
        }
        .footer-title{
            color: white;
            font-weight: 600;
            font-size: 30px;
        }
        .footter{
            display: flex;
            justify-content: space-between;
            align-content: center;
            padding: 20px;
        }
        .name{
            display: flex;
            align-items: center;
        }
        .social{
            margin-top: 30px;
        }
        .logo-footer{
            text-align: center;
            height:24em;
            width:24em;
            background: white;
            color:#7779b8;
            border-radius: 50%;
            overflow: hidden;
            margin-top: 30px;
            padding: 20px;
        }
        .job{
            font-size: 40px;
            color: #2e3192;
            font-weight: bold;
            margin-top: 30px;
        }
        .slide-content2{
        position: relative;
        width: 400px;
        height: 150px;
        border: 3px solid #7779b8;
        text-align: center;
        width: 50%;
        /* border-top-left-radius: 9%;
        border-top-right-radius: 9%;

        border-bottom-right-radius: 9%;
        border-bottom-left-radius: 9%; */
        border-top-left-radius:25px 25px;
        border-top-right-radius:25px 25px;
        border-bottom-right-radius:25px 25px;
        border-bottom-left-radius:25px 25px;
        border-top: none;
        }

        .information{
        position: absolute;
        top: -30px;
        right: 30%;
        font-size: 30px;
        font-weight: 500;
        color: #2e3192;


        }
        .ct1{
            font-size: 30px;
            font-weight: 500;
            color: #2e3192;
        }
        .ct2{
            font-size: 40px;
            color: #2e3192;
            font-weight: bold;
        }
        .slide-content3{
            width: 20%;
        }
        .slide-content1{
            width: 40%;
            text-align: center;
        }
        .next{
            padding: 17px;
            background: #cecece;
            border-radius: 50%;
            border: none;
            padding: 20px;

        }
        .pre{
            padding: 17px;
            background: #cecece;
            border-radius: 50%;
            border: none;
            padding: 20px;

        }
        .next:hover {
            cursor: pointer;
        }
        .pre:hover {
            cursor: pointer;
        }
        .find_work{
            background: white;
            padding-bottom: 25px;
        }
        .keywork{
            font-size: 29px;
            color:black;
            font-weight: 550;

        }
        .find_typework{
            display: flex;
            justify-content: space-around;
        }
        .type_work{
            width: 30%;
            background: #d9d9d9;
            border-top-left-radius:15px 15px;
            border-top-right-radius:15px 15px;
            border-bottom-right-radius:15px 15px;
            border-bottom-left-radius:15px 15px;
            padding: 15px;
            overflow-y: scroll;

            max-height: 500px;

        }
        h4{
            color: black;
            font-weight: 700;
        }
        .type_work::-webkit-scrollbar-button{

        }
        .type_work::-webkit-scrollbar {
        width: 12px;

        }

        .type_work::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
        }

        .type_work::-webkit-scrollbar-thumb {
        background: #a4a4a4;
        border-radius: 10px;
        }

        .type_work::-webkit-scrollbar-thumb:hover {
        background: #a4a4a4;
        }
        .navbar_top{
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius:15px 15px;
            border-top-right-radius:15px 15px;
            border-bottom-right-radius:15px 15px;
            border-bottom-left-radius:15px 15px;
            width: 90%;
            margin: 0 auto;
            border: 1px solid #ededed;
            box-shadow: 10px 10px 5px #efefef;

        }
        .navbar{
            padding: 10px;
            background: white;
            border-top-left-radius:15px 15px;
            border-top-right-radius:15px 15px;
            border-bottom-right-radius:15px 15px;
            border-bottom-left-radius:15px 15px;
            width: 90%;
            margin: 10px auto;
            border: 1px solid #ededed;
            box-shadow: 10px 10px 5px #efefefaa;
        }
        .navbar_bot{
            margin-top: 12px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .all input,.key input{
            border: none;
            border-right: 1px solid black;
        }
        .search_country input{
            border: none;

        }
        .search_country button{
            background: #2e3192;
            border-top-left-radius:10px 10px;
            border-top-right-radius:10px 10px;
            border-bottom-right-radius:10px 10px;
            border-bottom-left-radius:10px 10px;
            color: white;
            padding-left: 20px;
            width: 150px;
            height: 50px;
            cursor: pointer;
        }
        .of_work{
            text-align: center;
        }

        .quantity_work{
            display: flex;
            justify-content: center;
        }
        h6{
            color: #8b8b8b;
            margin-left: 5px;
        }
        .quantity{
            color: #43bbff;
            font-weight: 600;
        }
        .img_navbar{
            height: 50px;
            margin-top: 10px;

        }
        .of_work:hover{
            border: 1px solid #dbf6ff ;
        }

        .list-images{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .qua{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        /* .con-slide{
            text-align: center;
            background: white;
            border-top-left-radius:10px 10px;
            border-top-right-radius:10px 10px;
            border-bottom-right-radius:10px 10px;
            border-bottom-left-radius:10px 10px;
            padding: 20px;
            border: 1px solid #ededed;
            box-shadow: 10px 10px 5px #efefefaa;
        } */

        .content {
            margin-bottom: 70px;
        }

        .study-abroad {
            display: grid;
            gap: 20px 20px;
            grid-template-columns: auto auto auto;
        }

        .box {
            border: solid 2px #8cd9f1;
            border-radius: 10px;
            background: white;
            padding-left: 10px;
        }

        .box img {
            width: 100px;
            height: 80px;
            margin: auto 0;
        }

        .box .infor {
            display: flex;
            flex-direction: row;
        }


        .infor h3,.company h3,.salary h3{
            color: #050505;
            font-size: 15px;

        }
        .infor .company,
        .salary,
        .address {
            display: flex;
            flex-direction: row;
        }

        .icon {
            margin: auto 10px;
        }
        .product-title h3{
            font-weight: 600;
            font-size: 17px;

        }
        .product-title {
            display: flex;
            justify-content: space-between;
        }

    </style>

</head>
<body>

    @include('client.pages.header')


      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    @include('client.pages.navbar')
    @yield('content')
    @include('client.pages.partner')


    @include('client.pages.type-work')

    @include('client.pages.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.js"></script>



</body>
</html>
