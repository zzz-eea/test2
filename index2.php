<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
				//на Сервер стоит подключить модуль Imagick
				//Если нужно сохранить пропорции и размер блока тоесть вписывает с пропорциям и остовляет поля
				$imagick = new \Imagick(realpath(__DIR__.'/image.jpg'));
    			$imagick->setbackgroundcolor('rgb(64, 64, 64)');
    			$imagick->thumbnailImage(200, 100, true, true);
				$imagick->writeImage(__DIR__.'/output.jpg');

				//Просто изменение размеров
    			$imagick = new Imagick(__DIR__.'/image.jpg');
				$imagick->adaptiveResizeImage(200,100);
				$imagick->writeImage(__DIR__.'/output2.jpg');
				// изменение с сохранением пропорции
				$imagick = new \Imagick(realpath(__DIR__.'/image.jpg'));
    			$imagick->scaleImage(200, 100, true);
    			$imagick->writeImage(__DIR__.'/output3.jpg');



?>
<img src="output.jpg"></br>
<img src="output2.jpg"></br>
<img src="output3.jpg">
</body>
</html>