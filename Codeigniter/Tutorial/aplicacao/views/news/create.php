<h2><?= $title; ?></h2>
<?= validation_errors(); ?>
<?= form_open('news/create'); ?>
	<label for='title'> Título </label>
	<input type='input' name='title' /> <br />
	
	<label for='text'> Texto </label>
	<input type='input' name='text' /> <br />
	
	<input type='submit' name='submit' value='Criar um novo item' />
</form>	