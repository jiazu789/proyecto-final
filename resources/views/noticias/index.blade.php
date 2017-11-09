<html>
<head>
	<title>Noticias</title>
</head>
<h1>Noticias recientes</h1>
<body>
<ul>
@foreach($noticias as $noticia)
<li>
	<a href="/notice/{{$noticia->id}}">
	{{$noticia->titulo}}</a>

</li>

@endforeach
<a href="/home">Volver</a>

</ul>
</body>
</html>