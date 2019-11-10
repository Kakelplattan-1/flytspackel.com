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
			Din kontaktfr&aring;gan &auml;r skickad! Vi kommer att bearbeta dina uppgifter och &aring;terkommer s&aring; fort som m&ouml;jligt.
			</h4>
			<br />
			<h4>
				Support p&aring; 054-18 81 80 mellan 7 - 21 (&auml;ven l&ouml;rdag & s&ouml;ndag).
			</h4>
			<br />

			<h4>
			<a href="index.php">
				Vill du komma till f&ouml;rstasidan klickar du h&auml;r.
			</a>
			</div>
			</div>
			</div>
			</div>';
			}
			else
			{
			echo "<td valign=top>";
			echo "<p class=InfoText>Din fr&aring;gan skickades inte, fyll i mera uppgifter. Har du problem s&aring; ring oss p&aring; 054-18 81 80, vi telefontider mellan 7-21 varje dag (&auml;ven l&ouml;rdag & s&ouml;ndag).</p>";
			echo "</td>";
			}
		}
		else
		{
	?>

	<section class="container">
		<div class="text-center">
			<h1>Kontakta oss</h1>
		</div>
		<hr>
		<p>
			<b>Förfrågan gällande:</b>
		</p>


		<form action="include/offertmail.php" method="post" class="needs-validation" novalidate>
					<div class="form-check offert-radio">
						<label class="form-check-label" for="radio1">
							<input type="radio" class="form-check-input" name="typ" value="Badrum">Badrum
						</label>
					</div>
					<div class="form-check offert-radio">
						<label class="form-check-label" for="radio2">
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
			<hr />
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
					  <input type="email" class="form-control" id="email" placeholder="E-post" name="email" required>
					  <div class="valid-feedback">Valid.</div>
					  <div class="invalid-feedback">Please fill out this field.</div>
					</div>
			<hr />
					<div class="form-group">
					  <label for="uname">&Ouml;vrigt som du tror är av intresse:</label>
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

			</form>
		</section>

<?php
	}
?>
<?php include 'include/footer.php';?>
