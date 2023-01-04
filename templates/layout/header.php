<div class="header">
    <div class="wrapper">
        <div class="headerr">
            <div class="header__top">
                <div class="header__top__left">
                    <div class="header__info-item">
                        <div class="header__icon">
                            <img src="assets/images/images/f-icon.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>Địa chỉ: <?=$optsetting['address']?></span>
                    </div>
                </div>
                <div class="header__top__right">
                    <div class="header__info-item">
                        <div class="header__icon">
                            <img src="assets/images/images/icon-phone.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>Tổng đài:
                            <a class="text-decoration-none" href="tel:<?=$func->formatPhone($optsetting['phone'])?>">
                                <?=$func->formatPhone($optsetting['phone'])?>
                            </a>
                        </span>
                    </div>
                    <div class="header__info-item">
                        <div class="header__icon">
                            <img src="assets/images/images/icon-email.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>Email:
                            <?=$optsetting['email']?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="header__line"></div>
            <div class="header__bottom">
                <div class="header__bottom__left">
                    <div class="header__logo">
                        <a href="" title="<?=trangchu?>" class="peShiner">
                            <?=$func->getImage(['sizes' => '145x82x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <div class="header__banner">
                        <a href="" title="<?=trangchu?>">
                            <?=$func->getImage(['sizes' => '255x71x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                </div>
                <div class="header__tieuchi">
                    <?php if(!empty($tieuchi)){for ($i=0; $i < 4; $i++) {
                        if(!empty($tieuchi[$i])){?>
                    <div class="tieuchi__item">
                        <div class="tieuchi__img scale-img">
                            <?=$func->getImage(['sizes' => '41x39x1', 'upload' => UPLOAD_NEWS_L, 'image' => $tieuchi[$i]['photo'], 'alt' => $tieuchi[$i]['name'.$lang]])?>
                        </div>
                        <span class="tieuchi__name">
                            <?=$tieuchi[$i]['name'.$lang]?>
                        </span>
                    </div>
                    <?php }}}?>
                </div>
            </div>
        </div>
    </div>
</div>