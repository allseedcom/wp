<?php get_header(); ?>
<div class="container">
<?php while (have_posts()) : the_post(); ?>
<div class="row">
 <div class="col-md-9">
<?php the_content(); ?>

<?php endwhile; ?></div>
<div class="col-md-3">
<p class="box"><a href="<?php echo home_url(); ?>/recruit"><img src="./wp-content/themes/allseed/img/side_recruit.jpg" width="100%" height="100%" alt=""/></a></p>
<p class="box"><a href="<?php echo home_url(); ?>/partner/"><img src="./wp-content/themes/allseed/img/side_partner.jpg" width="100%" height="100%" alt=""/></a></p>
<p class="box"><a href="<?php echo home_url(); ?>/contact"><img src="./wp-content/themes/allseed/img/top_contact.jpg" width="100%" height="100%" alt=""/></a></p>

</div>
 </div><!--row--->

	</div>
<?php get_footer(); ?>