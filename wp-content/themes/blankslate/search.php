<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<div class="container" style="padding-top:60px; padding-bottom:30px;">
            <div class="translation-container">
                <h1>SELECT LANGUAGE</h1>
                <?php get_sidebar(); ?>
            </div>
    <div class="recipes-container row flex-wrap">
                    <?php while ( have_posts() ) : the_post();?>
                    <?php if(has_post_thumbnail()){?>
                        
                    <div class="card" style="background:url('<?php echo get_the_post_thumbnail_url();?>') no-repeat center center; background-size:cover;">
                    <?php }else{?>
                        <div class="card" style="background:gray;">
                    <?php } ?>
                        <div class="content-holder">
                            <div class="cat-like-holder row justify-content-between align-items-center">
                                <div class="cat"><?php echo ucfirst(get_post_type());?></div>
                                <div>
                                    <?php if(is_user_logged_in()){?>
                                    <a href="#" class="like" style="border:1px solid white;" data-post_id="<?php echo get_the_ID();?>">
                                    <?php }else{ ?>
                                        <a href="#" class="like" data-post_id="<?php echo get_the_ID();?>">
                                    <?php  }?>
                                     <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                     <?php 
                                        $likes = get_post_meta( get_the_ID(), 'likes', true);
                                        $likes = (empty($likes)) ? 0 : $likes;
                                     ?>
                                     <span class="real-like"><?php echo $likes;?></span>
                                     </a>
                                  
                                </div>
                            </div>
                            <div class="card-size">
                                <a href="<?php the_permalink();?>" class="card-title"><?php the_title();?></a>
                            </div>
                            <div class="auth-date-holder">
                                <span class="author"><?php the_author();?>.</span>
                                <span class="date"><?php the_date();?></span>
                            </div>
                            <div class="post-content">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php endif; ?>
</main>
<?php get_footer(); ?>