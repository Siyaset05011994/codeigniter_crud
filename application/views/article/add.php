<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		.error{
			padding: 3px;
			color: red;
		}
	</style>
</head>
<body>

<?php echo form_open_multipart('article/create'); ?>
	<input type="text" name="title" value="<?= set_value('title')?>" > <br>
		<?= form_error('title')?>
	<textarea name="content" rows="3" cols="80"><?= set_value('content')?></textarea><br>
		<?= form_error('content')?>
	<input type="file" name="file"> <br>
		<?= !empty($fileError) ? $fileError : false ?>
    <br>
	<input type="submit" value="Add">
</form>

</body>
</html>
