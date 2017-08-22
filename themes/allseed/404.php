<!-- 404.php -->
<?php get_header();?>
<div class="container">
<h1>404</h1>
<p>ページは見つかりませんでした。</p>
<p>We can't find this page / 404 error/</p>
<p>You might mistake type this page URL ： <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
<p><a href="<?php echo home_url(); ?>">HOME</a></p>
</div>
<?php get_footer();?>