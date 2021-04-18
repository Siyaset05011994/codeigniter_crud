<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<table style="width:100%" border>
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>content</th>
			<th>file</th>
			<th>view count</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>status</th>
			<th>Operations</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($articles as $article): ?>
		<tr>
			<td><?= $article->id ?></td>
			<td><?= $article->title ?></td>
			<td><?= $article->content ?></td>
			<td><?= $article->file ?></td>
			<td><?= $article->view_count ?></td>
			<td><?= $article->created_at ?></td>
			<td><?= $article->updated_at ?></td>
			<td><?= $article->status ?></td>
			<td>
				<a href="<?= base_url('article/update/').$article->id?>">Edit</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>

</table>

</body>
</html>
