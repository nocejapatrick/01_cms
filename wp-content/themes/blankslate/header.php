<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.css';?>">
<?php wp_head(); ?>
<script>
    jQuery(document).ready(function($){
        $('.like').click(function(e){
            e.preventDefault();
            var post_id = $(this).attr('data-post_id');
            var real_like = $(this).find('.real-like');
            $.ajax({
                type:'post',
                dataType:'json',
                url:'<?php echo admin_url('admin-ajax.php');?>',
                data:{
                    action:'jsforwp_add_like',
                    _ajax_nonce:'<?php echo wp_create_nonce('nonce_name');?>',
                    post_id: post_id
                },
                success:function(e){
                    real_like.html(e);
                },
                error:function(e){
                    alert(e);
                }
            })
        });
    })
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
    <div class="container" style="padding:0 15px;">
        <div class="row align-items-center justify-content-between">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="" class="img-fluid">
            </div>
            <nav id="menu" class="row">
        <!-- <div id="search"><?php get_search_form(); ?></div> -->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <i class="fa fa-search" aria-hidden="true"></i>
            </nav>
        </div>
    </div>
</header>
<div id="container">
