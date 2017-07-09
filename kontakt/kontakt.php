<?php
	if($_GET['id']=="0"){
		$mail_ss="sl@dathe-gymnasium.cidsnet.de";
		$name = "Schulleiterin";
	}else if($_GET['id']=="1"){
		$mail_ss="ssl@dathe-gymnasium.cidsnet.de";
		$name = "stellv. Schulleiterin";
	}else if($_GET['id']=="2"){
		$mail_ss="homepage@dathe-gymnasium.cidsnet.de";
		$name = "Homepage AG";
	}else if($_GET['id']=="3"){
		$mail_ss="paeko@dathe-gymnasium.cidsnet.de";
		$name = "Fr. Gruska";
	}else{
		header("Location: http://dathe-gymnasium.de");
		echo "<script>window.location.replace('http://dathe-gymnasium.de')</script>";
		die();	
	}
?>
<header>
	<span class="titel">Kontaktformular</span>
	<br>
	<span>Sie müssen alle Felder ausfüllen!</span>
	<br>
	<br>
</header>
<section id="Formular">
	<form action="?sect=./kontakt/senden" method="POST">
		<label>An:
			<input type="input" name="an" value="<?php echo $name; ?>" readonly style="background-color: darkgray">
		</label>
		<label>Ihr Name:
			<input type="input" name="name" value="">
		</label>
		<label>Ihre Mail Adresse:
			<input type="input" name="sender_email" value="">
		</label>
		<label>Betreff:
			<input type="input" name="betreff" value="">
		</label>
		<label>Inhalt:
			<textarea name="inhalt" value="" cols="30" rows="10"></textarea>
		</label>
		<input id="senden" type="submit" value="Senden">
		<input type="hidden" name="email" value="<?php echo $mail_ss; ?>">
	</form>
</section>