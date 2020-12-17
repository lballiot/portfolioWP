<?php get_header(); ?>

<div class="single-projet">

	<div class="title">
		<h2>PROJET</h2>
		<h3><?php the_title(); ?></h3>
	</div>

	<!-- image project -->
	<div class="single-projet-description">
		<div class="single-projet-img">
			<?php if(has_post_thumbnail()) : ?>
			<img class="single-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
			<?php endif; ?>
		</div>
		<div class="single-projet-text">
			<!-- bouton lien -->
			<?php if (get_field('lien_projet')) : ?>
			<a href="<?php the_field('lien_projet'); ?>" target="_blank">
				<button>Aller sur le site</button>
			</a>
			<?php endif; ?>
			<!-- explication du projet -->
			<p>
				<?php the_content(); ?>
			</p>
			<!-- infos projets (type & date) -->
			<h5>Informations projet</h5>
			<?php 
	$myterm = get_the_terms(get_the_ID( ), 'type_site');
	if ($myterm) : 
	$tab = $myterm[0]->to_array();
?>

			<p>Type de site : <?php echo $tab['name']; ?></p>
			<?php endif; ?>
			<p>Année : <?php echo the_field('date'); ?></p>

			<!-- boucle tags -->

			<div class="single-projet-tags">

				<?php 
	$myTags = get_the_terms(get_the_ID( ), 'tag_langage');
	if ($myTags) :
	foreach ($myTags as $myTag) :
		$langage = $myTag->to_array();?>
				<button><?php echo ($langage['name']); ?></button>

				<?php endforeach;
endif;?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>