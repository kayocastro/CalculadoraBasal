<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<head>
	<title> | Taxa Metabólica</title>
		<link rel="shortcut icon" href="view/assets/img/favicon1.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="view/assets/bootstrap3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="view/assets/font-awesome/css/font-awesome.min.css">
		<script type="text/javascript" src="view/assets/bootstrap3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="model/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="model/jquery.mask.min.js"></script>
</head>
	<style type="text/css">
		*{

		}
		body{
			/*background-color: rgb(10,23,55,0.5);*/
			background-image: url(back.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		@font-face {
     		font-family: ubuntu;
     		src: url('view/assets/Ubuntu-Regular.ttf');
		}
		h2{
			font-family: ubuntu;
		}

		label{
			font-family: ubuntu;
			font-size: 130%;
			margin-top: -1800px !important;
			margin-bottom: 10px !important;
		}

		span{
			font-family: ubuntu;
			font-size: 110%;
			font-weight: bold;
			margin-top: 100px !important;
		}
		button{
			background-color: #ffc107 !important;
			color: #ffffff !important;
			border-width: 0px !important;
			outline: thin dotted !important;
    		outline: 0px auto -webkit-focus-ring-color !important;
    		outline-offset: 0px !important;
		}
		button:focus {
		 	outline: thin dotted !important;
		    outline: 0px auto -webkit-focus-ring-color !important;
		    outline-offset: 0px !important;
		    border:none !important;
		}
		button:hover{
			background-color: #d1a00e !important;
			color: #282828 !important;
			/*color: #ff8300 !important;*/
			/*text-shadow: 0px 0px 5px #ff8300 !important;*/
			border:none !important;
			/*color: #007bff;*/
		}
		option{
			font-weight: bold;
		}
		select{
			font-weight: bold;
		}
		.result{
			font-weight: bold;
		}

	</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 jumbotron" style="margin-top:20px;background-color:rgb(66, 66, 66, 0.5);color:#ffc107/*#ff8300*/;box-shadow:0px 0px 5px #000000;">
				<h2 style="text-align:center;font-weight:bold;margin-top:-40px;/*text-shadow: 0 0 3px #000000;*/"> Taxa Metabólica Basal </h2>

				<form action="controller/calcular.php" method="POST">

				 <br>

				<label for="se1"><i class="fa fa-gift"></i> Idade</label>
				<div class="input-group" style="margin-top: -12px;">
				  <span class="input-group-addon"><i class="fa fa-gift"></i></span>
				  <input type="text" class="form-control" id="idade" name="user_idade">
				  <span class="input-group-addon">anos</span>
				</div>		
				
				<br>

				<label><i class="fa fa-balance-scale"></i> Peso</label>
				<div class="input-group" style="margin-top: -12px;">
				  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
				  <input type="text" class="form-control" id="peso" name="user_peso">
				  <span class="input-group-addon">kg</span>
				</div>

				<br>

				<center>
					<i class=""></i> <input class="checkbox-inline" type="radio" value="kg" name="user_medicao" checked style="margin-top:-2px;width:20px;height:20px;margin-left: -19px;"> <span> Quilos </span>

					&nbsp;

					<i class=""></i> <input class="checkbox-inline" type="radio" value="libra" name="user_medicao" style="margin-top:-2px;width:20px;height:20px;margin-left: 53px;"> <span> Libras </span><br>
				</center>

				<br>

				<label><i class="fa fa-street-view"></i> Altura</label>
				<div class="input-group" style="margin-top: -12px;">
				  <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
				  <input type="text" class="form-control" id="altura" name="user_estatura">
				  <span class="input-group-addon">cm</span>
				</div>

				<br>

				<div class="form-group">
			      <label for="sel1"><i class="fa fa-heartbeat"></i> Nivel De Atividade :</label>
				      <select class="form-control" id="sel1" style="margin-top: -12px;" name="user_nivel_atividade" required="required">
				        <option> Selecione Uma Opção </option>
				        <option value="1.375"> Atividade Ligeira </option>
				        <option value="1.55"> Atividade Moderada </option>
				        <option value="1.725"> Atividade Intensa </option>
				        <option value="1.9"> Atividade Muito Intensa </option>
				        <option value="1.2"> Sedentário </option>
				      </select>
    			</div>

    			<!--<label><i class="fa fa-venus-mars"></i> Sexo</label>--> 

				 <center><i class="fa fa-male" style="margin-left: -10px;font-size:20px;"></i> <input class="checkbox-inline" type="radio" value="masculino" name="user_sexo" checked style="margin-top:-2px;width:20px;height:20px;"> <span>Masculino</span>

				 	&nbsp;&nbsp;

				 <i class="fa fa-female" style="font-size:20px;"></i> <input class="checkbox-inline" type="radio" value="feminino" name="user_sexo" style="margin-top:-2px;width:20px;height:20px;"> <span>Feminino</span></center>

				<br>

				<br>	

				<center>
					<button  name="idade"class="btn btn-default btn-block btn-lg" style="margin-top: -12px;">
						<span><i class=""></i> Calcular</span>
					</button>
				</center>

				</form>

<?php
	
	if (isset($_GET["calculado"])){
		$calculado = $_GET["calculado"];

		// Recebendo os dados da página calcula.php
		$metabolismo_basal = $_GET["metabolismo_basal"];
		$calorias_manter_peso = $_GET["calorias_manter_peso"];
		$calorias_emagrecer = $_GET["calorias_emagrecer"];
		$calorias_engoradar = $_GET["calorias_engoradar"];

		if ($calculado == true){

?>

			</div>
		</div>
	</div>

	<div class="col-md-6 col-md-offset-3">	
		<div class="alert alert-default" role="alert" style="background-color:rgb(66, 66, 66, 0.5);color:#ffffff/*#ff8300*/;box-shadow: 0px 0px 5px #000000;margin-top:-10px;">
			<span class="result">
				Metabolismo Basal : <?=$metabolismo_basal;?>
			<br>
				Calorias Necessárias Para Manter O Peso : <?=$calorias_manter_peso;?>
			<br>
				Calorias Para Aumentar De Peso : <?=$calorias_engoradar;?>
			<br>
				Calorias Para Diminuir De Peso : <?=$calorias_emagrecer;?>
			</span>
		</div>	
	</div>
	<?php
		}
	}
?>
<?php

	// Recebendo os dados do formulário
	@$user_sexo = $_POST["user_sexo"];
	@$user_peso = $_POST["user_peso"];
	@$user_medicao = $_POST["user_medicao"];
	@$user_estatura = $_POST["user_estatura"];
	@$user_idade = $_POST["user_idade"];
	@$user_nivel_atividade = $_POST["user_nivel_atividade"];

	// Criando os calculos

	# Convertendo Libras em Kg
	if ($user_medicao == "libra"){
		$user_peso = $user_peso * 0.4536;
	}

	# Montando a formula
	if ($user_sexo == "masculino"){
		$result = 66 + (13.7 * $user_peso) + (5 * $user_estatura) - (6.8 * $user_idade);
	}else{
		$result = 655 + (9.6 * $user_peso) + (1.8 * $user_estatura) - (4.7 * $user_idade);
	}

	# Montando resultado final
	$metabolismo_basal = $result;
	$calorias_manter_peso = $result * $user_nivel_atividade;
	$calorias_engoradar = $result * $user_nivel_atividade * 1.15;
	$calorias_emagrecer = $result * $user_nivel_atividade * 0.85;

	# Criando redirecionamento
	@header("location: index.php?calculado=true&metabolismo_basal=$metabolismo_basal&calorias_manter_peso=$calorias_manter_peso&calorias_engoradar=$calorias_engoradar&calorias_emagrecer=$calorias_emagrecer"); 

?>

	<script type="text/javascript">
		$(document).ready(function(){
    		$('#peso').mask('000');
    		$('#idade').mask('00');
    		$('#altura').mask('000');
		});
	</script>
</body>
</html>