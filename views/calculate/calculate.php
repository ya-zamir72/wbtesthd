<?php
echo "
<div class='form container-fluid'>
	<h3>Калькулятор</h3>

	<div class='row align-items-center'>
		<div class='col col-sm-3 lbl'>Дата оформления вклада</div>
		<div class='col col-md-auto lbl'><input type='text' id='datepicker' autocomplete='off'></div>
	</div>
</div>
	
<div class='container-fluid'>

	<div class='row align-items-center'>
		<div class='col col-sm-3 lbl'>Сумма вклада</div>
		<div class='col col-md-auto lbl'><input type='number' id='sumIns' step='1000'></div>
		<div class='col col-md-3 lbl'>
			<div class='sl'>
				<div id='sliderIns'></div>
				<div class='d-flex justify-content-between gr'><span>1 000</span><span>3 000 000</span></div>
			</div>
		</div>
	</div>	
</div>
	
<div class='container-fluid'>
	<div class='row align-items-center'>
		<div class='col col col-sm-3 lbl'>Срок вклада</div>
		<div class='col col-md-auto lbl'>
			<select class='form-control' id='period'>
		        <option value='1'>1 год</option>
		        <option value='2'>2 года</option>
		        <option value='3'>3 года</option>
		        <option value='4'>4 года</option>
		        <option value='5'>5 лет</option>
			</select>
		</div>
	</div>
</div>

<div class='container-fluid'>

	<div class='row align-items-center'>
		<div class='col col col-sm-3 lbl'>Пополнение вклада</div>
		<div class='col col-md-auto lbl'>
			<input type='radio' id='choiceY' name='ch' value='1'>
			<label for='choiceYes'>Да</label>
			<input type='radio' id='choiceN'  name='ch' checked value='0'>
			<label for='choiceNo'>Нет</label>
		</div>
	</div>

</div>
<div class='container-fluid'>
	<div class='row align-items-center'>
		<div class='col col col-sm-3 lbl'>Сумма пополнение</div>
			<div class='col col-md-auto lbl'><input type='number' id='sumPay' step='1000'></div>
			<div class='col col-md-3 lbl'>
				<div class='sl'>
					<div id='sliderPay'></div>
					<div class='d-flex justify-content-between gr'><span>1 000</span><span>3 000 000</span></div>
				</div>
			</div>
	</div>
</div>
<div class='container-fluid'>
	<div class='row align-items-center'>
		<div class='col col col-sm-3 lbl'><input type='button' name='' id='run' value='Рассчитать'></div>
		<div class='col col-md-auto lbl' align='right'>Результат:</div>
		<div class='col col-md-auto lbl'><span id='res'></span></div>
	</div>
	</div>
</div>";
	?>