<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>


    <div class="forma">
        <form method="post" enctype="multipart/form-data" >
            <input type="file" name="load">
            <input type="submit"  name = "submit__load">
            
            <p>Напишите ваше поздравление: <textarea class="input__birthday"  name="inputbirthday" id="input_text"
             placeholder="Ваше поздравление..." ></textarea></p>
<script type="text/javascript">
                        var ckeditor1 = CKEDITOR.replace( 'input_text' );
                        AjexFileManager.init({
                        returnTo: 'ckeditor',
                        editor: ckeditor1
                        });
                    </script>

        </form>
    </div>



</body>
</html>
