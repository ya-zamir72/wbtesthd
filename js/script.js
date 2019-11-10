$(document).ready(function() {
	
	$('#datepicker').datepicker($.extend({
        inline: true,
        changeYear: true,
		changeMonth: true,
		onSelect: function() {
			$("#datepicker").removeClass("error");
		},
    },
	{
		closeText: "Закрыть",
		prevText: "&#x3C;Пред",
		nextText: "След&#x3E;",
		currentText: "Сегодня",
		monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь",
		"Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
		monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
		"Июл","Авг","Сен","Окт","Ноя","Дек" ],
		dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
		dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
		dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
		weekHeader: "Нед",
		dateFormat: "dd.mm.yy",
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: "",
	}));

	$("#sliderIns").slider({
		value: 50000,
		min: 1000,
		max: 3000000,
		step: 1000,
		create: function(event, ui) {
			val = $("#sliderIns").slider("value");
			$("#sumIns").val(val);
		},
		slide: function(event, ui) {
			$("#sumIns").val(ui.value);
			$("#sumIns").removeClass("error");
		}
	});

	$("#sliderPay").slider({
		value: 50000,
		min: 1000,
		max: 3000000,
		step: 1000,
		create: function(event, ui) {
			val = $("#sliderPay").slider("value");
			$("#sumPay").val(val);
		},
		slide: function(event, ui) {
			$("#sumPay").val(ui.value);
			$("#sumPay").removeClass("error");
		}
	});

	$("#run").click(function () {

		$.post("../controllers/validate.php", { date: $("#datepicker").val(), sumIns: $("#sumIns").val(), period: $("#period").val(), sumPay: $("#sumPay").val() } ,function(data) {
			if(data != "") {
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					switch(data[i]) {
						case '1': 
							$("#datepicker").addClass("error");
							break;
						case '2':
							$("#sumIns").addClass("error");
							break;
						case '3': 
							$("#sumPay").addClass("error");
							break;
					}
					$("#res").html("Неверно заполнены поля");
				}
			} else {
				$.post("../controllers/calc.php", { date: $("#datepicker").val(), sumIns: $("#sumIns").val(), period: $("#period").val(), sumPay: $("#sumPay").val(), payM: $("input[name=ch]:checked").val() } ,function(data) {
					$("#res").html(data);
				});	
			}
		});
	});

	$("#sumIns").bind('keyup mouseup', function() {
		if(($("#sumIns").val() >= 1000)&&($("#sumIns").val() <= 3000000)) {
			$("#sliderIns").slider('value', $("#sumIns").val());
			$("#sumIns").removeClass("error");
		}
	});

	$("#sumPay").bind('keyup mouseup', function() {
		if(($("#sumPay").val() >= 1000)&&($("#sumPay").val() <= 3000000)) {
			$("#sliderPay").slider('value', $("#sumPay").val());
			$("#sumPay").removeClass("error");
		}
	});

});
