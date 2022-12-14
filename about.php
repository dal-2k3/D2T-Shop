<?php
  require_once("repository/shoeRepository.php");
  require_once("sendemail.php");
  $shoeRepository = new ShoeRepository();
  $sendEmail = new SendEMail();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>D2T Shop - Giới Thiệu</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <style>
      #imageShoe{
        max-width: 100%;
        max-height: 330px;
        min-height: 330px;
        object-fit: cover;
      }
      #imageShoe2{
        max-width: 100%;
        max-height: 310px;
        min-height: 310px;
        object-fit: cover;
      }
      #imageShoeMini{
        max-width: 50px;
        min-width: 50px;
        max-height: 50px;
        min-height: 50px;
        object-fit: cover;
      }
      #imageShoeBanner{
        max-width: 98%;
        min-width: 98%;
        max-height: 400px;
        min-height: 400px;
        object-fit: cover;
      }
  </style>
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>K325/4-Tô Hiệu-Hòa Minh-Liên Chiểu-Đà Nẵng   &ensp;&ensp;Hotline: +84 777777777</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.php"><img src="./anh giay/logo.jpg" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Trang Chủ</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="about.php">Giới Thiệu</a>
                  </li>
                  <li class="menu-item"><a href="product.php">Sản Phẩm</a></li>
                  <li class="menu-item"><a href="#">Dịch Vụ</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Liên Hệ</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Tìm kiếm sản phẩm…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
              <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
      
    </header>
    <div class="tonggt">
            <div class="gioithieu">
                <h1>Giới Thiệu</h1>
                <img src="./anh giay/logo.jpg" alt="" width="300px">

            </div>
            <div class="gtphai">
                <p>Shop D2T là trang web chuyên cung ứng sản phẩm và phụ kiện với giá cả phải chăng <br> và thương hiệu nhập khẩu. Được thành lập và phát triển từ năm 2022, chúng tôi luôn <br> tự tin và sẵn sàng cung cấp, đáp ứng nhu cầu về phụ kiện dành cho người chơi <br> ở mọi lứa tuổi.
                    Với đội ngũ tư vấn viên chuyên nghiệp, nhiều kinh nghiệm. <br> Chúng tôi sẵn sàng hỗ trợ, tư vấn và giải đáp thắc mắc về các phụ kiện <br> <br>Bạn có thể liên hệ trực tiếp cho chúng tôi qua các kênh : <br> 
                     - Gmail:  d2tshop@gmail.com <br>
unpkg.com
Bạn đã gửi
- SDT : 0777526879. <br>
                     - Địa chỉ : K325/3 Tô hiệu-Hòa Minh-Liên Chiểu-Đà Nẵng
                </p>
            </div>
        </div>
        <div class="group">
            <div class="card">
                <h1>Các thành viên</h1>
        <div class="img">
        <img src="./anh giay/banner/tuyen.jpg" alt="">
                
                <img src="./anh giay/banner/dan.jpg" alt="">
                
                <img src="./anh giay/banner/thang.jpg" alt="">
        </div>
        <div class="text">
        <p> 
                Lê Văn Tuyên<br>
                Chức vụ : Thành viên nhóm <br>
                Sinh ngày : 06-02-2003
        </p>
        <p> 
                    Nguyễn Bảo Đan <br>
                    Chức vụ : Nhóm trưởng<br>
                    Sinh ngày : 02-07-2003
                </p>
                <p>
                    Ngô Hữu Thắng <br>
                    Chức vụ : Thành viên nhóm <br>
                    Sinh ngày : 16-08-2003
                </p>
        </div>

      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header>
                        <!-- <a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a> -->
                        <h3 class="ps-widget__title">Cơ sở 1</h3>
                      </header>
                      <footer>
                        <p><strong>K325/4-Tô Hiệu-Hòa Minh-Liên Chiểu-Đà Nẵng</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: 0777777777</p>
                        <p>Fax: 0255456445</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Cơ sở 2</h3>
                      </header>
                      <footer>
                        <p><strong>137 Nguyễn Thị Thập - Hòa Minh - Liên Chiểu</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: 0888888888</p>
                        <p>Fax: 02554879236</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Tìm cửa hàng của chúng tôi</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">mã giảm giá</a></li>
                          <li><a href="#">Đăng ký Email</a></li>
                          <li><a href="#">Phản hồi trang web</a></li>
                          <li><a href="#">nghề nghiệp</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Được trợ giúp</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Tình trạng đặt hàng</a></li>
                          <li><a href="#">Vận chuyển và giao hàng</a></li>
                          <li><a href="#">Trả lại</a></li>
                          <li><a href="#">Các lựa chọn thanh toán</a></li>
                          <li><a href="#">Liên hệ chúng tôi</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Các sản phẩm</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Đôi giày</a></li>
                          <li><a href="#">Quần áo</a></li>
                          <li><a href="#">Phụ kiện</a></li>
                          <li><a href="#">Giày bóng đá</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">D2T Shop</a>, All rights Resevered. Design by <a href="#"> Nhóm 6</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>