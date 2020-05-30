<?
/*
  Template Name: Партнер отрасли «Производство» (молочная и сырная продукция)
  Template Post Type: post
*/

echo "Партнеры<br />";
echo single_cat_title();
the_title();
?>
<img src="<? echo get_field('partner_img'); ?>" alt="<? echo the_title();?>">
