<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <Main>
        <?php
        include "configwatermark.php";
        include "functions.php";
        //Для создания pdf файла//
        //Подключаем FPFD


        require_once 'libs/Smarty.class.php';
        $smarty = new Smarty();
        $smarty->display('formimg.tpl');
        if ($_FILES['load']) {
            if (move_uploaded_file($_FILES['load']['tmp_name'], DIR_IMG . $_FILES['load']['name'])) {



                get_water(DIR_IMG . $_FILES['load']['name'], 'wm_' . $_FILES['load']['name']);
                $path = "img/";
                $finish_img = $path . 'wm_' . $_FILES['load']['name'];
                $smarty->assign('finish_img', $finish_img);



                ob_start();
                require('fpdf/fpdf.php');
                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->Image($finish_img);
                $str = strpos($finish_img, ".");
                $finish_imgnotjpg = substr($finish_img, 0, $str);
                $pdf->Output("$finish_imgnotjpg.pdf", 'F');
                $finish_imgpdf = "$finish_imgnotjpg.pdf";
                ob_end_flush();

                $smarty->assign('finish_imgpdf', $finish_imgpdf);
                $smarty->display('vivodimg.tpl');
            }
        }
        ?>
    </Main>
</body>

</html>