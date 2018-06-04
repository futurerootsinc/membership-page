<?php
/*
Template Name: German Sound Exploration Page
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>dublab &amp; the Goethe-Institut Los Angeles present... A GERMAN SOUND EXPLORATION - your connection to the German sounds presented on dublab.com</title>

<link rel="shortcut icon" type="image/x-icon" href="http://dublab.com/img/favicon.ico" />

<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<meta name="keywords" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-german.css" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mootools.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/german-script.js"></script>
<script type="text/javascript" src="http://dublab.com/wp-content/plugins/audio-player/assets/audio-player.js?ver=2.0.4.1"></script>
<script type="text/javascript">AudioPlayer.setup("http://dublab.com/wp-content/plugins/audio-player/assets/player.swf?ver=2.0.4.1", {width:"290",animation:"no",encode:"yes",initialvolume:"80",remaining:"yes",noinfo:"no",buffer:"5",checkpolicy:"yes",rtl:"no",bg:"0097FF",text:"FFFFFF",leftbg:"00CFFF",lefticon:"ffffff",volslider:"FFFFFF",voltrack:"0097FF",rightbg:"00CFFF",rightbghover:"0097FF",righticon:"ffffff",righticonhover:"ffffff",track:"0097FF",loader:"ffffff",border:"0097FF",tracker:"77C0FF",skip:"0097FF",pagebg:"77C0FF",transparentpagebg:"yes"});</script> 
</head>

<body>

<div id="page">

<!--header-->
<div id="header">
    <h1><a href="http://dublab.com/german/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/german/a-german-sound-expoloration.png" alt="A German Sound Exploration" width="615" height="68" /></a></h1>
    <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/img/german/dublab-goethe-present.png" alt="dublab &amp; the goethe-institut present..." width="400" height="63" /></h2>
</div>
<!--end header-->


<!--sidebar-->
<div id="leftcol" >
<div id="menu">

<ul class="menu">
  <li><a title="theme-stream" href="http://207.200.96.227:8018/listen.pls"><em>*Listen Now*</em><br />
	Theme-Stream</a></li>
</ul>

<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>

<ul class="menu">
  <li><a title="About A German Sound Exploration" href="http://dublab.com/german/about/">About</a></li>
  <li><a title="Links" href="http://dublab.com/german/links/">Links</a></li>
</ul>

</div>
</div>
<!--end sidebar-->


<!--main content-->

<div id="wrapper" class="clearfix" > 
<div id="maincol" class="accordion">

<?php
if(get_query_var('paged') <= 1){
if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h2 class="pageheader"><?php the_title(); ?></h2>
<div class="pagecontent">
<?php the_content('Read more &raquo;'); ?>


<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
<div id="postinfotext">
</div>

</div>	
<?php endwhile;?>

<?php endif;
};


if (is_page('german') ) {
$category = 'goethe';
} else if (is_page('german-artists') ) {
$category = 'german artists';
} else if (is_page('german-djs') ) {
$category = 'german djs';
}else if (is_page('german-mixes') ) {
$category = 'german mixes';
}else if (is_page('interviews') ) {
$category = 'german interviews';
}else if (is_page('live-sets') ) {
$category = 'german live sets';
}else if (is_page('videos') ) {
$category = 'german video';
}
if ($category) {
  wp_reset_query();
  $cat = get_cat_ID($category);
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $post_per_page = 5; // -1 shows all posts
  $args=array(
    'category_name' => $category,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
  );
  $wp_query = new WP_Query("category_name=" . $category . "&posts_per_page=5&paged=" . $paged);
  $args = array(
		 'base' => add_query_arg( 'paged', '%#%' ),
		 'total' => $result->max_num_pages,
		 'current' => $page
	    );
  $germanPosts = $wp_query;
  if( have_posts() ) : while ($germanPosts->have_posts()) : $germanPosts->the_post(); ?>
	    
        <h2 class="contentheader"><?php the_title(); ?></h2>
        <div class="content" id="post-<?php the_ID(); ?>">
		  <div class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Permalink to Share</a></div>

          <?php
	the_content(); ?>
      </div>
    <?php
    endwhile;
    ?>
<?php    // create the navigation below the content
		dublab14_content_nav( 'nav-below' );
else : ?>
	<div class="pagecontent"
		<p>Uh oh, egg is on our face!</p>
		<p>Sorry, but there aren't any posts about this yet - stay tuned. There will be.</p>
	</div>
	<?php endif; 
	
	
}  // if ($category)

?>

</div>
</div>

<!--end main content-->


<?php do_action('wp_footer'); ?>

</div>

</body>
</html>