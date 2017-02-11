<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{URL::route('language-chooser')}}" method="post">
		<select name="locale" id="">
			<option value="en">English</option>
			<option value="ru" {{Lang::locale()==="ru"?'selected':""}}>Русский</option>
			<option value="ua" {{Lang::locale()==="ua"?'selected':""}}>Укр</option>
			{{csrf_field()}}
		</select>
		<input type="submit" value="OK">
	</form>
	<h1>{{trans('homeindex.title')}}</h1>
	<p>{{trans('homeindex.text1')}}</p>
</body>
</html>