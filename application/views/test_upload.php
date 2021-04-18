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

<?php echo form_open_multipart('article/testUpload'); ?>
	<input type="file" name="file"> <br><br>
    <?php print_r($error) ?>
	<input type="submit" value="Add">
</form>

</body>
</html>
