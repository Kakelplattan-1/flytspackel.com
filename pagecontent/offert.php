		<?php
			include "include/topp.php";
		?>	
	<?php
		if(isset($_GET['sent']))
		{
			$sent = $_GET['sent'];
			if($sent == 1)
			{
			// mail &auml;r skickat!
			echo '
			<div class="row">	
			<div class="center-block">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="produkter">
			<h4>
			Din offertf&ouml;rfr&aring;gan &auml;r skickad! Vi kommer att bearbeta dina uppgifter och &aring;terkommer s&aring; fort som m&ouml;jligt.
			</h4>
			<br />
			<h4>
				Support p&aring; 054-18 81 80 mellan 7 - 21 (&auml;ven l&ouml;rdag & s&ouml;ndag). 
			</h4>
			<h4>	
				<a href="https://www.kakelplattan.se/index.php?menu=bestalla">
					Du f&aring;r &auml;ven skriva till oss, klicka h&auml;r.
				</a>
			</h4>
			<br />
			<a href="https://www.kakelplattan.se/index.php?menu=offert">			
			<h4>
					Har du flera rum som du vill ha offert p&aring;, klicka h&auml;r. 
			</h4>
			</a>					
			<h4>			
			<br />
					Vi g&ouml;r en offert per rum och sist en sammanst&auml;llning med frakter och eventuella samordningsvinster (ex ist&auml;llet f&ouml;r 2 dukar p&aring; 15 kvm s&aring; g&ouml;r vi en p&aring; 30 kvm).
			</h4>
			</a>	
			<h4>
			<a href="https://www.kakelplattan.se/index.php">				
				Vill du komma till f&ouml;rstasidan klickar du h&auml;r.
			</a>
			</h4>
			</div>	
			</div>
			</div>
			</div>';
			}
			else
			{
			echo "<td valign=top>";
			echo "<p class=InfoText>Din offertf&ouml;rfr&aring;gan skickades inte, fyll i mera uppgifter. Har du problem s&aring; ring oss p&aring; 054-18 81 80, vi telefontider mellan 7-21 varje dag (&auml;ven l&ouml;rdag & s&ouml;ndag).</p>";
			echo "</td>";
			}
		}
		else
		{
	?>
	<div class="container">
		<div class="row welcome text-center">

				<h1>Offert p&aring; ditt projekt.</h1>			
					<FORM action="include/offertmail.php" method="post">
					<br /><h3>H&auml;r kan du fylla i en offertf&ouml;rfr&aring;gan.</h3>
					<h5>F&auml;lt markerade med * &auml;r obligatoriska.<br /><br />
					Offertf&ouml;rfr&aring;gan g&auml;llande:<br />
					

			<div class="form-check">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="optradio" value="badrum" checked>Badrum
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="radio2">
					<input type="radio" class="form-check-input" id="radio2" name="optradio" value="tvattstuga">Tvättstuga
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="radio3">
					<input type="radio" class="form-check-input" id="radio3" name="optradio" value="kok">Köksgolv
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="radio4">
					<input type="radio" class="form-check-input" id="radio4" name="optradio" value="kallare">Källare
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="radio5">
					<input type="radio" class="form-check-input" id="radio5" name="optradio" value="garage">Garage
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="radio6">
					<input type="radio" class="form-check-input" id="radio6" name="optradio" value="ovriga">Övriga ytor
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>		
					
					
					
					
					
					
				
					<table border="0">		
					<tr><td>Namn:*</td><td><input type="text" name="namn" size="40" maxlength="40" /></td></tr>
					<tr><td>Adress:*</td><td><input type="text" name="adress" size="40" maxlength="40" /></td></tr>
					<tr><td>Postnummer:*</td><td><input type="text" name="postnr" size="40" maxlength="40" /></td></tr>
					<tr><td>Postort:*</td><td><input type="text" name="postort" size="40" maxlength="40" /></td></tr>
					<tr><td>Telefon:*</td><td><input type="text" name="telefon" size="40" maxlength="40" /></td></tr>
					<tr><td>E-post:*</td><td><input type="text" name="email" size="40" maxlength="40" /></td></tr>
					</table> 	
					<hr>
					
					
					
					
					
					
					
					
					<table>
					<tr><td>Alla m&aring;tt i meter:</td></tr>
					<tr><td>H&ouml;jd:</td><td><input type="text" name="hojd" size="30" maxlength="30" /></td></tr>
					<tr><td>Bredd(golvyta):</td><td><input type="text" name="bredd_golv" size="30" maxlength="30" /></td></tr>
					<tr><td>L&auml;ngd(golvyta):</td><td><input type="text" name="langd_golv" size="30" maxlength="30" /></td></tr>
					</table> 		
					<hr>
					<table>
					<tr><td>Antal handfat (det &auml;r r&ouml;rgenomf&ouml;ringar vi &auml;r ute efter):</td>
					<td>
					<select name="handfat">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>						
					</select>
					</td>
					</tr>
					<tr><td>Antal golvbrunnar:</td>
					<td>
					<select name="golvbrunn">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
					</select>
					</td>
					</tr>
					<tr><td>Antal d&ouml;rrar:</td>
					<td>
					<select name="dorrar">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					</td>
					</tr>
					<tr><td>Bredd(d&ouml;rr):</td><td><input type="text" name="dorrar_bredd" size="30" maxlength="30" /></td></tr>
					<br />
					<tr><td>H&ouml;jd(d&ouml;rr):</td><td><input type="text" name="dorrar_hojd" size="30" maxlength="30" /></td></tr>
					<br />
					</table> 		
					<hr>
					<table>
					<tr><td>Antal f&ouml;nster:</td>
					<td>
					<select name="fonster">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					</td>
					</tr>
					<tr><td>Bredd(f&ouml;nster):</td><td><input type="text" name="fonster_bredd" size="30" maxlength="30" /></td></tr>
					<tr><td>H&ouml;jd(f&ouml;nster):</td><td><input type="text" name="fonster_hojd" size="30" maxlength="30" /></td></tr>
					</table>
					<hr>	
					<table>
					<tr><td>R&ouml;rgenomf&ouml;ringar i v&auml;gg och golv:</td>
					<td>
					<select name="rorgenomforing">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>	
						<option value="11">11</option>
						<option value="12">12</option>	
						<option value="13">13</option>	
						<option value="14">14</option>
						<option value="15">15</option>						
					</select>
					</td></tr>
					<tr><td>Toaletter (det &auml;r r&ouml;rgenomf&ouml;ringar vi &auml;r ute efter):</td>
					<td>	  
					<select name="toaletter">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
					</td></tr>
					<tr><td>Antal innerh&ouml;rn (se fig 1)</td>
					<td>
					<select name="innerhorn">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>			
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>	
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>			
					</select>
					</td></tr>
					<tr><td>Antal ytterh&ouml;rn (se fig 1)</td>
					<td>
					<select name="ytterhorn">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>							
					</select>
					</td></tr>
					</table>
					<hr>
					Storlek p&aring; v&auml;ggplattor, v&auml;lj det som ligger n&auml;rmast. F&ouml;r ber&auml;kning av fix och fog.<br />
					<input type="radio" name="vaggplattor" value="Mindre 15x15" />Mindre &auml;n 15cm x 15cm<br />
					<input type="radio" name="vaggplattor" value="15x15 till 30x30" />15cm x 15cm till 30cm x 30cm<br />
					<input type="radio" name="vaggplattor" value="St&ouml;rre &auml;n 30x30" />st&ouml;rre &auml;n 30cm x 30cm<br />								
					<br />
					Storlek p&aring; golvplattor. V&auml;lj det som ligger n&auml;rmast.<br />
					<input type="radio" name="golvplattor" value="Mindre 15x15" />Mindre &auml;n 15cm x 15cm<br />					
					<input type="radio" name="golvplattor" value="15x15 till 30x30" />15cm x 15cm till 30cm x 30cm<br />					
					<input type="radio" name="golvplattor" value="St&ouml;rre &auml;n 30x30" />st&ouml;rre &auml;n 30cm x 30cm<br />				
					<hr>					
					&Ouml;nskar ni l&auml;gga in el-golvv&auml;rme?<br />
					<INPUT type="radio" name="golvvarme" value="Ja">Ja<br />
					<td width="82"><INPUT type="radio" name="golvvarme" value="Nej">Nej
					<br /><br />
					&Ouml;nskar ni l&auml;gga in vattenburen-golvv&auml;rme?<br />
					<INPUT type="radio" name="vattengolvvarme" value="Ja">Ja<br />
					<INPUT type="radio" name="vattengolvvarme" value="Nej">Nej<br /><br />

					&Auml;r v&auml;ggen av betong?<br />
					<INPUT type="radio" name="vaggbetong" value="Ja">Ja<br />
					<INPUT type="radio" name="vaggbetong" value="Nej">Nej<br />
					<br />
					&Auml;r golvet av betong?<br />
					<input type="radio" name="golvbetong" value="Ja">Ja<br />
					<input type="radio" name="golvbetong" value="Nej">Nej<br /><br />
					<hr>
					<label>&Ouml;vrigt<br />
					<textarea name="text" id="text" cols="45" rows="5"></textarea>
					</label><br /><br />
					<br />
					<input type=hidden name=site value="index.php">
					<br />
					<input type=hidden name=ipnumber value="<?php echo $_SERVER['REMOTE_ADDR']?>">
					<INPUT type="submit" value="Skicka"> 		
					<INPUT type="reset" value="Rensa">
					</h5>
				</FORM>							
</div></div>
		<div class="center-block">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">		
			<div class="btn-group">
						<a href="https://www.kakelplattan.se/index.php?menu=offert" title="Offert p&aring; flytspackel.">							
							<button type="button" class="btn btn-danger btn-lg btn-block">
								<h2>
									OFFERT
								</h2>
							</button>
						</a>
							<img src="https://www.kakelplattan.se/bild/innerytter.gif" name="Badrum" border="0" id="Badrum" class="img-responsive" />
								<p class="text-left">
									- Figur 1.
								</p>	
			</div>	
		</div>
		</div>	
	<!-- row slutar h&auml;r -->	
<?php
	}
?>
<!-- Fot -->
		<?php
			include "include/fot.php";
		?>	