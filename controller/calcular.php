<?php

	// Recebendo os dados do formulário
	$user_sexo = $_POST["user_sexo"];
	$user_peso = $_POST["user_peso"];
	$user_medicao = $_POST["user_medicao"];
	$user_estatura = $_POST["user_estatura"];
	$user_idade = $_POST["user_idade"];
	$user_nivel_atividade = $_POST["user_nivel_atividade"];

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
	header("Location: ../index.php?calculado=true&metabolismo_basal=$metabolismo_basal&calorias_manter_peso=$calorias_manter_peso&calorias_engoradar=$calorias_engoradar&calorias_emagrecer=$calorias_emagrecer"); 

?>