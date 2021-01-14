<?php
function get_water($main_img_path, $load = FALSE)
{
    //Передаю в переменную информацию о картинке
    $main_img = getimagesize($main_img_path);

    //Проверяю всё ли с ней хорошо
    if (!$main_img) {
        exit();
    }
    //Проверяю тип картинки
    switch ($main_img['mime']) {
        case 'image/jpeg':
        case 'image/pjpeg':
            $img = imagecreatefromjpeg($main_img_path);
            break;
        case 'image/png':
        case 'image/x-png':
            $img = imagecreatefrompng($main_img_path);
            break;
        case 'image/gif':
            $img = imagecreatefromgif($main_img_path);
            break;
    }
    //Работа с водяной картинкой
    if (file_exists(WM)) {
        $water = imagecreatefrompng(WM);
    }

    //Ширина исходного изображения
    //$main_img[0] = 700;
    $res_width = $main_img[0];
    //Высота исходного изображения
    // $main_img[1] = 500;
    $res_height = $main_img[1];

    //Ширина водяного знака
    $water_width = imagesx($water);
    //Высота водяного знака
    $water_height = imagesy($water);

    //дискриптор созданного изображения(пустой шаблон)
    $res_img = imagecreatetruecolor(800, 700);

    //Перенос изображение на пустой шаблон

    imagecopyresampled($res_img, $img, 0, 0, 0, 0, 800, 700, $main_img[0], $main_img[1]);

    //Нанесение водяного знака
    imagecopy($res_img, $water, 800 - $water_width, 700 - $water_height, 0, 0, $water_width, $water_height);


    //Теперь наносим наш текст на картинку
    $font = 'arial.ttf';
    $font = realpath($font);
    $font_size = 24;
    $x = 0;
    $y = 20;
    $degree = 0;
    //$text = strip_tags($_POST['inputbirthday']);
    $text = $_POST['inputbirthday'];
    $color = imagecolorallocate($res_img, 255, 255, 255);
    imagettftext($res_img, $font_size, $degree, $x, $y, $color, $font, planText($text));



    if ($load) {
        imagejpeg($res_img, DIR_IMG . $load, 100);
    } else {

        exit();
    }
}
function planText($text)
{
    $text = strip_tags($text, '<br><p><li>');
    $text = preg_replace('/<[^>]*>/', PHP_EOL, $text);
    return $text;
}
