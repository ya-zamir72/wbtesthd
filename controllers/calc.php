<?php

	try {
		$start_date = $_POST['date'];
		$sumIns = $_POST['sumIns'];
		$sumPay = $_POST['sumPay'];
		$period = $_POST['period'];

		$perc = 10;	
		$Sm = $sumIns;
		$date = strtotime($start_date);
		$end_date = strtotime($start_date. '+'.$period.' year');
		$end_date = date("d.m.Y", $end_date);

		$p = $_POST['payM'];
			
		$i = $period * 12;
		$q = 1;

		if(!empty($start_date)) {
			while($q <= $i) {
				$date = strtotime($start_date. "+".$q."month");
				$q++;
				$m = date("m", $date);
				$y = date("y", $date);
				$dn = cal_days_in_month(CAL_GREGORIAN, $m, $y);
				$days = date('L', $date) ? 366 : 365;

				$Sm = round($Sm + ($Sm + $sumPay * $p) * $dn * ($perc / $days), 2);
			}
		}

		echo number_format($Sm, 2, '.', ' ')." рублей";

	} catch(Exception $e) {
		echo $e->getMessage();	
	}
?>