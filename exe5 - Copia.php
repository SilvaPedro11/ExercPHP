<?php 

	$sexo = 2;
	$altura = 190;
	$alturaMa = 0;
	$alturaMe = 0;
	$altura2=$altura;
	$media = 0;
	$total = 0;
	$cont = 0;
	$idade = 0;
	$idade2 = $idade;
	$idadevelha = 0;
	$idadenova = 45;


	for($i=0; $i<5; $i++){
		switch($sexo){
			case 1:
				echo "Você escolheu Masculino <br>";
			break;
		
			case 2:
				echo "Você escolheu Feminino <br>";
				$total++;
				$cont = $altura2 + $cont;
				$media = $cont/$total;
			break;
			
			default:
				echo "Opcão inválida <br>";
			break;
		}
		if($sexo == 1){
			if($altura2>$alturaMa){
				$alturaMa=$altura2;
			}
			if($altura2<$alturaMe){
				$alturaMe=$altura2;
			}
			if($idade2>$idadevelha){
				$idadevelha<$idade2;
			}
			if($idade2<$idadenova){
				$idadenova<$idade2;
			}
		
		}else{
			if($altura2>$alturaMa){
				$alturaMa=$altura2;
			}
			if($altura2<$alturaMe){
				$alturaMe=$altura2;
			}
			if($idade2>$idadevelha){
				$idadevelha<$idade2;
			}
			if($idade2<$idadenova){
				$idadenova<$idade2;
			}
		}
	}
	echo "Altura maior: ".$alturaMa."<br>";
	echo "Altura menor: ".$alturaMe."<br>";
	echo "Média de altura das mulheres: ".$media."<br>";
	echo "Idade do homem mais velho é: ".$idadevelha."<br>";
	echo "Mulher mais nova: ".$idadenova;
 ?>