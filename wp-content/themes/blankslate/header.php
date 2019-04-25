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
            var self = this;
                $.ajax({
                    type:'post',
                    dataType:'json',
                    url:'<?php echo admin_url('admin-ajax.php');?>',
                    data:{
                        action:'jsforwp_add_like',
                        _ajax_nonce:'<?php echo wp_create_nonce('nonce_name');?>',
                        post_id: post_id,
                        user_id: <?php echo get_current_user_id();?>
                    },
                    success:function(e){
                        console.log(e);
                        $(self).css('border','none');
                        real_like.html(e);
                    },
                    error:function(e){
                        alert(e.responseText);
                    }
                })
            $(this).unbind('click');
        });
        $('.fa-search').click(function(){
            $('#search').slideToggle();
        })
        $(window).scroll(function(e){
            if($(window).scrollTop() > 0){
                $('#header').css('background','#86a85d');
            }else{
                $('#header').css('background','transparent');
            }
        })
        $('.click-view').click(function(e){
            e.preventDefault();
            var post_id = $(this).attr('data-post_id');
            var link = $(this).attr('href');
            $.ajax({
                type:'post',
                dataType:'json',
                url:'<?php echo admin_url('admin-ajax.php');?>',
                data:{
                    action:'jsforwp_add_views',
                    _ajax_nonce:'<?php echo wp_create_nonce('nonce_name');?>',
                    post_id: post_id
                },
                success:function(e){
                    window.location.href = link;
                },
                error:function(e){
                    alert(e.responseText);
                }
            })
        })
    })
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
    <div class="container" style="padding:0 15px;">
        <div class="row align-items-center justify-content-between position-relative">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="" class="img-fluid">
            </div>
            <nav id="menu" class="row">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <i class="fa fa-search" aria-hidden="true"></i>
            </nav>
            <div id="search">
                  <?php get_search_form(); ?>
             </div>
        </div>
    </div>
</header>
<div id="container">
