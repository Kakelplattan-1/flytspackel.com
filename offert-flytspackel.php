<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>

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

<section class="container">
	<div class="text-center">
		<h1>Offert på ert projekt</h1>
	</div>
	<hr>
	<p>
		Här kan ni fylla i offertförfrågan
		<br>
		Fält markerade med * är obligatoriska
		<br>
		<br>
		<b>Offertförfrågan gällande:</b>
	</p>

	<FORM action="include/offertmail.php" method="post" class="needs-validation" novalidate>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" name="typ" value="Badrum">Badrum
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" id="tvattstuga" name="typ" value="Tv&auml;ttstuga">Tvättstuga
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio3">
					<input type="radio" class="form-check-input" id="kok" name="typ" value="K&ouml;k">Köksgolv
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio4">
					<input type="radio" class="form-check-input" id="kallare" name="typ" value="K&auml;llare">Källare
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio5">
					<input type="radio" class="form-check-input" id="garage" name="typ" value="Garage">Garage
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio6">
					<input type="radio" class="form-check-input" id="ovriga" name="typ" value="&Ouml;vriga ytor">Övriga ytor
				</label>
			</div>
			<hr>
			<div class="form-group">
			  <label for="uname">Namn:</label>
			  <input type="text" class="form-control" id="namn" placeholder="Skriv namn" name="namn" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Adress:</label>
			  <input type="text" class="form-control" id="adress" placeholder="Gatuadress" name="adress" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Postadress:</label>
			  <input type="text" class="form-control" id="postnr" placeholder="Postnummer och ort" name="postnr" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Telefon:</label>
			  <input type="text" class="form-control" id="telefon" placeholder="Telefon" name="telefon" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">E-post:</label>
			  <input type="text" class="form-control" id="email" placeholder="Telefon" name="email" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember" required> I agree on RDPD.
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Check this checkbox to continue.</div>
			  </label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Längd på rummet:</label>
			  <input type="text" class="form-control" id="langd_golv" placeholder="Längd på rummet" name="langd_golv">
			</div>
			<div class="form-group">
			  <label for="uname">Bredd på rummet:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Längd på rummet" name="bredd_golv">
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-group">
			  <label for="uname">Egen beräkning på golvarean:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Uträknad golvarea" name="golvarea">
			</div>
	<hr>
			Ska du ha vattenburen golvvärme?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Ja">Ja
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Nej">Nej
				</label>
			</div>
			<hr>
			Ska du ha elektrisk golvvärme?
			<hr>
			Vilket underlag har du idag?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvbetong" value="Ja">Betong / flytspackel
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvspanskiva" value="Nej">Spånskiva / trägolv
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvannat" value="Nej">Annat. Skiv detta i övrig text.
				</label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Övrigt som du tror är av intresse:</label>
			  <textarea rows="3" class="form-control" id="text" placeholder="Skriv allt du tror vi behöver veta för offerten" name="text"></textarea>
			</div>

	<script>
	// Disable form submissions if there are invalid fields. Kolla fel.
	(function() {
	'use strict';
	window.addEventListener('load', function() {
	// Get the forms we want to add validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
	  form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		  event.preventDefault();
		  event.stopPropagation();
		}
		form.classList.add('was-validated');
	  }, false);
	});
	}, false);
	})();
	</script>

	<input class="btn btn-primary" type="submit" value="Skicka">
	<input class="btn btn-secondary" type="reset" value="Rensa">
	</FORM>
</section>

<?php
	}
?>

<?php include 'include/footer.php'; ?>
<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>

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

<section class="container">
	<div class="text-center">
		<h1>Offert på ert projekt</h1>
	</div>
	<hr>
	<p>
		Här kan ni fylla i offertförfrågan
		<br>
		Fält markerade med * är obligatoriska
		<br>
		<br>
		<b>Offertförfrågan gällande:</b>
	</p>

	<FORM action="include/offertmail.php" method="post" class="needs-validation" novalidate>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" name="typ" value="Badrum">Badrum
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" id="tvattstuga" name="typ" value="Tv&auml;ttstuga">Tvättstuga
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio3">
					<input type="radio" class="form-check-input" id="kok" name="typ" value="K&ouml;k">Köksgolv
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio4">
					<input type="radio" class="form-check-input" id="kallare" name="typ" value="K&auml;llare">Källare
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio5">
					<input type="radio" class="form-check-input" id="garage" name="typ" value="Garage">Garage
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio6">
					<input type="radio" class="form-check-input" id="ovriga" name="typ" value="&Ouml;vriga ytor">Övriga ytor
				</label>
			</div>
			<hr>
			<div class="form-group">
			  <label for="uname">Namn:</label>
			  <input type="text" class="form-control" id="namn" placeholder="Skriv namn" name="namn" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Adress:</label>
			  <input type="text" class="form-control" id="adress" placeholder="Gatuadress" name="adress" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Postadress:</label>
			  <input type="text" class="form-control" id="postnr" placeholder="Postnummer och ort" name="postnr" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Telefon:</label>
			  <input type="text" class="form-control" id="telefon" placeholder="Telefon" name="telefon" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">E-post:</label>
			  <input type="text" class="form-control" id="email" placeholder="Telefon" name="email" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember" required> I agree on RDPD.
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Check this checkbox to continue.</div>
			  </label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Längd på rummet:</label>
			  <input type="text" class="form-control" id="langd_golv" placeholder="Längd på rummet" name="langd_golv">
			</div>
			<div class="form-group">
			  <label for="uname">Bredd på rummet:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Längd på rummet" name="bredd_golv">
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-group">
			  <label for="uname">Egen beräkning på golvarean:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Uträknad golvarea" name="golvarea">
			</div>
	<hr>
			Ska du ha vattenburen golvvärme?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Ja">Ja
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Nej">Nej
				</label>
			</div>
			<hr>
			Ska du ha elektrisk golvvärme?
			<hr>
			Vilket underlag har du idag?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvbetong" value="Ja">Betong / flytspackel
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvspanskiva" value="Nej">Spånskiva / trägolv
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvannat" value="Nej">Annat. Skiv detta i övrig text.
				</label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Övrigt som du tror är av intresse:</label>
			  <textarea rows="3" class="form-control" id="text" placeholder="Skriv allt du tror vi behöver veta för offerten" name="text"></textarea>
			</div>

	<script>
	// Disable form submissions if there are invalid fields. Kolla fel.
	(function() {
	'use strict';
	window.addEventListener('load', function() {
	// Get the forms we want to add validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
	  form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		  event.preventDefault();
		  event.stopPropagation();
		}
		form.classList.add('was-validated');
	  }, false);
	});
	}, false);
	})();
	</script>

	<input class="btn btn-primary" type="submit" value="Skicka">
	<input class="btn btn-secondary" type="reset" value="Rensa">
	</FORM>
</section>

<?php
	}
?>

<?php include 'include/footer.php'; ?>
<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>

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

<section class="container">
	<div class="text-center">
		<h1>Offert på ert projekt</h1>
	</div>
	<hr>
	<p>
		Här kan ni fylla i offertförfrågan
		<br>
		Fält markerade med * är obligatoriska
		<br>
		<br>
		<b>Offertförfrågan gällande:</b>
	</p>

	<FORM action="include/offertmail.php" method="post" class="needs-validation" novalidate>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" name="typ" value="Badrum">Badrum
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" id="tvattstuga" name="typ" value="Tv&auml;ttstuga">Tvättstuga
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio3">
					<input type="radio" class="form-check-input" id="kok" name="typ" value="K&ouml;k">Köksgolv
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio4">
					<input type="radio" class="form-check-input" id="kallare" name="typ" value="K&auml;llare">Källare
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio5">
					<input type="radio" class="form-check-input" id="garage" name="typ" value="Garage">Garage
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio6">
					<input type="radio" class="form-check-input" id="ovriga" name="typ" value="&Ouml;vriga ytor">Övriga ytor
				</label>
			</div>
			<hr>
			<div class="form-group">
			  <label for="uname">Namn:</label>
			  <input type="text" class="form-control" id="namn" placeholder="Skriv namn" name="namn" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Adress:</label>
			  <input type="text" class="form-control" id="adress" placeholder="Gatuadress" name="adress" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Postadress:</label>
			  <input type="text" class="form-control" id="postnr" placeholder="Postnummer och ort" name="postnr" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Telefon:</label>
			  <input type="text" class="form-control" id="telefon" placeholder="Telefon" name="telefon" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">E-post:</label>
			  <input type="text" class="form-control" id="email" placeholder="Telefon" name="email" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember" required> I agree on RDPD.
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Check this checkbox to continue.</div>
			  </label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Längd på rummet:</label>
			  <input type="text" class="form-control" id="langd_golv" placeholder="Längd på rummet" name="langd_golv">
			</div>
			<div class="form-group">
			  <label for="uname">Bredd på rummet:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Längd på rummet" name="bredd_golv">
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-group">
			  <label for="uname">Egen beräkning på golvarean:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Uträknad golvarea" name="golvarea">
			</div>
	<hr>
			Ska du ha vattenburen golvvärme?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Ja">Ja
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Nej">Nej
				</label>
			</div>
			<hr>
			Ska du ha elektrisk golvvärme?
			<hr>
			Vilket underlag har du idag?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvbetong" value="Ja">Betong / flytspackel
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvspanskiva" value="Nej">Spånskiva / trägolv
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvannat" value="Nej">Annat. Skiv detta i övrig text.
				</label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Övrigt som du tror är av intresse:</label>
			  <textarea rows="3" class="form-control" id="text" placeholder="Skriv allt du tror vi behöver veta för offerten" name="text"></textarea>
			</div>

	<script>
	// Disable form submissions if there are invalid fields. Kolla fel.
	(function() {
	'use strict';
	window.addEventListener('load', function() {
	// Get the forms we want to add validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
	  form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		  event.preventDefault();
		  event.stopPropagation();
		}
		form.classList.add('was-validated');
	  }, false);
	});
	}, false);
	})();
	</script>

	<input class="btn btn-primary" type="submit" value="Skicka">
	<input class="btn btn-secondary" type="reset" value="Rensa">
	</FORM>
</section>

<?php
	}
?>

<?php include 'include/footer.php'; ?>
<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>

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

<section class="container">
	<div class="text-center">
		<h1>Offert på ert projekt</h1>
	</div>
	<hr>
	<p>
		Här kan ni fylla i offertförfrågan
		<br>
		Fält markerade med * är obligatoriska
		<br>
		<br>
		<b>Offertförfrågan gällande:</b>
	</p>

	<FORM action="include/offertmail.php" method="post" class="needs-validation" novalidate>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" name="typ" value="Badrum">Badrum
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="typ">
					<input type="radio" class="form-check-input" id="tvattstuga" name="typ" value="Tv&auml;ttstuga">Tvättstuga
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio3">
					<input type="radio" class="form-check-input" id="kok" name="typ" value="K&ouml;k">Köksgolv
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio4">
					<input type="radio" class="form-check-input" id="kallare" name="typ" value="K&auml;llare">Källare
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio5">
					<input type="radio" class="form-check-input" id="garage" name="typ" value="Garage">Garage
				</label>
			</div>
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio6">
					<input type="radio" class="form-check-input" id="ovriga" name="typ" value="&Ouml;vriga ytor">Övriga ytor
				</label>
			</div>
			<hr>
			<div class="form-group">
			  <label for="uname">Namn:</label>
			  <input type="text" class="form-control" id="namn" placeholder="Skriv namn" name="namn" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Adress:</label>
			  <input type="text" class="form-control" id="adress" placeholder="Gatuadress" name="adress" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Postadress:</label>
			  <input type="text" class="form-control" id="postnr" placeholder="Postnummer och ort" name="postnr" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">Telefon:</label>
			  <input type="text" class="form-control" id="telefon" placeholder="Telefon" name="telefon" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname">E-post:</label>
			  <input type="text" class="form-control" id="email" placeholder="Telefon" name="email" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember" required> I agree on RDPD.
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Check this checkbox to continue.</div>
			  </label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Längd på rummet:</label>
			  <input type="text" class="form-control" id="langd_golv" placeholder="Längd på rummet" name="langd_golv">
			</div>
			<div class="form-group">
			  <label for="uname">Bredd på rummet:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Längd på rummet" name="bredd_golv">
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-group">
			  <label for="uname">Egen beräkning på golvarean:</label>
			  <input type="text" class="form-control" id="bredd_golv" placeholder="Uträknad golvarea" name="golvarea">
			</div>
	<hr>
			Ska du ha vattenburen golvvärme?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Ja">Ja
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="vattengolvvarme" value="Nej">Nej
				</label>
			</div>
			<hr>
			Ska du ha elektrisk golvvärme?
			<hr>
			Vilket underlag har du idag?
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvbetong" value="Ja">Betong / flytspackel
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvspanskiva" value="Nej">Spånskiva / trägolv
				</label>
			</div>
	<!-- Ej deklarerad i offertmall.php-->
			<div class="form-check offert-radio">
				<label class="form-check-label" for="radio1">
					<input type="radio" class="form-check-input" id="radio1" name="golvannat" value="Nej">Annat. Skiv detta i övrig text.
				</label>
			</div>
	<hr>
			<div class="form-group">
			  <label for="uname">Övrigt som du tror är av intresse:</label>
			  <textarea rows="3" class="form-control" id="text" placeholder="Skriv allt du tror vi behöver veta för offerten" name="text"></textarea>
			</div>

	<script>
	// Disable form submissions if there are invalid fields. Kolla fel.
	(function() {
	'use strict';
	window.addEventListener('load', function() {
	// Get the forms we want to add validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
	  form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		  event.preventDefault();
		  event.stopPropagation();
		}
		form.classList.add('was-validated');
	  }, false);
	});
	}, false);
	})();
	</script>

	<input class="btn btn-primary" type="submit" value="Skicka">
	<input class="btn btn-secondary" type="reset" value="Rensa">
	</FORM>
</section>

<?php
	}
?>

<?php include 'include/footer.php'; ?>
