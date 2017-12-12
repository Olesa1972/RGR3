<html>
	<head>
		<title>Вывести дату третьего понедельника следующего года.
</title>
	</head>
	<body>
		<h2 align=center>Вывести дату третьего понедельника следующего года.
</h2>
		<?php
			if(isset($_GET['value'])){
			$Date = DateTime::createFromFormat(
				'Y-m-d',
				$_GET['value']
			);
		}
		?>
		<form align=center action="index.php" method="GET">
			<input type="date" name="value" value="<?php
			if(isset($Date)){
				echo htmlspecialchars($Date-> Format('d.m.Y'));
			}
			else{
				echo date('Y-m-d');
			}
			?>">
			<input type="submit" value="Узнать результат">
		</form>
	    <?php
			if(isset($Date)){
				$month = $Date -> Format('m');
				$year = $Date -> Format('Y');
				$day = $Date -> Format('d');
				$firstOfJanuary =  new DateTime;
				$firstOfJanuary-> setDate($year+1, 1, 15);
				$dayFromMay = $firstOfJanuary -> Format('d');
				for ($i=1; $i<=7; $i++) {
					$NewDate = $firstOfMay -> setDate($year+1, 1, $dayFromMay);
					$NewDate -> Format('d.m.Y');
					$dayOfWeek = $NewDate -> Format('D');
					if($dayOfWeek == 'Mon') {
						$newyear=$year+1;
						echo "<center>Третий понедельник $newyear года: ";
						echo $NewDate -> Format('d.m.Y');
						echo ".</center>";
						break;
					}
					$dayFromMay =$dayFromJanuary+1;
				}
			}
		?>
	</body>
</html>
