<div class="about">
    <div class="wrapper">
        <div class="aboutt">
            <?php if(!empty($about[0])){?>
            <div class="about__heading">
                <a href="gioi-thieu" class="text-decoration-none about__name">
                    <?=$about[0]['name'.$lang]?>
                </a>
                <div>
                    <img src="assets/images/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="about__desc">
                <?=$about[0]['desc'.$lang]?>
            </div>
            <?php }?>
        </div>
        <div class="tieuchi__about grid_tieuchiabout_2 paddingg_tieuchiabout_15 grid_tieuchiabout_1">
            <?php if(!empty($tieuchigioithieu)){for ($i=0; $i < 4; $i++) {
                        if(!empty($tieuchigioithieu[$i])){?>
            <div class="tieuchiabout__item">
                <div class="tieuchiabout__img">
                    <?=$func->getImage(['sizes' => '282x240x1', 'upload' => UPLOAD_NEWS_L, 'image' => $tieuchigioithieu[$i]['photo2'], 'alt' => $tieuchigioithieu[$i]['name'.$lang]])?>
                </div>
                <div class="tieuchiabout__content">
                    <div class="tieuchiabout__icon">
                        <?=$func->getImage(['sizes' => '76x60x1', 'upload' => UPLOAD_NEWS_L, 'image' => $tieuchigioithieu[$i]['photo'], 'alt' => $tieuchigioithieu[$i]['name'.$lang]])?>
                    </div>
                    <div class="tieuchiabout-content">
                        <span class="tieuchiabout__name">
                            <?=$tieuchigioithieu[$i]['name'.$lang]?>
                        </span>
                        <span class="tieuchiabout__desc">
                            <?=$tieuchigioithieu[$i]['desc'.$lang]?>
                        </span>
                    </div>
                </div>
            </div>
            <?php }}}?>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="row__d pd">
        <div class="row--d--left">
            <div class="spchuluc">
                <div class="heading">
                    <div class="heading__bg">
                        <span>Sản phẩm chủ lực</span>
                    </div>
                </div>
                <div class="pro__list">
                    <?php if(!empty($productnb)){?>
                    <div class="grid_3 paddingg_20">
                        <?php for ($i=0; $i < 6; $i++) { 
                            if(!empty($productnb[$i])){?>
                        <div class="pro__item">
                            <a class="text-decoration-none" href="<?= $productnb[$i][$sluglang] ?>"
                                title="<?= $productnb[$i]['name' . $lang] ?>">
                                <div class="pic-product scale-img  hover_sang">
                                    <?=$func->getImage(['sizes' => '280x240x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' =>  $productnb[$i]['photo'], 'alt' =>  $productnb[$i]['name'.$lang]])?>
                                </div>
                                <div class="product__content">
                                    <span class="name-product text-split"><?= $productnb[$i]['name' . $lang] ?></span>
                                    <div class="desc-product">
                                        <?=htmlspecialchars_decode($productnb[$i]['desc'.$lang])?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                    </div>
                    <?php }?>
                    <?php if(count($productnb) > 6){?>
                    <div class="pro__xemthem">
                        <a class="text-decoration-none pro--xemthem " href="san-pham" title="Sản phẩm">Xem thêm</a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php if(!empty($productlist)){?>
            <?php foreach($productlist as $list) {
                $sanpham = $d->rawQuery("select name$lang,desc$lang, slugvi, slugen,photo,regular_price, id from #_product where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($list['id'])); 
                ?>
            <div class="spchuluc spchuluc__child">
                <div class="heading">
                    <div class="heading__bg heading__bg02">
                        <span>
                            <?=$list['name'.$lang]?>
                        </span>
                    </div>
                </div>
                <div class="pro__list">
                    <?php if(!empty($sanpham)){?>
                    <div class="grid_3 paddingg_20">
                        <?php for ($i=0; $i < 6; $i++) { 
                            if(!empty($sanpham[$i])){?>
                        <div class="pro__item">
                            <a class="text-decoration-none" href="<?= $sanpham[$i][$sluglang] ?>"
                                title="<?= $sanpham[$i]['name' . $lang] ?>">
                                <div class="pic-product scale-img  hover_sang">
                                    <?=$func->getImage(['sizes' => '280x240x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' =>  $sanpham[$i]['photo'], 'alt' =>  $sanpham[$i]['name'.$lang]])?>
                                </div>
                                <div class="product__content">
                                    <span class="name-product text-split"><?= $sanpham[$i]['name' . $lang] ?></span>
                                    <div class="desc-product">
                                        <?=htmlspecialchars_decode($sanpham[$i]['desc'.$lang])?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                    </div>
                    <?php }?>
                    <?php if(count($sanpham) > 6){?>
                    <div class="pro__xemthem">
                        <a class="text-decoration-none pro--xemthem " href="<?=$list[$sluglang]?>"
                            title="<?=$list['name'.$lang]?>">Xem
                            thêm</a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php if(!empty($bannerqc)){?>
            <div class="bannerqc">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0"
                    data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800"
                    data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0"
                    data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                    data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-slideshow">
                    <?php foreach($bannerqc as $v) { ?>
                    <a class="text-decoration-none scale-img effect10" href="<?=$v['link']?>" target="_blank"
                        title="<?=$v['name'.$lang]?>">
                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '890x207x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="row--d--right">
            <div class="right__box">
                <div class="right--heading">
                    <span>Danh mục dịch vụ</span>
                </div>
                <div class="danhmuc__right--content">
                    <div class="danhmuc__right--img">
                        <div>
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '270x185x1', 'upload' => UPLOAD_NEWS_L, 'image' => $danhmucdv[0]['photo'], 'alt' => $setting['name'.$lang]]) ?>
                        </div>
                        <div class="danhmuc__right--hotline">
                            <span>hotline: <a class="text-decoration-none"
                                    href="tel:<?=$func->formatPhone($optsetting['phone'])?>">
                                    <?=$func->formatPhone($optsetting['phone'])?>
                                </a></span>
                        </div>
                    </div>
                    <div class="right__box--content">
                        <?=htmlspecialchars_decode($danhmucdv[0]['content'.$lang])?>
                    </div>
                </div>
            </div>
            <?php if(!empty($tuvan)){?>
            <div class="right__box tuvan">
                <div class="right--heading">
                    <span>Góc tư vấn</span>
                </div>
                <div class="right__box--list">
                    <?php foreach($tuvan as $v){?>
                    <div class="news__item">
                        <a href="<?=$v[$sluglang]?>" class="text-decoration-none">
                            <div class="news__img scale-img effect10">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '90x75x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                            <div class="news__content">
                                <span class="news__name">
                                    <?=$v['name'.$lang]?>
                                </span>
                                <span class="news__desc">
                                    <?=$v['desc'.$lang]?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php }  ?>
                </div>
            </div>
            <?php }?>
            <?php if(!empty($baogia)){?>
            <div class="right__box tuvan">
                <div class="right--heading">
                    <span>bảng báo giá</span>
                </div>
                <div class="right__box--list">
                    <?php foreach($baogia as $v){?>
                    <div class="news__item">
                        <a href="<?=$v[$sluglang]?>" class="text-decoration-none">
                            <div class="news__img scale-img effect10">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '90x75x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                            <div class="news__content">
                                <span class="news__name">
                                    <?=$v['name'.$lang]?>
                                </span>
                                <span class="news__desc">
                                    <?=$v['desc'.$lang]?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php }  ?>
                </div>
            </div>
            <?php }?>
            <?php if(!empty($newsnb)){?>
            <div class="right__box tuvan">
                <div class="right--heading">
                    <span>bài viết mới nhất</span>
                </div>
                <div class="right__box--list--blog">
                    <?php foreach($newsnb as $v){?>
                    <div class="blog__item">
                        <a href="<?=$v[$sluglang]?>" class="text-decoration-none">
                            <div class="blog__content">
                                <span class="blog__name">
                                    <?=$v['name'.$lang]?>
                                </span>
                                <span class="blog__desc">
                                    <?=$v['desc'.$lang]?>
                                </span>
                            </div>
                            <div class="blog__img scale-img effect10">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '250x185x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                        </a>
                    </div>
                    <?php }  ?>
                </div>
            </div>
            <?php }?>
            <div class="right__box tuvan">
                <div class="right--heading">
                    <span>fanpage facebook</span>
                </div>
                <div class="right__box--list">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="249"
                        data-height="294" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="<?=$optsetting['fanpage']?>">
                                <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dichvu">
    <div class="wrapper">
        <div class="dichvuu">
            <div class="dichvu__heading">
                <span>Dịch vụ sửa chữa cửa cuốn</span>
                <div>
                    <img src="assets/images/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="dichvu__list">
                <?php if(!empty($dichvunb)){?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:30" data-sm-items="1:30"
                    data-md-items="2:30" data-lg-items="3:30" data-xlg-items="3:30" data-rewind="1" data-autoplay="0"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-bestseller">
                    <?php foreach($dichvunb as $v) { ?>
                    <a class="dichvu__item text-decoration-none" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>">
                        <div class="dichvu__img scale-img hover_sang">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '375x295x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="dichvu__content">
                            <span class="dichvu__name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <div class="dichvu__desc">
                                <span><?=$v['desc'.$lang]?></span>
                            </div>
                            <ul class="dichvu__date">
                                <li>Người đăng: <span>Admin</span></li>
                                <li><?=date("d/m/Y",$v['date_created'])?></li>
                            </ul>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>