<h2><?= $title;?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
	<label for='title'> Título </label>
	<input type='text' name='title' /> 
	<br />
	
	<label for='text'> Texto </label>
	<textarea name='text'></textarea>
	<br />
	
	<input type='submit' name='submit' value='Criar um novo item' />
</form>	