<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Oossomia vetämistä!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/jquery.mobile-1.4.2.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<link href="./css/gearless_mobile.css" rel="stylesheet">
</head>
<body>
	<script>
	//Luodaan Array of Arrays missä kuvatiedot
	<?php
	$fastrax = array
	  (
	  "A" => array("A","Unipod","./randoms/fastrax/randomAunipod.jpg",1),
	  "B" => array("B","Stairstep Diamond","./randoms/fastrax/randomBStairstepDiamond.jpg",1),
	  "C" => array("C","Murphy Flake","./randoms/fastrax/randomCMurphyFlake.jpg",1),
	  "D" => array("D","Yuan","./randoms/fastrax/randomDYuan.jpg",1),
	  "E" => array("E","Meeker","./randoms/fastrax/randomEMeeker.jpg",1),
	  "F" => array("F","Open Accordian","./randoms/fastrax/randomFOpenAccordian.jpg",1),
	  "G" => array("G","Cataccord","./randoms/fastrax/randomGCataccord.jpg",1),
	  "H" => array("H","Bow","./randoms/fastrax/randomHBow.jpg",1),
	  "J" => array("J","Donut","./randoms/fastrax/randomJDonut.jpg",1),
	  "K" => array("K","Hook","./randoms/fastrax/randomKHook.jpg",1),
	  "L" => array("L","Adder","./randoms/fastrax/randomLAdder.jpg",1),
	  "M" => array("M","Star","./randoms/fastrax/randomMStar.jpg",1),
	  "N" => array("N","Crank","./randoms/fastrax/randomNCrank.jpg",1),
	  "O" => array("O","Satellite","./randoms/fastrax/randomOSatellite.jpg",1),
	  "P" => array("P","Sidebody","./randoms/fastrax/randomPSidebody.jpg",1),
	  "Q" => array("Q","Phalanx","./randoms/fastrax/randomQPhalanx.jpg",1),
	  "2" => array("2","2","./blocks/2.gif",2),
	  "4" => array("4","4","./blocks/4.gif",2),
	  "6" => array("6","6","./blocks/6.gif",2),
	  "7" => array("7","7","./blocks/7.gif",2),
	  "8" => array("8","8","./blocks/8.gif",2),
	  "9" => array("9","9","./blocks/9.gif",2),
	  "19" => array("19","19","./blocks/19.gif",2),
	  "21" => array("21","21","./blocks/21.gif",2)
	  );
	$gearless = array
	  (
	  "A" => array("A","Unipod","./randoms/gearless/randomA.png",1),
	  "B" => array("B","Stairstep Diamond","./randoms/gearless/randomB.png",1),
	  "C" => array("C","Murphy Flake","./randoms/gearless/randomC.png",1),
	  "D" => array("D","Yuan","./randoms/gearless/randomD.png",1),
	  "E" => array("E","Meeker","./randoms/gearless/randomE.png",1),
	  "F" => array("F","Open Accordian","./randoms/gearless/randomF.png",1),
	  "G" => array("G","Cataccord","./randoms/gearless/randomG.png",1),
	  "H" => array("H","Bow","./randoms/gearless/randomH.png",1),
	  "J" => array("J","Donut","./randoms/gearless/randomJ.png",1),
	  "K" => array("K","Hook","./randoms/gearless/randomK.png",1),
	  "L" => array("L","Adder","./randoms/gearless/randomL.png",1),
	  "M" => array("M","Star","./randoms/gearless/randomM.png",1),
	  "N" => array("N","Crank","./randoms/gearless/randomN.png",1),
	  "O" => array("O","Satellite","./randoms/gearless/randomO.png",1),
	  "P" => array("P","Sidebody","./randoms/gearless/randomP.png",1),
	  "Q" => array("Q","Phalanx","./randoms/gearless/randomQ.png",1),
	  "2" => array("2","2","./blocks/2.gif",2),
	  "4" => array("4","4","./blocks/4.gif",2),
	  "6" => array("6","6","./blocks/6.gif",2),
	  "7" => array("7","7","./blocks/7.gif",2),
	  "8" => array("8","8","./blocks/8.gif",2),
	  "9" => array("9","9","./blocks/9.gif",2),
	  "19" => array("19","19","./blocks/19.gif",2),
	  "21" => array("21","21","./blocks/21.gif",2)
	  );
	?>
	//Jquery, jolla lisätään ja poistetaan elementtejä sivulle. Kuvat , kirjaimet jne. Samalla annetaan elementeille css -luokkia tehosteiksi.

	$(document).ready (function() {
	<?php
		echo "var count = 0;";
		echo "var fcount = 0;";
		
			foreach ($gearless as $pics) {

				echo "$('#button-".$pics[0]."').on('click', function() {";
					echo "if($('#button-".$pics[0]."').hasClass('ui-btn-active')){";
					
						echo "$('div').remove('#pic-".$pics[0]."');";
						echo "\n$('#button-".$pics[0]."').removeClass('ui-btn-active');";
						echo "$('#viiva').closest('span').remove();";
						echo "$('#kir-".$pics[0]."').closest('span').remove();";
						echo "count--;";
						echo "\n$('#kir-".$pics[0]."').slideToggle().hide();";
						echo "\n";	
					
					echo "\n}else{";
						echo "if(count == 0){";
							echo "\n$('<span id=\"kir-".$pics[0]."\" class=\"kirj\">".$pics[0]."</span>').appendTo('#jarjestys');";
							echo "count++;";
						echo "}else{";
							echo "\n$('<span id=\"viiva\"> - </span>').appendTo('#jarjestys');";
							echo "\n$('<span id=\"kir-".$pics[0]."\" class=\"kirj\">".$pics[0]."</span>').appendTo('#jarjestys');";
							echo "count++;";
						echo "\n}\n";
						echo "\n$('<div id=\"pic-".$pics[0]."\" ><img src=\"".$pics[2]."\" width=\"100%\" alt=\"random".$pics[0]."\"></div>').appendTo('#kuvat');";
						echo "\n$('#button-".$pics[0]."').toggleClass('ui-btn-active');";
						echo "\n$('#kir-".$pics[0]."').slideToggle().show();";
					echo "\n}\n";
				echo "});\n";
				
				echo "$('#kuvat').on('click', '#pic-".$pics[0]."' ,function() {";   
					echo "$(this).closest('div').remove();";
					echo "\n$('#button-".$pics[0]."').removeClass('ui-btn-active');";
					echo "$('#viiva').closest('span').remove();";
					echo "$('#kir-".$pics[0]."').closest('span').remove();";
					echo "count--;";
					echo "\n$('#kir-".$pics[0]."').slideToggle().hide();";
				echo "});\n";
				
			}
			foreach ($fastrax as $pics) {

				echo "$('#fbutton-".$pics[0]."').on('click', function() {";
					echo "if($('#fbutton-".$pics[0]."').hasClass('ui-btn-active')){";
										
						echo "$('div').remove('#fpic-".$pics[0]."');";
						echo "\n$('#fbutton-".$pics[0]."').removeClass('ui-btn-active');";
						echo "$('#fviiva').closest('span').remove();";
						echo "$('#fkir-".$pics[0]."').closest('span').remove();";
						echo "count--;";
						echo "\n$('#fkir-".$pics[0]."').slideToggle().hide();";
						echo "\n";	
										
					echo "\n}else{";
						echo "if(count == 0){";
							echo "\n$('<span id=\"fkir-".$pics[0]."\" class=\"fkirj\">".$pics[0]."</span>').appendTo('#fjarjestys');";
							echo "count++;";
						echo "}else{";
							echo "\n$('<span id=\"fviiva\"> - </span>').appendTo('#fjarjestys');";
							echo "\n$('<span id=\"fkir-".$pics[0]."\" class=\"fkirj\">".$pics[0]."</span>').appendTo('#fjarjestys');";
							echo "count++;";
						echo "\n}\n";
						echo "\n$('<div id=\"fpic-".$pics[0]."\" ><img src=\"".$pics[2]."\" width=\"100%\" alt=\"random".$pics[0]."\"></div>').appendTo('#fkuvat');";
						echo "\n$('#fbutton-".$pics[0]."').toggleClass('ui-btn-active');";
						echo "\n$('#fkir-".$pics[0]."').slideToggle().show();";
					echo "\n}\n";
				echo "});\n";
				
				echo "$('#fkuvat').on('click', '#fpic-".$pics[0]."' ,function() {";   
					echo "$(this).closest('div').remove();";
					echo "\n$('#fbutton-".$pics[0]."').removeClass('ui-btn-active');";
					echo "$('#fviiva').closest('span').remove();";
					echo "$('#fkir-".$pics[0]."').closest('span').remove();";
					echo "fcount--;";
					echo "\n$('#fkir-".$pics[0]."').slideToggle().hide();";
				echo "});\n";
			}
	?>
	
				
		$("#ref").click(function() {
			location.reload();
        });
		$("#ref2").click(function() {
			location.reload();
        });
	
	});
	</script>
	<div data-role="page" id="pageone" data-theme="b">
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<center>
				<div id="alkumenu">
				Choose which pictures to use!
				</div>
				<br />
				<div id="pikkukuvat" style="width: 100%; overflow: hidden;">
					<div style="width: 50%; float: left;">
					Gearless
					<br />
					<a href="#pagetwo" data-transition="fade"><img src="./randoms/gearless_mini_mobile.png" width="90px" /></a>
					</div>
					<div>
					FasTrax
					<br />
					<a href="#pagethree" data-transition="fade"><img src="./randoms/fastrax_mini_mobile.png" width="100px"/></a>
					</div>
				</div>
				<br />
				<div id="kirjaimet">
					<a href="#pagefour" class="ui-btn ui-shadow">Three Random Images!</a>
				</div>
				<div id="kirjaimet">
					<a href="#pagefive" class="ui-btn ui-shadow">Competition Jump!</a>
				</div>
				<div id="kirjaimet">
					<a href="#pagesix" class="ui-btn ui-shadow">Show all Images!</a>
					<br />
				</div>
				<br />
			</center>
		</div>
		<?php $footer="<div data-role=\"footer\">
							<center>
								<a href=\"http://www.skydivejkl.fi\" rel=\"external\" data-role=\"button\">www.skydivejkl.fi</a>\n
								<a href=\"http://weather.skydivejkl.fi\" rel=\"external\" data-role=\"button\">weather.skydivejkl.fi</a>
							</center>
						</div>";
			echo $footer;
		?>
	</div> 

	<div data-role="page" id="pagetwo" data-theme="b">
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<center>
				<div id="napit">
				<?php
					foreach ($gearless as $pics) {
						echo "\n<button id=\"button-" . $pics[0] . "\" class=\"ui-btn ui-btn-inline\">";
						echo $pics[0];
						echo "</button>";
					}
				?>
				</div>
				<div id="jarjestys"></div>
				<div id="kuvat"></div>
			</center>
		</div>
		<?php echo $footer; ?>
	</div>
	
	<div data-role="page" id="pagethree" data-theme="b">
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<center>
				<div id="napit">
				<?php
					foreach ($fastrax as $pics) {
						echo "\n<button id=\"fbutton-" . $pics[0] . "\" class=\"ui-btn ui-btn-inline\">";
						echo $pics[0];
						echo "</button>";
					}
				?>
				</div>
				<div id="fjarjestys"></div>
				<div id="fkuvat"></div>
			</center>	
		</div>
		<?php echo $footer; ?>
		
	</div>
	
	<div data-role="page" id="pagefour" data-theme="b">
	
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<div id="kuvat" align="center">
			<?php
				$jumps = array_slice($gearless, 0, 15);
				shuffle($jumps);
				echo "<div id=\"kirjaimet\">".$jumps[0][0]." - ".$jumps[1][0]." - ".$jumps[2][0]."</div>";
				echo "<button id=\"ref\" class=\"ui-btn ui-shadow\">New Randoms!</button><br/>\n";
				echo "<img src=\"".$jumps[0][2]."\" width=\"100%\" alt=\"random".$jumps[0][0]."\">";
				echo "<img src=\"".$jumps[1][2]."\" width=\"100%\" alt=\"random".$jumps[1][0]."\">";
				echo "<img src=\"".$jumps[2][2]."\" width=\"100%\" alt=\"random".$jumps[2][0]."\">";
			?>
			</div>
		</div>
		<?php echo $footer; ?>
	</div>	
	<div data-role="page" id="pagefive" data-theme="b">
	
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<div id="kuvat" align="center">
			<?php
				$jumps = $gearless;
				shuffle($jumps);
				$points = 0;
				$jumps_length = sizeof($jumps)-2;
				$order = array(0,1);
				
				$jump_string = $jumps[0][0] . " - " . $jumps[1][0];
				$points = $points + $jumps[0][3] + $jumps[1][3];
				
				for($i=2; $i<$jumps_length; $i++){
					if($points<3){
						array_push($order,$i);
						$points = $points + $jumps[$i][3];
						$jump_string .= " - " . $jumps[$i][0];
					}
				}
				
				echo "<div id=\"kirjaimet\">".$jump_string."</div>";
				echo "<button id=\"ref2\" class=\"ui-btn ui-shadow\">New Jump!</button><br/>\n";
				
				foreach ($order as $number) {
					echo "<img src=\"".$jumps[$number][2]."\" width=\"100%\" alt=\"random".$jumps[$number][0]."\">";
				}				

			?>
			</div>
		</div>
		<?php echo $footer; ?>
	</div>	
	<div data-role="page" id="pagesix" data-theme="b">
	
		<div data-role="header">
			<h1><a href="#pageone" data-transition="fade"><img src="./randoms/Gearless_logo_little_invert.png" /></a></h1>
		</div>

		<div data-role="main" class="ui-content">
			<div id="kuvat" align="center">
			<?php
				foreach($gearless as $pics){
					echo "<img src=\"".$pics[2]."\" width=\"100%\" alt=\"random".$pics[0]."\">";
				}
			?>
			</div>
		</div>
		<?php echo $footer; ?>
	</div>
</body>
</html>