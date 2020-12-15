<?php get_header(); ?>

<div class="title">
	<h2>PROJET</h2>
	<h3><?php the_title(); ?></h3>
</div>



<a href="<?php the_field('lien_projet'); ?>" target="_blank">
	<button>Aller sur le site</button>
</a>
<!-- explication du projet -->

<!-- infos projets (type & date) -->

<!-- boucle tags -->

<?php get_footer(); ?>