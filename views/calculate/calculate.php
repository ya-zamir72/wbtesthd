<?php
echo "
<div class='form'>
	<h3>Калькулятор</h3>

	<table class='calc'>
		<tr>
			<td class='cln'>Дата оформления вклада</td>
			<td><input type='text' id='datepicker' autocomplete='off'></td>
		</tr>
		<tr>
			<td class='cln'>Сумма вклада</td>
			<td><input type='number' id='sumIns' step='1000'></td>
			<td class='tdt'>
				<div class='sl'>
					<div id='sliderIns'></div>
					<div class='d-flex justify-content-between gr'><span>1 000</span><span>3 000 000</span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td class='cln'>Срок вклада</td>
			<td>
				<select class='form-control' id='period'>
			        <option value='1'>1 год</option>
			        <option value='2'>2 года</option>
			        <option value='3'>3 года</option>
			        <option value='4'>4 года</option>
			        <option value='5'>5 лет</option>
				</select>
  			</td>
		</tr>
		<tr>
			<td class='cln'>Пополнение вклада</td>
			<td>
				<input type='radio' id='choiceY' name='ch' value='1'>
				<label for='choiceYes'>Да</label>
				<input type='radio' id='choiceN'  name='ch' checked value='0'>
				<label for='choiceNo'>Нет</label>
			</td>
		</tr>
		<tr>
			<td class='cln'>Сумма пополнение</td>
			<td><input type='number' id='sumPay' step='1000'></td>
			<td class='tdt'>
				<div class='sl'>
					<div id='sliderPay'></div>
					<div class='d-flex justify-content-between gr'><span>1 000</span><span>3 000 000</span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td class='cln'><input type='button' name='' id='run' value='Рассчитать'></td>
			<td align='right'>Результат:</td>
			<td><span id='res'></span></td>
		</tr>
	</table>
	
	</div>";
	?>