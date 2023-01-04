<div class="footer bg">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-left">
                <div class="footer-name">
                    <span><?=$setting['name'.$lang]?></span>
                </div>
                <div class="footer-title">
                    <span>
                        <?=$footer['name'.$lang]?>
                    </span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                <div class="footer-social">
                    <?php if(!empty($social)){foreach($social as $v){?>
                    <a class="social__item text-decoration-none" href="<?=$v['link']?>">
                        <div class="social-item">
                            <?=$func->getImage(['class' => '', 'sizes' => '46x46x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                        </div>
                        <span>
                            <?=$v['name'.$lang]?>
                        </span>
                    </a>
                    <?php }}?>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer__map">
                    <?= $addons->set('footer-map', 'footer-map', 6); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © 2022<span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>right reserved. <span class="copyrightname">Design by Nina</span></span>
            </div>
            <div class="copyright-right">
                <span><?= dangonline ?>: <span class="copyright__count"><?= $online ?></span></span>
                <span>|</span>
                <span>Truy cập ngày: <span class="copyright__count"><?= $counter['today'] ?></span></span>
                <span>|</span>
                <span><?= tongtruycap ?>: <span class="copyright__count"><?= $counter['total'] ?></span></span>
            </div>
        </div>
    </div>
</div>

<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>