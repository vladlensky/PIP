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
        <link rel="icon" href="images/favicon.ico"/>
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
        <?php if(!$correct){echo "<audio id='player' src='audio/dd.mp3' autoplay loop> </audio>";
        echo "<div align='center' class='editor editor_VB'>Влад Беспалов<br> гр.P3211</div>";
        echo "<div align='center' class='editor editor_DT'>Данил Татаринов<br> гр.P3211</div>";}
        else {echo "<audio id='player' src='audio/DIMON.mp3' autoplay loop> </audio>"; 
        echo "<div align='center' class='editor editor_VB2'>Влад Беспалов<br> гр.P3211</div>";
        echo "<div align='center' class='editor editor_DT2'>Данил Татаринов<br> гр.P3211</div>";}?>
	<div class="player">
		<button class="mus_but play_paus" onclick="document.getElementById('player').play()">Плей</button>
		<button class="mus_but play_paus"onclick="document.getElementById('player').pause()">Пауза</button>
		<button class="mus_but plus_minus" onclick="document.getElementById('player').volume+=0.1">+</button>
		<button class="mus_but plus_minus" onclick="document.getElementById('player').volume-=0.1">-</button>
	</div>
    </body>
</html>
