<?
/*
  Template Name: Кейс или антикейс
  Template Post Type: post
*/

echo "Кейс или антикейс<br />";
?>
<? echo single_cat_title(); ?></br>
<? the_title();
?></br>
<img src="<? echo get_field('case_img'); ?>" alt="<? echo the_title();?>"><br/>
<?php the_excerpt(); ?></br>
<? the_time( 'd.m.Y' ); ?>
