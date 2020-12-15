	<div class="title">
		<h2>Compétences</h2>
		<h3>Savoir-faire</h3>
	</div>
	<?php 
		$args = array(
			'post_type' => 'competence',
		);
		$query = new WP_Query($args);
	?>

	<?php
	//Stocker les taxonomies dans un tableau
	
	/**
	* Renvoie liste des taxonomies
	* @link https://developer.wordpress.org/reference/functions/get_terms/
	*/
	$terms = get_terms( array(
		'taxonomy' => 'categorie_dev',
	) );
	if( $terms ): 
	$tabTerms = array();
	
	foreach( $terms as $term ):
		$tabTerms[] = $term->name;
	endforeach;
	endif;
	?>

	<ul class="competence-list">
		<?php for ($i=0; $i < count($tabTerms); $i++) : ?>
		<li>
			<h4><?php echo $tabTerms[$i] ?></h4>
			<div class="separator"></div>
			<div class="competence-icon">

				<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php 
					$myterm = get_the_terms(get_the_ID( ), 'categorie_dev');
					$tab = $myterm[0]->to_array();
					if ($tab['name'] === $tabTerms[$i]) : 
						if(has_post_thumbnail()) : ?>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<?php endif; ?>
				<?php endif;?>
				<?php endwhile; ?>
				<?php else : ?>
				<p>Il n'y as pas de compétences pour cette catégorie</p>
				<?php endif; ?>
			</div>
		</li>
		<?php endfor;?>
	</ul>