<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 15:24:40
  from 'W:\domains\lab3\templates\vivodimg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb11e084a3ca7_44660609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dfdd26707ced2724483092359462a84b122e3d9' => 
    array (
      0 => 'W:\\domains\\lab3\\templates\\vivodimg.tpl',
      1 => 1605442003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb11e084a3ca7_44660609 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <div class="container">
        <div class="img__forma">
            <img src=<?php echo $_smarty_tpl->tpl_vars['finish_img']->value;?>
 alt="">
        </div>
        <div class="save">
            <a href="dl_save.php?filename=<?php echo $_smarty_tpl->tpl_vars['finish_imgpdf']->value;?>
">Скачать</a>
        </div>
    </div>
</body>
</html>
<?php }
}
