<div class="menu">
    <div class="wrap-content menuuu">
        <ul class="menu-list">
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-line" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>

            <li class="menu__dot"></li>
            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-line" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li class="menu__dot"></li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition menu-line" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id']));

                    ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(!empty($spcat)) { ?>
                        <ul>
                            <?php foreach($spcat as $kcat => $vcat) {
                            ?>
                            <li>
                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                    href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>

                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li class="menu__dot"></li>
            <li><a class="<?php if($com=='dich-vu') echo 'active'; ?> transition menu-line" href="dich-vu"
                    title="Dịch vụ">Dịch vụ</a></li>
            <li class="menu__dot"></li>
            <li><a class="<?php if($com=='bao-gia') echo 'active'; ?> transition menu-line" href="bao-gia"
                    title="Báo giá">Báo giá</a></li>
            <li class="menu__dot"></li>
            <li><a class="<?php if($com=='tu-van') echo 'active'; ?> transition menu-line" href="tu-van"
                    title="Góc tư vấn">Góc tư vấn</a></li>
            <li class="menu__dot"></li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>
            <li class="menu__dot"></li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="Liên hệ">Liên hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="" onkeypress="doEnter(event,'keyword');" />
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
        </div>
    </div>
</div>