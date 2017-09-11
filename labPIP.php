<?php
    $start = microtime(true);
    $correct = true;
    $x = $_GET['x'];
    $y = $_GET['y'];
    $r = $_GET['r'];
    if((($x>=0&&$y<=0)&&($x<=$r&&abs($y)<=$r))||(($y>=0)&&($x>=0)&&($x<=$r&&$y<=$r)&&($y<=sqrt($r^2-$x^2)))||(($y>=0)&&($x<=0)&&(abs($x)<=$r&&$y<=$r)&&(sqrt($x^2+$y^2)<=$r))){
        echo "<body class='rip'";
    }
    else{
        echo "<body class='alive'>";
        $correct = false;
    }
    $start = microtime(true) - $start;
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Лабораторная №1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/icon.ico"/>
        <script type="text/javascript" src="skript.js"></script>
    </head>

    <body>
        <table class ="form">
            <tr>
                <td> X : </td>
		<td><?php echo $x ?></td>
            </tr>
            <tr>
                <td> Y : </td>
		<td><?php echo $y ?></td>
            </tr>
            <tr>
                <td> R : </td>
		<td><?php echo $r ?></td>
            </tr>
            <tr>
                <td> Время работы : </td>
		<td><?php echo $start ?></td>
            </tr>
            <tr>
                <td>Дата и время : </td>
		<td><?php echo date('d/m/Y H:i', time()) ?></td>
            </tr>
            <tr>
                <td>Пуля : </td>
                <td><?php if($correct){echo " попала.";} else{echo " не вошла.";} ?></td>
            </tr>
            <tr>
                <td>Утка : </td>
                <td><?php if(!$correct){echo " выжила.";} else{echo " умерла";} ?></td>
            </tr>
            
        </table>
        <div align="center" class="editor" id="VB">Влад Беспалов<br> гр.P3211</div>
        <div align="center" class="editor" id="DT">Данил Татаринов<br>  гр.P3211</div>
    </body>
</html>
