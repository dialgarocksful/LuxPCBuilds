<html>
	<head>
		<title>AMD Ryzen Builds</title>
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
					}
						
					if ($value == 2)
					{
						echo '<option value="1">PC Hub / EDGE</option>';
						echo '<option value="2" selected>DynaquestPC</option>';
					}
					
					if ($value == 3)
					{
						echo '<option value="1">PC Hub / EDGE</option>';
						echo '<option value="2">DynaquestPC</option>';
					}
				?>
			</select>
			<input type="submit" value="Apply" name="apply" class="btn btn-info"/>
		</form>
		
		<br/><br/>
		
		<div class="col-md-4">
		<h3><b>Ryzen 7 1700</b></h3>
			<table class="table table-bordered">	
				<tr>
					<th></th>
					<th>Name</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>CPU</td>
					<td>Ryzen 7 1700</td>
					<td id="alignRight">
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
								$cpu = 17000;
							if ($value == 2)
								$cpu = 17000;
							
							if ($cpu > 0)
								echo number_format($cpu, 2);
							else
								echo number_format($cpu, 0);
						?>
					</td>
				</tr>
				<tr>
					<td>CPU Cooler</td>
					<td>
						<?php
							$coolerName = "Wraith Spire";
							echo $coolerName;
						?>
					</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($coolerName != "Wraith Spire")
							{
								if ($value == 1)
									$cooler = 17000;
								if ($value == 2)
									$cooler = 17000;
							}
							else
							{
								$cooler = 0;
							}						
							
							if ($cooler > 0)
								echo number_format($cooler, 2);
							else
								echo number_format($cooler, 0);
						?>
					</td>
				</tr>
				<tr>
					<td>Motherboard</td>
					<td>MSI X370 SLI Plus</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$mobo = 8160;
							if ($value == 2)
								$mobo = 8150;
				
							
							if ($mobo > 0)
								echo number_format($mobo, 2);
							else
								echo number_format($mobo, 0);
							
						?>
					</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>2x4GB Kingston HyperX Fury 2400MHz</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$ram = 4060;
							if ($value == 2)
								$ram = 1950 * 2;
							
							if ($ram > 0)
								echo number_format($ram, 2);
							else
								echo number_format($ram, 0);
						
						?>
					</td>
				</tr>
				<tr>
					<td>SSD</td>
					<td>Samsung 850 EVO 250GB</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$ssd = 4740;
							if ($value == 2)
								$ssd = 4900;				
							
							if ($ssd > 0)
								echo number_format($ssd, 2);
							else
								echo number_format($ssd, 0);
						?>
					</td>
				</tr>
				<tr>
					<td>HDD</td>
					<td>Western Digital Caviar Blue 1TB</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$hdd = 2350;
							if ($value == 2)
								$hdd = 2350;				
							
							if ($hdd > 0)
								echo number_format($hdd, 2);
							else
								echo number_format($hdd, 0);
						?>
					</td>
				</tr>
				<tr>
					<td>Graphics Card</td>
					<td>Gigabyte AORUS GTX 1060 XTREME</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$gpu = 18300;
							if ($value == 2)
								$gpu = 0;				
							
							if ($gpu > 0)
								echo number_format($gpu, 2);
							else
								echo number_format($gpu, 0);
						?>
					</td>
				</tr>
				<tr>
					<td>Power Supply</td>
					<td>Seasonic M12ii-520</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$psu = 3460;
							if ($value == 2)
								$psu = 3350;				
							
							if ($psu > 0)
								echo number_format($psu, 2);
							else
								echo number_format($psu, 0);
							
						?>
					</td>
				</tr>
				<tr>
					<td>Case</td>
					<td>NZXT S340</td>
					<td id="alignRight">
						<?php
							if (isset($_POST['apply']))
								$value = $_POST["store"];
							else
								$value = 1;
							
							if ($value == 1)
								$case = 3950;
							if ($value == 2)
								$case = 3950;				
							
							if ($case > 0)
								echo number_format($case, 2);
							else
								echo number_format($case, 0);
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="alignRight">Total</td>
					<td id="alignRight">
						<?php
							$total = $cpu + $mobo + $cooler + $ram + $ssd + $hdd + $gpu + $psu + $case;
							echo number_format($total, 2);
						?>
					</td>
				</tr>
			</table>
		</div>
	
		<div class="col-md-4">
		<h3><b>Ryzen 7 1700X</b></h3>
			<table class="table table-bordered">
				
				<tr>
					<th></th>
					<th>Name</th>
					<th>Price</th>
				</tr>
				
				<tr>
					<td>CPU</td>
					<td>Ryzen 7 1700X</td>
					<td id="alignRight">
						<?php
							$cpu = 20700;
							echo number_format($cpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>CPU Cooler</td>
					<td>Cryorig H7</td>
					<td id="alignRight">
						<?php
							$cooler = 1900;
							echo number_format($cooler, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Motherboard</td>
					<td>MSI X370 Krait</td>
					<td id="alignRight">
						<?php
							$mobo = 8950;
							echo number_format($mobo, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>2x4GB Kingston HyperX Fury 2400MHz</td>
					<td id="alignRight">
						<?php
							$ram = 4060;
							echo number_format($ram, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>SSD</td>
					<td>Samsung 850 EVO 250GB</td>
					<td id="alignRight">
						<?php
							$ssd = 4740;
							echo number_format($ssd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>HDD</td>
					<td>Western Digital Caviar Blue 1TB</td>
					<td id="alignRight">
						<?php
							$hdd = 2350;
							echo number_format($hdd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Graphics Card</td>
					<td>Gigabyte GTX 1070 G1 Gaming</td>
					<td id="alignRight">
						<?php
							$gpu = 25000;
							echo number_format($gpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Power Supply</td>
					<td>Seasonic M12ii-520</td>
					<td id="alignRight">
						<?php
							$psu = 3460;
							echo number_format($psu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Case</td>
					<td>Fractal Design Define C</td>
					<td id="alignRight">
						<?php
							$case = 4660;
							echo number_format($case, 2);
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="alignRight">Total</td>
					<td id="alignRight">
						<?php
							$total = $cpu + $mobo + $cooler + $ram + $ssd + $hdd + $gpu + $psu + $case;
							echo number_format($total, 2);
						?>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="col-md-4">
		<h3><b>Ryzen 7 1800X</b></h3>
			<table class="table table-bordered">
				
				<tr>
					<th></th>
					<th>Name</th>
					<th>Price</th>
				</tr>
				
				<tr>
					<td>CPU</td>
					<td>Ryzen 7 1800X</td>
					<td id="alignRight">
						<?php
							$cpu = 27000;
							echo number_format($cpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>CPU Cooler</td>
					<td>Cryorig H7</td>
					<td id="alignRight">
						<?php
							$cooler = 1900;
							echo number_format($cooler, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Motherboard</td>
					<td>MSI X370 Gaming Pro Carbon</td>
					<td id="alignRight">
						<?php
							$mobo = 10690;
							echo number_format($mobo, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>2x4GB Kingston HyperX Fury 2400MHz</td>
					<td id="alignRight">
						<?php
							$ram = 4060;
							echo number_format($ram, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>SSD</td>
					<td>Samsung 850 EVO 250GB</td>
					<td id="alignRight">
						<?php
							$ssd = 4740;
							echo number_format($ssd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>HDD</td>
					<td>Western Digital Caviar Blue 1TB</td>
					<td id="alignRight">
						<?php
							$hdd = 2350;
							echo number_format($hdd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Graphics Card</td>
					<td>Gigabyte AORUS GTX 1070</td>
					<td id="alignRight">
						<?php
							$gpu = 25770;
							echo number_format($gpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Power Supply</td>
					<td>Seasonic M12ii-520</td>
					<td id="alignRight">
						<?php
							$psu = 3460;
							echo number_format($psu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Case</td>
					<td>NZXT S340 Elite</td>
					<td id="alignRight">
						<?php
							$case = 5500;
							echo number_format($case, 2);
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="alignRight">Total</td>
					<td id="alignRight">
						<?php
							$total = $cpu + $mobo + $cooler + $ram + $ssd + $hdd + $gpu + $psu + $case;
							echo number_format($total, 2);
						?>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="col-md-4">
		<h3><b>Ryzen 5 1600X</b></h3>
			<table class="table table-bordered">
				
				<tr>
					<th></th>
					<th>Name</th>
					<th>Price</th>
				</tr>
				
				<tr>
					<td>CPU</td>
					<td>Ryzen 5 1600X</td>
					<td id="alignRight">
						<?php
							$cpu = 12770;
							echo number_format($cpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>CPU Cooler</td>
					<td>Cryorig H7</td>
					<td id="alignRight">
						<?php
							$cooler = 1900;
							echo number_format($cooler, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Motherboard</td>
					<td>Asus Strix B350F Gaming</td>
					<td id="alignRight">
						<?php
							$mobo = 8450;
							echo number_format($mobo, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>2x4GB Kingston HyperX Fury 2400MHz</td>
					<td id="alignRight">
						<?php
							$ram = 4060;
							echo number_format($ram, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>SSD</td>
					<td>WD Green 120GB</td>
					<td id="alignRight">
						<?php
							$ssd = 2890;
							echo number_format($ssd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>HDD</td>
					<td>Western Digital Caviar Blue 1TB</td>
					<td id="alignRight">
						<?php
							$hdd = 2350;
							echo number_format($hdd, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Graphics Card</td>
					<td>Asus Strix GTX 1060 OC</td>
					<td id="alignRight">
						<?php
							$gpu = 18830;
							echo number_format($gpu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Power Supply</td>
					<td>Seasonic M12ii-520</td>
					<td id="alignRight">
						<?php
							$psu = 3460;
							echo number_format($psu, 2);
						?>
					</td>
				</tr>
				<tr>
					<td>Case</td>
					<td>NZXT S340</td>
					<td id="alignRight">
						<?php
							$case = 3950;
							echo number_format($case, 2);
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="alignRight">Total</td>
					<td id="alignRight">
						<?php
							$total = $cpu + $mobo + $cooler + $ram + $ssd + $hdd + $gpu + $psu + $case;
							echo number_format($total, 2);
						?>
					</td>
				</tr>
				
			</table>
		</div>
	</center>
	</body>
</html>