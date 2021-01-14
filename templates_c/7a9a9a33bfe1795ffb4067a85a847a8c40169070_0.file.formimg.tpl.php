<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 15:37:13
  from 'W:\domains\lab3\templates\formimg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb120f9d78cf1_37192660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9a9a33bfe1795ffb4067a85a847a8c40169070' => 
    array (
      0 => 'W:\\domains\\lab3\\templates\\formimg.tpl',
      1 => 1605443830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb120f9d78cf1_37192660 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
</head>
<body>


    <div class="forma">
        <form method="post" enctype="multipart/form-data" >
            <input type="file" name="load">
            <input type="submit"  name = "submit__load">
            
            <p>Напишите ваше поздравление: <textarea class="input__birthday"  name="inputbirthday" id="input_text"
             placeholder="Ваше поздравление..." ></textarea></p>
<?php echo '<script'; ?>
 type="text/javascript">
                        var ckeditor1 = CKEDITOR.replace( 'input_text' );
                        AjexFileManager.init({
                        returnTo: 'ckeditor',
                        editor: ckeditor1
                        });
                    <?php echo '</script'; ?>
>

        </form>
    </div>



</body>
</html>
<?php }
}
