<?php
include('hex.class.php');

	$obj = new Hex('password.txt');


?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-type" content="application/json; charset=utf-8" />
		
</head>
<body>
	<center>

		
		</br>
			<textarea name='hexcode' cols='80' rows='40'>
				<?=
				
				trim($obj->gethex());
			echo "\n\n";
			echo "Forrás:\n";
			echo "pS“`nf2†ddn^MZrrŠXwnU€/8
fdŹ`752…ihj_€`o3Z”!st^g
e€ehyfŠXCma“ddn^MZrr‚jlq^€^47
mS“`}xSŠ7swa“fqrSc1haŚ!wwS‚blsY
yW‘ghxl“\ujl_ZlydŽddn^M_x/U”brw]€
sS†pvf``Cl_€`o3Z”!mz^‚jlpS
";
				
				$output = str_split(trim($obj->gethex()), 2);
				$convert=implode(" ",$output);
				
				echo("\nHexa:\n");
				echo $convert;

				echo "\n\nDecimal:\n";
				
				
					$pagee = array();
					
					foreach (explode(" ",$convert) as $page) {
					$pagee[] = hexdec($page);				  
					}
					$hexdecDone= implode(" ",$pagee);
					echo $hexdecDone;
		
					$hexdecDoneArray = explode(" ", $hexdecDone);

					echo "\n\nKulcs:\n5,-14,31,-9,3\nellentettje\n-5,+14,-31,+9,-3";


					echo "\n\nVisszafejtve:\n";
					$muveletek = array("5", "-14", "31", "-9", "3");
					$n=0;
					for ($m = 0; $m <= 355/2; $m++) {
						if($hexdecDoneArray[$m]==10){
							$n=0;
						}
						else{
							
							$hexdecDoneArray[$m]=$hexdecDoneArray[$m]+$muveletek[$n]*-1;
							$n=$n+1;
							if($n==5){
								$n=0;
							}
							//echo " ".$hexdecDoneArray[$m];
							echo myParseString($hexdecDoneArray[$m]);
						
						}
					}	
						

				//Decimal -> ASCII
				function myParseString($str) {
				$output2 = '';
				$token = strtok($str, ' ');

				
					while ($token !== false) {
						$output2 .= chr($token); 
						$token = strtok(' ');
					}
				
					return $output2;
				}
				$str = '';
				//echo myParseString($str)."\n";
	
				echo "\n\nRendezve:
katika@gmail.com*katica85
arpi40@freemail.hu*polip
zsanettka@hotmail.com*csillag12
hatizsak@protonmail.com*tracking
terpeszterez@citromail.hu*cukorka
nagysanyi@gmail.hu*julcsika";
	
				?>
				

			</textarea>

			<br />



	</center>
</body>

</html>
