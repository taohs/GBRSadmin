<?php
/**
 * Created by PhpStorm.
 * User: taohs
 * Date: 2016/10/12
 * Time: 23:43
 * @author taohaisong <taohaisong@gmail.com>
 * @date: 2016/10/12  Time: 23:43
 * @link http://www.php4s.com/
 * @copyright
 * @license http://www.php4s.com/license/
 * @package PHP
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <style type="text/css">
        body {
            width: 100%;
            background:url("http://gbrs.dev/images/1920_1200.png");
        }
        form : {
            margin: 0 auto;
            /*position: absolute ;*/
            /*top: 200px;*/
        }


    </style>
</head>
<body>
<form action="" method="post">
    <div class="input">
        <lable>用户名</lable>
        <input type="text">
    </div>
    <div class="input">
        <lable>密码</lable>
        <input type="text">
    </div>
    {{ csrf_field() }}
    <div class="input">
        <lable>&nbsp;</lable>
        <input type="submit">
    </div>
</form>
</body>
</html>
