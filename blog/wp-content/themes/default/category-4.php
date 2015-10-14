<?php
/*
Template Name: Writings
*/
?>

<?php get_header(); ?>
<img src="/imgs/writingshead.jpg" class="coverup">

<div id="content" class="widecolumn">

<div class="writings-cat">
<h2><a href="javascript:;" class="cat-title">Childhood of Angel</a></h2>
<div class="post hide">
<?php query_posts('tag=childhood&showposts=35'); ?>
<?php while (have_posts()) : the_post(); ?>
		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php endwhile; ?>
</div>
</div>

<div class="writings-cat">
<h2><a href="javascript:;" class="cat-title">Shorts</a></h2>
<div class="post hide">
<?php query_posts('tag=shorts'); ?>
<?php while (have_posts()) : the_post(); ?>
		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php endwhile; ?>
</div>
</div>

<div class="writings-cat">
<h2><a href="javascript:;" class="cat-title">Essays</a></h2>
<div class="post hide">
<?php query_posts('tag=essays'); ?>
<?php while (have_posts()) : the_post(); ?>
		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php endwhile; ?>
</div>
</div>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
