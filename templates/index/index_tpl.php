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
        <div class="tieuchi__about">
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
<div class="row__d">
    <div class="row--d--left">

    </div>
    <div class="row--d--right">
    </div>
</div>
<!-- <?php if(!empty($banner)){?>
<div class="banner effect10">
    <?= $func->getImage(['class' => 'lazy', 'sizes' => '1366x400x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => "about"]) ?>
</div>
<?php }?> -->


<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading_top">
                <div class="heading">
                    <span>Tin tức sự kiện</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="blog__right">
                    <a class="blog__right-item" href="<?=$newsnb[0][$sluglang]?>">
                        <div class="blog__right-img hover_sang">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '580x355x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name' . $lang]]) ?>
                        </div>
                        <div class="blog__right-content">
                            <span class="blog__name">
                                <?=$newsnb[0]['name'.$lang]?>
                            </span>
                            <div class="blog__right-date">
                                <div>
                                    <img src="assets/images/icon-blog.png" alt="<?=$newsnb[0]['name'.$lang]?>">
                                </div>
                                <span class="blog__right-date1"><?=date("j F Y",$newsnb[0]['date_created'])?></span>
                                <span class="blog__right-date2">
                                    Tin tức
                                </span>
                            </div>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="blog__left">
                    <div class="slickblog">
                        <?php foreach ($newsnb as $v) { ?>
                        <div>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="blog__lef-item">
                                <div class="blog__left-img hover_sang">
                                    <?= $func->getImage(['class' => '', 'sizes' => '280x210x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </div>
                                <div class="blog__left-content">

                                    <span class="blog__name"> <?=$v['name'.$lang]?></span>
                                    <div class="blog__right-date">
                                        <span
                                            class="blog__right-date1"><?=date("j F Y",$newsnb[0]['date_created'])?></span>
                                        <span class="blog__right-date2">
                                            Tin tức
                                        </span>
                                    </div>
                                    <span class="blog__desc">
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="albumd pd">
    <div class="wrapper">
        <div class="albumdd">
            <div class="heading_top">
                <div class="heading">
                    <span>Album ảnh</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="albumd__list">
                <div class="albumd__top">
                    <?php if(count($thuvienanh)>1){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[0][$sluglang]?>"
                                title="<?=$thuvienanh[0]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>2){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[1][$sluglang]?>"
                                title="<?=$thuvienanh[1]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>3){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[2][$sluglang]?>"
                                title="<?=$thuvienanh[2]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="albumd__buttom">
                    <?php if(count($thuvienanh)>4){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[3][$sluglang]?>"
                                title="<?=$thuvienanh[3]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>5){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[4][$sluglang]?>"
                                title="<?=$thuvienanh[4]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <?php if(!empty($thuvienanh)){?>
            <div class="albumd__list-mobile">
                <?php foreach($thuvienanh as $v){?>
                <div class="albumd__mobile-item">
                    <a class="album-image scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php } ?>

            </div>
            <?php } ?>


            <?php if (count($thuvienanh)>5){?>
            <div class="albumd__btn">
                <a href="thi-vien-anh">Xem thêm công trình</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="videoo pd">
    <div class="wrap">
        <div class="videoo">
            <div class="heading_top">
                <div class="heading">
                    <span>Video clip</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <?php if(!empty($videoclipd)) {?>
            <div class="videoo__list">
                <div class="flipstervideo">
                    <ul>
                        <?php foreach($videoclipd as $v){?>
                        <li class="viddeoo__item">
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?=$func->getImage(['class' => '', 'sizes' => '635x308x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </div>
                                <div class="video__info">
                                    <span class="video__name"><?=$v['name'.$lang]?></span>
                                    <span class="video__desc"><?=$v['desc'.$lang]?></span>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>