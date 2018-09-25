 <!DOCTYPE html>
<html>
<head>
	<?php
	function mapremfonc($a,$b){
			$mavar3=$a + $b;
			echo "a+b= $mavar3";
		} 
	?>
	<meta http-equiv="Refresh" content="5">
	<meta charset="UTF-8">
</head>
<title>HTML Tutorial</title>
<body>
	<?php
		echo "<h1>Mon premier php :<br>";
		echo date("D d  M Y H:i:s")."</h1>";
		$titre="IUT de Saint-Malo";
		echo "<h2>", $titre;
		$titre2=" Departement R&T</h2>";
		echo "".$titre2;
		echo "telecharger easy php";
		$tableau1 = array('nom' =>"Julien" ,'prenom' =>"HAREL" );
		echo "<pre>";print_r($tableau1);echo "</pre>";
		echo "<br>¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤<br>";
		$var1=300;
		if ($var1>200) {
			echo "<br>";
			$calc= $var1*0.9;
			echo "pour un total d'achat de $var1 euros la remise sera de 10%. la somme est de $calc euros";
		}
		else {
			echo "<br>pour un montant de $var1 euros la remise sera de 5%";
		}
		$dpt=14;
		switch ($dpt) {
			case '14':
				echo "<br>ce département est en Normandie ";
				break;
			case '35':
				echo "<br>ce département est en Bretagne";
				break;
			default:
				echo "<br>t'as pas de bol ton département est Nul :p";
				break;
		}
		echo "<br><br>¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤<br>";
		$var3=30;
		$res=0;
		for ($i=0; $i <= $var3; $i=$i+5) { 
			echo "<br>$res";
			$res=$res+5;	
		}
		echo "<br><br>¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤<br>";
		$i=0;
		while ( $i<= $var3) {
			echo "<br>$i";
			$i=$i+5;
		}
		echo "<br><br>¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤<br>";
		$i=0;
		do {
			echo "<br>$i";
			$i=$i+5;
		} while ($i <= $var3);
		echo "<br><br>¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤*¤<br><br>";
		echo "date de naissance Julien HAREL :<br>";
		$tableau2 = array('jour' =>18 ,'moi' =>07, 'annee'=>1998);
		foreach ($tableau2 as $cle => $nombre) {
			echo "$clé => $nombre<br>";
		}
		$tab1 = array(1,2,3,6,5,5,8,9,6,5,3,2,1,4,6,3,2,1,5,3,6,9,7,5,9,6,2);
		foreach ($tab1 as $key => $value) {
			echo "<br>#$key ~>$value";
		}
		echo "<br><br>======== Résultats ========<br>";
		$tab2 = array_count_values($tab1);
		foreach ($tab2 as $key => $value) {
			echo "<br>#$key ~> $value";
		}
	
		echo "<br><br>======== FONCTION : array multisort ========<br>";
		array_multisort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";
		
		echo "<br><br>======== FONCTION : asort ========<br>";
		asort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";

		echo "<br><br>======== FONCTION : krsort(array) ========<br>";
		krsort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";

		echo "<br><br>======== FONCTION : ksort(array) ========<br>";
		ksort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";

		echo "<br><br>======== FONCTION : natcasesort(array) ========<br>";
		natcasesort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";

		echo "<br><br>======== FONCTION : natsort(array) ========<br>";
		natsort($tab1);
		echo "<pre>";print_r($tab1);echo "</pre>";
		
		echo "============ TABLEAU 1 de base ===========<br>";
		
		$tableau2 = array('jour' =>18 ,'moi' =>07, 'annee'=>1998);
		foreach ($tableau2 as $cle => $nombre) {
			echo "$clé => $nombre<br>";
		}
		echo "<br><br>======== FONCTION : array_flip(trans) ========<br>";
		$inver=array_flip($tableau2);
		echo "<pre>";print_r($inver);echo "</pre>";
		$mavar1=12;
		$mavar2=18;

		mapremfonc($mavar1, $mavar2)
	?>	
</body>
</html> 