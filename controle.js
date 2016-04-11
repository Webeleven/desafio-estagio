$(document).ready(function(){
	var numbers = [];
	$("#submitQntd").click(function(){
		var indice = $("#qntdSequencia").val();
		var html = "<div>"
		for(var x = 0; x < $("#qntdSequencia").val(); x++){
			html += "<label>Número " + (x + 1) + "</label><input id='number" + x + "' type='number' class='form-control' style='width: 20%; padding: 0px 0px 7px 0px;'>";

		}

		html += "<button id='btnRun' class='btn btn-info run'>Run!</button> </div>";

		$("#inputNumbers").html(html);

		$("#btnRun").click(function(){
			var maior = $("#number0").val();
			var menor = $("#number0").val();

			for(var i = indice; i >= 0; i--){
				if(maior < parseInt($("#number"+i).val()))
					maior = parseInt($("#number"+i).val());

				if(menor > parseInt($("#number"+i).val()))
					menor = parseInt($("#number"+i).val());
			}

			alert("Maior número da sequência: " + maior + "\nMenor número da sequência: " + menor);
		});
	});
});