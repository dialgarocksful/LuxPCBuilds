<html>
	<head>
		<title>Intel Gaming Builds</title>
		<?php 
			include ("scripts2.php");
		?>
	</head>
	<body>
	<center>
		<form method="POST" action="">
		<h4>Store Preference</h4>
			<select name="store">
				<?php 
					if (isset($_POST['apply']))
					{
						$value = $_POST["store"];
					}
					else
					{
						$value = 1;
					}
					
					if ($value == 1)
					{
						echo '<option value="1" selected>PC Hub / EDGE</option>';
						echo '<option value="2">DynaquestPC</option>';
						echo '<option value="3">EasyPC</option>';
					}
						
					if ($value == 2)
					{
						echo '<option value="1">PC Hub / EDGE</option>';
						echo '<option value="2" selected>DynaquestPC</option>';
						echo '<option value="3">EasyPC</option>';
					}
					
					if ($value == 3)
					{
						echo '<option value="1">PC Hub / EDGE</option>';
						echo '<option value="2">DynaquestPC</option>';
						echo '<option value="3" selected>EasyPC</option>';
					}
				?>
			</select>
			<input type="submit" value="Apply" name="apply" class="btn btn-info"/>
		</form>
		
		<br/><br/>
		
		<div class="col-md-4">
		<h3><b>P20,000</b></h3>
			<table class="table table-bordered">	
				<tr>
					<th></th>
					<th>Name</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>CPU</td>
						<?php
							if (isset($_POST['apply']))
							{
								$value = $_POST["store"];
							}
							else
							{
								$value = 1;
							}
							
							if ($value == 1)
							{
								$cpuName = "Intel Pentium G4560";
								$cpuPrice = 3890;
							}
								
							if ($value == 2)
							{
								$cpuName = "Intel Pentium G4560";
								$cpuPrice = 3190;
							}
								
							if ($value == 3)
							{
								$cpuName = "Intel Pentium G4560";
								$cpuPrice = 2995;
							}
								
							echo "<td>$cpuName</td>";
							echo '<td id="alignRight">';
							if ($cpuPrice > 0)
								echo number_format($cpuPrice, 2);
							else
								echo number_format($cpuPrice, 0);
							echo '</td>';
						?>
					
				</tr>
				<tr>
					<td>CPU Cooler</td>
						<?php
							$coolerName = "Intel Stock";
						
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($coolerName == "Wraith Spire" || $coolerName == "Wraith Stealth" || $coolerName == "Intel Stock")
							{
								$coolerPrice = 0;
							}
							else
							{
								if ($value == 1)
									$coolerPrice = 0;
								if ($value == 2)
									$coolerPrice = 0;
								if ($value == 3)
									$coolerPrice = 0;
							}						
							
							echo "<td>$coolerName</td>";
							echo '<td id="alignRight">';
							if ($coolerPrice > 0)
								echo number_format($coolerPrice, 2);
							else
								echo number_format($coolerPrice, 0);
							echo '</td>';
						?>
					</td>
				</tr>
				<tr>
					<td>Motherboard</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$moboName = "AsRock H110M HDV";
							$moboPrice = 3060;
						}
							
						if ($value == 2)
						{
							$moboName = "ECS H110M4-C2H";
							$moboPrice = 2700;
						}
						if ($value == 3)
						{
							$moboName = "MSI H110M PRO-VD PLUS";
							$moboPrice = 3250;
						}
												
						
						echo "<td>$moboName</td>";
						echo '<td id="alignRight">';
						if ($moboPrice > 0)
							echo number_format($moboPrice, 2);
						else
							echo number_format($moboPrice, 0);
						echo '</td>';
					?>
				</tr>
				
				<tr>
					<td>RAM</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$ramName = "1x4GB Kingston HyperX Fury 2400MHz";
							$ramPrice = 1890;
						}
							
						if ($value == 2)
						{
							$ramName = "1x8GB Kingston HyperX Fury 2133MHz";
							$ramPrice = 3100;
						}
						if ($value == 3)
						{
							$ramName = "1x8GB GSkill Ripjaws V 2400MHz";
							$ramPrice = 3150;
						}
												
						
						echo "<td>$ramName</td>";
						echo '<td id="alignRight">';
						if ($ramPrice > 0)
							echo number_format($ramPrice, 2);
						else
							echo number_format($ramPrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td>SSD</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$ssdName = "N/A";
							$ssdPrice = 0;
						}
							
						if ($value == 2)
						{
							$ssdName = "N/A";
							$ssdPrice = 0;
						}
						if ($value == 3)
						{
							$ssdName = "N/A";
							$ssdPrice = 0;
						}
												
						
						echo "<td>$ssdName</td>";
						echo '<td id="alignRight">';
						if ($ssdPrice > 0)
							echo number_format($ssdPrice, 2);
						else
							echo number_format($ssdPrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td>HDD</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$hddName = "Western Digital Caviar Blue 1TB";
							$hddPrice = 2350;
						}
							
						if ($value == 2)
						{
							$hddName = "Western Digital Caviar Blue 1TB";
							$hddPrice = 2350;
						}
						if ($value == 3)
						{
							$hddName = "Western Digital Caviar Blue 1TB";
							$hddPrice = 2400;
						}
												
						
						echo "<td>$hddName</td>";
						echo '<td id="alignRight">';
						if ($hddPrice > 0)
							echo number_format($hddPrice, 2);
						else
							echo number_format($hddPrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td>Graphics Card</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$gpuName = "Asus GTX 1050";
							$gpuPrice = 5450;
						}
							
						if ($value == 2)
						{
							$gpuName = "Palit GTX 1050 StormX";
							$gpuPrice = 5590;
						}
						if ($value == 3)
						{
							$gpuName = "Sapphire RX 460 OC 2GB";
							$gpuPrice = 5650;
						}
												
						
						echo "<td>$gpuName</td>";
						echo '<td id="alignRight">';
						if ($gpuPrice > 0)
							echo number_format($gpuPrice, 2);
						else
							echo number_format($gpuPrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td>Power Supply</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$psuName = "Corsair VS450";
							$psuPrice = 1720;
						}
							
						if ($value == 2)
						{
							$psuName = "Corsair VS450";
							$psuPrice = 1690;
						}
						if ($value == 3)
						{
							$psuName = "Corsair VS450";
							$psuPrice = 1650;
						}
												
						echo "<td>$psuName</td>";
						echo '<td id="alignRight">';
						if ($psuPrice > 0)
							echo number_format($psuPrice, 2);
						else
							echo number_format($psuPrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td>Case</td>
					<?php					
						if (isset($_POST['apply']))
							$value = $_POST["store"];
						else
							$value = 1;
						
						if ($value == 1)
						{
							$caseName = "Tecware F3";
							$casePrice = 1200;
						}
							
						if ($value == 2)
						{
							$caseName = "Tecware Infinity";
							$casePrice = 1240;
						}
						if ($value == 3)
						{
							$caseName = "Deepcool Smarter";
							$casePrice = 995;
						}
												
						echo "<td>$caseName</td>";
						echo '<td id="alignRight">';
						if ($casePrice > 0)
							echo number_format($casePrice, 2);
						else
							echo number_format($casePrice, 0);
						echo '</td>';
					?>
				</tr>
				<tr>
					<td colspan="2" id="alignRight">Total</td>
					<td id="alignRight">
						<?php
							$total = $cpuPrice + $moboPrice + $coolerPrice + $ramPrice + $ssdPrice + $hddPrice + $gpuPrice + $psuPrice + $casePrice;
							echo number_format($total, 2);
						?>
					</td>
				</tr>
			</table>
		</div>
	
		
	</center>
	</body>
</html>