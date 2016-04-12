$(document).ready(function(){
	var operation;
	var Ans;
	$(".btnCalNumber").click(function(){
		$("#screen").val($("#screen").val() + parseInt($(this).text()));
	});

	$(".btnCalAction").click(function(){
		switch ($(this).text()) {
			case "Del":
				if ($("#screen").val().length > 0) {
				    $("#screen").val( $("#screen").val().substring(0, $("#screen").val().length - 1) );
				}
				break;
				// Del case End

			case "CE":
				$("#screen").val("");
				break;
				// CE case End

			case "C":
				$("#formula").val("");
				$("#screen").val("");
				Ans = "";
				operation = "";
				break;
				// C case End

			case "=":
				if((Ans == "") && ($("#screen").val() == ""))
					$("#screen").val("0");
				else if((Ans != "") && ($("#screen").val() == ""))
					$("#screen").val(Ans);
				else if((Ans != "") && ($("#screen").val() != "") && (operation != ""))
					$.post("solve.php", { Ans:parseInt(Ans), Operation:operation, number:parseInt($("#screen").val()) }, function(result){
						$("#formula").val(Ans + " " + operation + " " + $("#screen").val() + " = " + result);
						$("#screen").val(result);
						Ans = result;
					});
				break;
				// = case End

			case "/":
				if($("#formula").val() == "")
					Ans = $("#screen").val();
				operation = $(this).text();
				$("#formula").val(Ans + " " + operation);
				$("#screen").val("");
				break;
				// / case End

			case "*":
				if($("#formula").val() == "")
					Ans = $("#screen").val();
				operation = $(this).text();
				$("#formula").val(Ans + " " + operation);
				$("#screen").val("");
				break;
				// * case Ends
			case "-":
				if($("#formula").val() == "")
					Ans = $("#screen").val();
				operation = $(this).text();
				$("#formula").val(Ans + " " + operation);
				$("#screen").val("");
				break;
				// - case End

			case "+":
				if($("#formula").val() == "")
					Ans = $("#screen").val();
				operation = $(this).text();
				$("#formula").val(Ans + " " + operation);
				$("#screen").val("");
				break;
				// + case End

			case ",":
				if($("#screen").val().length == 0)
					$("#screen").val("0" + ".");
				else
					$("#screen").val($("#screen").val() + ".");
				break;
				// , case End

			case "+-":
				$("#screen").val($("#screen").val() * (-1));
				break;
				// +- case End

			default:
		}
	});
});

	
