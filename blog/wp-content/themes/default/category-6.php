<?php
/*
Template Name: Thought
*/
?>

<?php get_header(); ?>
<img src="/imgs/thoughthead.jpg" class="coverup">


<div id="content" class="widecolumn">

<?php query_posts('category_name=thought'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<h3><?php the_time('l, F jS, Y') ?></h3>
	</div>
<?php endwhile; ?>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
