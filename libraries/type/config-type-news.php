<?php
    /* Tiêu chí */
    $nametype = "tieu-chi";
    $config['news'][$nametype]['title_main'] = "Tiêu chí";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['width'] = 41;
    $config['news'][$nametype]['height'] = 39;
    $config['news'][$nametype]['thumb'] = '41x39x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Tiêu chí about*/
    $nametype = "tieu-chi-gioi-thieu";
    $config['news'][$nametype]['title_main'] = "Tiêu chí giới thiệu";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['images2'] = true;

    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['width'] = 76;
    $config['news'][$nametype]['height'] = 60;
    $config['news'][$nametype]['thumb'] = '76x60x1';
    
    $config['news'][$nametype]['width2'] = 274;
    $config['news'][$nametype]['height2'] = 272;
    $config['news'][$nametype]['thumb2'] = '274x272x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 250;
    $config['news'][$nametype]['height'] = 185;
    $config['news'][$nametype]['thumb'] = '250x185x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Dịch vụ */
    $nametype = "dich-vu";
    $config['news'][$nametype]['title_main'] = "Dịch vụ";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 295;
    $config['news'][$nametype]['height'] = 376;
    $config['news'][$nametype]['thumb'] = '295x376x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Báo giá */
    $nametype = "bao-gia";
    $config['news'][$nametype]['title_main'] = "Báo giá";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 250;
    $config['news'][$nametype]['height'] = 185;
    $config['news'][$nametype]['thumb'] = '250x185x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Tư vấn */
    $nametype = "tu-van";
    $config['news'][$nametype]['title_main'] = "Tư vấn";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 250;
    $config['news'][$nametype]['height'] = 185;
    $config['news'][$nametype]['thumb'] = '250x185x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Quản lý mục (Không cấp) */
    if (isset($config['news'])) {
        foreach ($config['news'] as $key => $value) {
            if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>