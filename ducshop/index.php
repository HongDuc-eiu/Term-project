<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('TITLE','HOME');
require_once DOC_ROOT.'/ducshop/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
  	<meta charset="UTF-8">
    <?=insertHeadInfo();?>
    <?=insertCSS('/ducshop/top/css/style.css'); ?>
    <?=insertCSS('/ducshop/top/css/style2.css'); ?>
    <?=insertCSS('/ducshop/top/css/footer.css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Girassol|Indie+Flower|Oswald&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


  </head>
  <body>

    <audio autoplay="autoplay" loop>
    <source src="common/imgs/song.mp3" type="audio/mpeg">
    <source src="common/imgs/song.ogg" type="audio/ogg">
    <source src="common/imgs/song.wav" type="audio/wav">
    </audio>

    <!-- header -->
   <?php include_once (DOC_ROOT.'/ducshop/common/incl/header.inc'); ?>
   <!-- banner -->
   <?php include_once (DOC_ROOT.'/ducshop/common/incl/banner.inc'); ?>
   <!-- tao lao -->
   <?php include_once (DOC_ROOT.'/ducshop/common/incl/saptet.inc'); ?>
   <!-- product -->
   <div class="Responsive">
       <div class="Product">
           <div class="Product-head">
               <div class="Product-head__txt">
                   <a href="#">Bán chạy</a>
               </div>
               <div class="Product-head-tag">
                    <p>Tops</p>
                    <p>Bottoms</p>
                    <p>Denims</p>
                    <p>Outerwears</p>
                    <p>Accessories</p>
               </div>
           </div>
           <div class="Product-content">
               <div class="Product-content-list">
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_1-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">LONG – HOODIE</p>
                            <p class="Product-content-item-detail__price">580.000 vnd<span>600.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-soldout">
                            <div class="js-productSoldoutBtn Product-content-item-soldout__btn">
                                <i class="far fa-times-circle"></i> Sold Out
                            </div>
                            <div class="Product-content-item-soldout-detail">
                                <p class="Product-content-item-soldout-detail__ttl">Sản phẩm hết hàng:</p>
                                <p class="Product-content-item-soldout-detail__txt">Thành thật xin lỗi vì sự bất tiện này. Hiện tại mặt hàng đã hết.</p>
                            </div>
                        </div>
                        <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_2-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">ESSENTIAL JOGGER – BLACK</p>
                            <p class="Product-content-item-detail__price">380.000 vnd<span>400.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_3-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">FADE BLUE DENIM</p>
                            <p class="Product-content-item-detail__price">450.000 vnd <span> 480,000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_4-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">ELASTIC SHORT</p>
                            <p class="Product-content-item-detail__price">280.000 vnd <span> 300,000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_5-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">VINTAGE CREW TEE</p>
                            <p class="Product-content-item-detail__price">350.000 vnd <span> 380.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_6-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">RAW EDGE FLANNEL SHIRT</p>
                            <p class="Product-content-item-detail__price">1.400.000 vnd <span> 1.580.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_7-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">BASIC SHOULDER BAG</p>
                            <p class="Product-content-item-detail__price">365.000 vnd <span> 380.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_8-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">SNAP CARGO PANTS</p>
                            <p class="Product-content-item-detail__price">600.000 vnd <span> 580.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_9-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">VINTAGE WASH TANK</p>
                            <p class="Product-content-item-detail__price">150.000 vnd <span> 200.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
                   <div class="Product-content-item">
                       <div class="Product-content-item__img">
                           <img src="./product/img/sp_10-2.webp" alt="">
                       </div>
                       <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail__name">ATHLETIC CAP</p>
                            <p class="Product-content-item-detail__price">600.000 vnd <span> 580.000 vnd</span></p>
                       </div>
                       <div class="Product-content-item-cart">
                            <div class="js-productCartBtn Product-content-item-cart__btn">
                            <i class="far fa-plus-square"></i> Thêm
                            </div>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <div class="js-cart Cart Cart--disable">
        <div class="js-cartView Cart__btn" data-count="0">
            <i class="fas fa-cart-plus"></i>
        </div>
    </div>
    <div class="js-Noti Notification" data-error="0">
        <div class="Notification-content">
            <div class="js-NotiMess Notification-content-mess"></div>
        </div>
    </div>
    <?php include_once (DOC_ROOT.'/ducshop/common/incl/footer.inc'); ?>
    <?=insertJS('/ducshop/top/js/script.js'); ?>
  </body>
</html>
