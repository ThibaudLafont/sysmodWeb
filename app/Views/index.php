<?php foreach($posts as $post): ?>
	<section style="width: 850px; margin: auto">
		<h3><?=$post->titre?>, <em><?=$post->dateAjout?></em></h3>
		<img src="<?=$post->image?>" style="display:block; margin: auto">
		<p><?= $post->extrait ?></p>
		<nav>
			<a href="<?=$post->url?>">Lire <?=$post->titre?></a>
		</nav>
	</section>
<?php endforeach;?>