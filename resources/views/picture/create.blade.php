<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('picture/')}}" method="post" enctype="multipart/form-data">
		<input type="file" name="ipath">
		<input type="submit" name="upload" value="upload">
		{{csrf_field()}}
	</form>
</body>
</html>
