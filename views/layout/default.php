<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
	<link href="../lib/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">	
	<link href="../style/stylesheet.css" rel="stylesheet">	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<script src = "https://github.com/jquery/jquery-ui/blob/master/ui/i18n/datepicker-ru.js"></script>
	<script src="../lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
	<script src="../lib/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="container-fluid">
				<div class="d-flex justify-content-between">
					<a href="/">
						<div class="logo">
							<div class="icon"><i class="fa fa-globe fa-5x" aria-hidden="true"></i></div>
							<p class="title">WORLD BANK<br>Publications</p>
						</div>
					</a>
					<div class="phone"><p class="numb">8-800-100-5005<br>+7(3452)522-000</p></div>					
				</div>
				<div class="row">
					<div class="col"><a href="/creditcards">Кредитные карты</a></div>
					<div class="col"><a href="/holdings">Вклады</a></div>
					<div class="col"><a href="/debitcards">Дебетовая карта</a></div>
					<div class="col"><a href="/insurance">Страхование</a></div>
					<div class="col"><a href="/friends">Друзья</a></div>
					<div class="col"><a href="/internetbank">Интернет-банк</a></div>
				</div>
			</div>
			<?php
			
			if(count($crumbs) > 1) {
			?>
				<div class="row row-margin">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<?php
								for ($i=0; $i < count($crumbs); $i++) { 
									if($i != count($crumbs)-1) 
										echo "<li class='breadcrumb-item'><a href=\"/".$crumbs[$i]['url']."\">".$crumbs[$i]['title']."</a></li>";
									else
										echo "<li class='breadcrumb-item active' aria-current='page'>".$crumbs[$i]['title']."</li>";
								}
							?>
						</ol>
					</nav>
				</div>
			<?php
			}
			?>
			<div class="content">
				<?php echo $content; ?>
			</div>
		</div>
		<div class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs"><a href="/creditcards">Кредитные карты</a></div>
					<div class="col-xs"><a href="/holdings">Вклады</a></div>
					<div class="col-xs"><a href="/debitcards">Дебетовая карта</a></div>
					<div class="col-xs"><a href="/insurance">Страхование</a></div>
					<div class="col-xs"><a href="/friends">Друзья</a></div>
					<div class="col-xs"><a href="/internetbank">Интернет-банк</a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>