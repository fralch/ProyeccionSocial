<h1>Hola mundo cakephp</h1>
<?php foreach ($noticias as $noticia): ?>
	<p><?php echo $noticia['Noticia']['nombre']?></p>
	<p><?php echo $noticia['Noticia']['contenido']?></p>
	<p><?php echo $noticia['Noticia']['fecha']?></p>
<?php endforeach;?>