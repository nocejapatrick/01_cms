<?php get_header(); ?>
<main id="archive">
<header class="header">
<h1 class="entry-title"><?php single_term_title(); ?></h1>
<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<div class="container" style="padding:30px;">
            <div class="translation-container">
                <h1>SELECT LANGUAGE</h1>
                <?php get_sidebar(); ?>
            </div>

            <div class="row" style="margin-top:30px;">
                 <div class="recipe-section">
                     <div class="section-title">
                         <i class="fa fa-fire fa-1x" aria-hidden="true"></i> RECIPES
                     </div>
                  <div class="recipes-container row flex-wrap">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php if(has_post_thumbnail()){?>
                    <div class="card" style="background:url('<?php echo get_the_post_thumbnail_url();?>') no-repeat center center; background-size:cover;">
                    <?php }else{?>
                        <div class="card" style="background:gray;">
                    <?php } ?>
                        <div class="content-holder">
                            <div class="cat-like-holder row justify-content-between align-items-center">
                                <div class="cat"><?php echo ucfirst(get_post_type());?></div>
                                <div>
                                    <a href="#" class="like" data-post_id="<?php echo get_the_ID();?>">
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
                    <?php endwhile; endif;?>
                </div>
            </div>
         </div>
         <?php get_template_part( 'nav', 'below' ); ?>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>