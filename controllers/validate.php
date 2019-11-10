<?php
		$start_date = $_POST['date'];
		$sumIns = $_POST['sumIns'];
		$sumPay = $_POST['sumPay'];

		$res = '';
		if(empty($start_date)) {
			$res .= '1';
		}

		if(empty($sumIns)) {
			$res .= '2';
		} else {
			if(($sumIns < 1000)||($sumIns > 3000000)) {
				$res .= '2';
			}
		}

		if(empty($sumPay)) {
			$res .= '3';
		} else {
			if(($sumPay < 1000)||($sumPay > 3000000)) {
				$res .= '3';
			}
		}

		echo $res;
?>