<html>
<head>
	<title>Noticias</title>
</head>
<h1>Noticias recientes</h1>
<body>
<ul>
<?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
	<a href="/notice/<?php echo e($noticia->id); ?>">
	<?php echo e($noticia->titulo); ?></a>

</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a href="/home">Volver</a>

</ul>
</body>
</html>