<fieldset>
	<legend>Adicionar foto</legend>

	<form method="post" enctype="multipart/form-data">
		Titulo: <br/>      

		<input type="text" name="titulo"/> </br></br>

		<input type="file" name="arquivo"/> </br></br>

		<input type="submit" value="enviar arquivo"/>		

	</form>

</fieldset>

</br></br>

<?php foreach ($fotos as $foto): ?>

 <img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300px" border="0" /><br/>
	<?php echo $foto['titulo'];  ?>
	<hr/>
<?php endforeach;?>

