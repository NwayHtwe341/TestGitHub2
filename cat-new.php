<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title>Add Book</title>
	<style>
	form label{
		display:block;
		margin-top:8px;
	}
	</style>
</head>
<body>
	<h1>New Book</h1>
	<form action="cat-add.php" method="post">
		<label for="name" >Category Name</label>
		<input type="text" name="name" id="name">
		<label for="remark">Remark</label>
		<textarea name="remark" id="remark" rows="3" cols="30"></textarea>
		<br><br>
		<input type="submit" value="Add Category">
	</form>
</body>
</html>