<!DOCTYPE html>
<html lang="zh-Hant">
<?php require_once("./functions.php");?>

<head>
    <title>85stix | 我們賣的不是票 是感動</title>
    <meta charset="UTF-8">
    <meta name="description" content="85stix | 我們賣的不是票 是感動">
    <meta name="keywords" content="85stix">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/logo.svg" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
        
    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.php" class="site-logo">
                            <img src="img/logo.svg" height='44px' />
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="搜尋商品">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a id="status" class="hvr-sweep-to-right btn" data-toggle="modal"
                                    data-target="#loginWindow">登入</a>
                                或
                                <a id="statusRegister" class="hvr-sweep-to-right btn" data-toggle="modal"
                                    data-target="#registerWindow">創建帳號</a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
                                </div>
                                <a href="#">購物車</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="#">首頁</a></li>
                    <li><a href="#">活動
                            <span class="new">New</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">票劵</a></li>
                            <li><a href="#">周邊商品</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header section end -->
        
    <!-- Member section -->
    <?php include 'login.php';?>
    <?php include 'register.php';?>
    <!-- Member section end -->