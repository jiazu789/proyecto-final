<html>
<head>
	<title>Publicar</title>
</head>
<h1>Publicar Noticias</h1>
<body>
<form action="/notice" method="POST" role="form">


<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="">Titulo</label>
<input type="text" class="form-controler" name="titulo" placeholder="Titulo">
</div>

<div class="form-group">
<label for="">Contenido</label>
<textarea name="texto" class="form-control" rows="3" placeholder="Contenido de noticia"></textarea>
</div>

<div class="form-group">
<label for="">URL:</label>
<input type="text" class="form-controler" name="url" placeholder="URL:https://www.youtube.com">
</div>
<button type="submit" class="btn btn-primary">submit</button>
<a href="/notice">Volver</a>
</form>
</body>
</html>