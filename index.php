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
  <title>D2T Shop</title>
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
  #imageShoe {
    max-width: 100%;
    max-height: 330px;
    min-height: 330px;
    object-fit: cover;
  }

  #imageShoe2 {
    max-width: 100%;
    max-height: 310px;
    min-height: 310px;
    object-fit: cover;
  }

  #imageShoeMini {
    max-width: 50px;
    min-width: 50px;
    max-height: 50px;
    min-height: 50px;
    object-fit: cover;
  }

  #imageShoeBanner {
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
            <p>K325/4-Tô Hiệu-Hòa Minh-Liên Chiểu-Đà Nẵng &ensp;&ensp;Hotline: +84 777777777</p>
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
  <div class="header-services">

  </div>
  <main class="ps-main">
    <div class="ps-banner">
      <div class="rev_slider fullscreenbanner" id="home-banner">
        <ul>
          <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="./anh giay/banner/banner2.jpg" alt="ảnh banner" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
            <div class="tp-caption ps-banner__header" id="layer-1" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            </div>
            <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            </div>
            <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            </div>
          </li>
          <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="./anh giay/banner/banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
            <div class="tp-caption ps-banner__header" id="layer20" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            </div>
            <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            </div>
            <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
              <p></p>
            </div><a class="tp-caption ps-btn" id="layer364" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <h3 class="ps-section__title" data-mask="Sản phẩm">- Sản phẩm</h3>
          <ul class="ps-masonry__filter">
            <li class="current"><a href="#" data-filter="*">All <sup><?php echo $shoeRepository->countShoeByCategoryName(''); ?></sup></a></li>
            <li><a href="#" data-filter=".Nike">Nike<sup><?php echo $shoeRepository->countShoeByCategoryName('Nike'); ?></sup></a></li>
            <li><a href="#" data-filter=".Adidas">Adidas <sup><?php echo $shoeRepository->countShoeByCategoryName('Adidas'); ?></sup></a></li>
            <li><a href="#" data-filter=".Converse">Converse<sup><?php echo $shoeRepository->countShoeByCategoryName('Converse'); ?></sup></a></li>
            <li><a href="#" data-filter=".Reebok">Reebok <sup><?php echo $shoeRepository->countShoeByCategoryName('Reebok'); ?></sup></a></li>
            <li><a href="#" data-filter=".MLB">MLB <sup><?php echo $shoeRepository->countShoeByCategoryName('MLB'); ?></sup></a></li>
          </ul>
        </div>
        <div class="ps-section__content pb-50">
          <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry">
              <div class="grid-sizer"></div>

              <?php
              $checkNew = false;
              $listShoe = $shoeRepository->getAll(12);
              foreach ($listShoe as $shoe) {
              ?>
                <div class="grid-item <?php echo $shoe['name'] ?>">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <?php
                        if (!$checkNew) {
                          echo '<div class="ps-badge"><span>New</span></div>';
                          $checkNew = true;
                        }
                        if ($shoe['sale'] > 0) {
                          echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-' . $shoe['sale'] . ' %</span></div>';
                        }
                        ?>

                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                        <?php
                        $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                        if ($arrLinkImage->num_rows > 0) {
                          echo '<img id="imageShoe" src="' . $arrLinkImage->fetch_assoc()['link_image'] . '" alt="">';
                        } else {
                          echo '<img src="images/shoe/1.jpg" alt="">';
                        }
                        ?>
                        <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal">
                            <?php
                            foreach ($arrLinkImage as $linkImage) {
                            ?>
                              <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                            <?php
                            }
                            ?>
                          </div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $shoe['shoe_name'] ?></a>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p>
                          <span class="ps-shoe__price">
                            <?php
                            if ($shoe['sale'] > 0) {
                              echo '<del>' . $shoe['price'] . ' VND</del>';
                            }
                            ?>
                            <?php
                            echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01) . " VND";
                            ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section--offer">
      <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img id="imageShoeBanner" src="./anh giay/banner/banner4.jpg" alt=""></a></div>
      <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img id="imageShoeBanner" src="./anh giay/banner/banner6.jpg" alt=""></a></div>
    </div>
    <div class="ps-section--sale-off ps-section pt-80 pb-40">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-hot-deal">
                <h3>Nike DUNK Max 95 OG</h3>
                <p class="ps-hot-deal__price">Only: <span>£155</span></p>
                <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                  <li><span class="hours"></span>
                    <p>Hours</p>
                  </li>
                  <li class="divider">:</li>
                  <li><span class="minutes"></span>
                    <p>minutes</p>
                  </li>
                  <li class="divider">:</li>
                  <li><span class="seconds"></span>
                    <p>Seconds</p>
                  </li>
                </ul><a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i class="fa fa-plus"></i>
                  <div class="ps-hotspot__content">
                    <p class="heading">JUMP TO HEADER</p>
                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                  </div>
                </a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                  <div class="ps-hotspot__content">
                    <p class="heading">JUMP TO HEADER</p>
                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                  </div>
                </a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                  <div class="ps-hotspot__content">
                    <p class="heading">JUMP TO HEADER</p>
                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                  </div>
                </a><img src="images/hot-deal.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
              <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
            </div>
          </div>
          <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
              <?php
              foreach ($listShoe as $shoe) {
                if ($shoe['sale'] > 0) {
              ?>
                  <div class="ps-shoes--carousel">
                    <div class="ps-shoe">
                      <div class="ps-shoe__thumbnail">
                        <div class="ps-badge"><span>New</span></div>
                        <?php
                        echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-' . $shoe['sale'] . ' %</span></div>';
                        ?>
                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                        <?php
                        $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                        if ($arrLinkImage->num_rows > 0) {
                          echo '<img id="imageShoe2" src="' . $arrLinkImage->fetch_assoc()['link_image'] . '" alt="">';
                        } else {
                          echo '<img src="images/shoe/1.jpg" alt="">';
                        }
                        ?>
                        <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal">
                            <?php
                            foreach ($arrLinkImage as $linkImage) {
                            ?>
                              <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                            <?php
                            }
                            ?>
                          </div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php"><?php echo $shoe['shoe_name'] ?></a>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p><span class="ps-shoe__price">
                            <del><?php echo $shoe['price'] ?> VND</del>
                            <?php
                            echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01) . " VND";
                            ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-home-testimonial bg--parallax pb-80" data-background="images/banner/giày-thể-thao-ragus-man-12.jpg">
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>CEO D2T - Dal</p>
              </header>
              <footer>
                <p>“Cuồng giầy dép thật sự rất tuyệt – bạn có nhiều tự do hơn, bạn có thể phóng đại mọi thứ mà không lo lắng gì. Nhưng nếu sự cuồng đó lộ rõ trên nét mặt bạn thì thật sự là không bình thường. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>CEO D2T</p>
              </header>
              <footer>
                <p>“Cuồng giầy dép thật sự rất tuyệt – bạn có nhiều tự do hơn, bạn có thể phóng đại mọi thứ mà không lo lắng gì. Nhưng nếu sự cuồng đó lộ rõ trên nét mặt bạn thì thật sự là không bình thường “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>CEO D2T</p>
              </header>
              <footer>
                <p>“Cuồng giầy dép thật sự rất tuyệt – bạn có nhiều tự do hơn, bạn có thể phóng đại mọi thứ mà không lo lắng gì. Nhưng nếu sự cuồng đó lộ rõ trên nét mặt bạn thì thật sự là không bình thường “</p>
              </footer>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-home-contact">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-home-contact__form">
          <header>
            <h3>Liên hệ với chúng tôi</h3>
            <p>Tìm hiểu về hồ sơ công ty, tác động cộng đồng, động lực bền vững của chúng tôi,..</p>
          </header>
          <footer>
            <form action="" method="post">
              <div class="form-group">
                <label>Tên<span>*</span></label>
                <input name="name" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label>Email<span>*</span></label>
                <input name="email" class="form-control" type="email">
              </div>
              <div class="form-group">
                <label>Nội dung<span>*</span></label>
                <textarea name="content" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group text-center">
                <button name="send_email" class="ps-btn">Gửi tin nhắn<i class="fa fa-angle-right"></i></button>
              </div>
              <?php
              if (isset($_POST['send_email']))
                $sendEmail->send($_POST['name'], $_POST['email'], "Xin Chào", $_POST['content']);
              ?>
            </form>
          </footer>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
              <h3><i class="fa fa-envelope"></i>ĐĂNG KÝ BẢN TIN</h3>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
              <form class="ps-subscribe__form" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="">
                <button>Đăng nhập</button>
              </form>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
              <p>..và nhận phiếu giảm giá <span>5%</span> cho lần mua sắm đầu tiên.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <aside class="ps-widget--footer ps-widget--info">
                  <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a>
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
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
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