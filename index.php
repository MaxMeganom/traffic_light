<!--Форма-->
	
	<h1>Введите время в формате(ЧЧ:ММ):</h1>
		<form method="post" align="center">
			<p>Время: <input type="text" name="time" /></p>
			<p><input type="submit" name="traffic-light" value="Светофор" /></p>
		</form>
		
<?php

	function showColor($minutes){
		$m = substr($minutes, 1);
		if ($m == 0 || $m == 1 || $m == 2 || $m ==  5 || $m == 6 || $m == 7 || $m == 2 ){
			echo "Светофор зеленого цвета";
		}
		else{
			echo "Светофор красного цвета";
		}
	}

	if(isset($_POST['time'])){
		$time = explode(":", $_POST['time']);
		if (isset($time[0]) && isset($time[1])){
			$hours = $time[0];
			$minutes = $time[1];
		
			if($hours>=0 && $hours<=23){
				if($minutes>=0 && $minutes<=60){
					showColor($minutes);
				}else{
					echo "Минуты следует указывать в диапозоне от 0 до 60";
				}
			}else{
				echo "Часы следует указывать в диапозоне от 0 до 23";
			}
		}else{
			echo "Неправильно задан формат времени";
		}
	}

?>		