<div class="title">
	<h2>Réalisations</h2>
	<h3>Projets</h3>
</div>

<?php
/* pour récupérer les projets */
$args = array(
	'post_type' => 'projet',
	'orderby' => 'date',
    'order' => 'DESC'
);
$query = new WP_Query($args);
?>
<ul class="realisations-projet">
	<?php if ($query->have_posts()) : ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	<li>
		<article>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_post_thumbnail(); ?>">

			<h4 class="placement-title hidden"><?php the_title(); ?></h4>
			<p class="placement-p hidden"><?php echo get_the_excerpt(); ?></p>
		</article>
	</li>
	<?php endwhile; ?>
	<?php else : ?>
	<p>Il n'y as pas de projet réalisé</p>
	<?php endif; ?>
</ul>