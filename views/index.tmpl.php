<?php include 'partials/header.php'; ?>

	<form action="" method="post">

		<?php foreach($kerdesek as $row) : ?>
			
			<?php $kerdesekek = array();
			 array_push($kerdesekek, $row['kerdes_id']);
			 print_r($kerdesekek);?>
			<h3><?=$row['kerdes_cim']?></h3>
			<p><?=$row['kerdes_szoveg']?></p>



		<?php endforeach; ?>


		<input type="submit" value="Elküld!" />
	</form>

	<?php if($_POST) echo "<p>Sikeresen hozzáadva!</p>" ?>
	
	<p>kérdések száma:<?=$kerdesek_szama?></p>
	<?php print_r($valasz_szoveg);?><br />

<?php include 'partials/footer.php'; ?>