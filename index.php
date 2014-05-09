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
	  "A" => array("A","Unipod","./randoms/fastrax/randomAunipod.jpg"),
	  "B" => array("B","Stairstep Diamond","./randoms/fastrax/randomBStairstepDiamond.jpg"),
	  "C" => array("C","Murphy Flake","./randoms/fastrax/randomCMurphyFlake.jpg"),
	  "D" => array("D","Yuan","./randoms/fastrax/randomDYuan.jpg"),
	  "E" => array("E","Meeker","./randoms/fastrax/randomEMeeker.jpg"),
	  "F" => array("F","Open Accordian","./randoms/fastrax/randomFOpenAccordian.jpg"),
	  "G" => array("G","Cataccord","./randoms/fastrax/randomGCataccord.jpg"),
	  "H" => array("H","Bow","./randoms/fastrax/randomHBow.jpg"),
	  "J" => array("J","Donut","./randoms/fastrax/randomJDonut.jpg"),
	  "K" => array("K","Hook","./randoms/fastrax/randomKHook.jpg"),
	  "L" => array("L","Adder","./randoms/fastrax/randomLAdder.jpg"),
	  "M" => array("M","Star","./randoms/fastrax/randomMStar.jpg"),
	  "N" => array("N","Crank","./randoms/fastrax/randomNCrank.jpg"),
	  "O" => array("O","Satellite","./randoms/fastrax/randomOSatellite.jpg"),
	  "P" => array("P","Sidebody","./randoms/fastrax/randomPSidebody.jpg"),
	  "Q" => array("Q","Phalanx","./randoms/fastrax/randomQPhalanx.jpg")
	  );
	$gearless = array
	  (
	  "A" => array("A","Unipod","./randoms/gearless/randomA.png"),
	  "B" => array("B","Stairstep Diamond","./randoms/gearless/randomB.png"),
	  "C" => array("C","Murphy Flake","./randoms/gearless/randomC.png"),
	  "D" => array("D","Yuan","./randoms/gearless/randomD.png"),
	  "E" => array("E","Meeker","./randoms/gearless/randomE.png"),
	  "F" => array("F","Open Accordian","./randoms/gearless/randomF.png"),
	  "G" => array("G","Cataccord","./randoms/gearless/randomG.png"),
	  "H" => array("H","Bow","./randoms/gearless/randomH.png"),
	  "J" => array("J","Donut","./randoms/gearless/randomJ.png"),
	  "K" => array("K","Hook","./randoms/gearless/randomK.png"),
	  "L" => array("L","Adder","./randoms/gearless/randomL.png"),
	  "M" => array("M","Star","./randoms/gearless/randomM.png"),
	  "N" => array("N","Crank","./randoms/gearless/randomN.png"),
	  "O" => array("O","Satellite","./randoms/gearless/randomO.png"),
	  "P" => array("P","Sidebody","./randoms/gearless/randomP.png"),
	  "Q" => array("Q","Phalanx","./randoms/gearless/randomQ.png")
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
					<br />
					<a href="#pagefour" class="ui-btn ui-shadow">Three Random Images!</a>
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
				$rand_keys = array_rand($gearless, 3);
				echo "<div id=\"kirjaimet\">".$gearless[$rand_keys[0]][0]." - ".$gearless[$rand_keys[1]][0]." - ".$gearless[$rand_keys[2]][0]."</div>";
				echo "<button id=\"ref\" class=\"ui-btn ui-shadow\">New Randoms!</button><br/>\n";
				echo "<img src=\"".$gearless[$rand_keys[0]][2]."\" width=\"100%\" alt=\"random".$gearless[$rand_keys[0]][0]."\">";
				echo "<img src=\"".$gearless[$rand_keys[1]][2]."\" width=\"100%\" alt=\"random".$gearless[$rand_keys[1]][0]."\">";
				echo "<img src=\"".$gearless[$rand_keys[2]][2]."\" width=\"100%\" alt=\"random".$gearless[$rand_keys[2]][0]."\">";
			?>
			</div>
		</div>
		<?php echo $footer; ?>
	</div>
</body>
</html>