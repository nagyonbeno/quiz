<?php include 'partials/header.php'; ?>

	<form action="" method="post">	

		<?php foreach($kerdesek as $row) : ?>
		
			<?php array_push($id,$row['kerdes_id'])?>
			<p><?=$row['kerdes_id']?></p>
			<h3><?=$row['kerdes_cim']?></h3>
			<p><?=$row['kerdes_szoveg']?></p>

		<?php endforeach; ?>

		<input type="submit" name="submit" value="Elküld!" />

	</form>


	

<?php include 'partials/footer.php'; ?>