<?php get_header(); ?>
<div class="banner">
    <h1 class="banner-title">Learn to cook Thailand <span class="green">Food</span></h1>
    <div class="banner-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, animi sequi cupiditate obcaecati libero alias iste a suscipit dignissimos itaque reprehenderit</div>
</div>
<main id="content">
    <div class="container"  style="padding-top:30px;">
            <div class="translation-container">
                <h1>SELECT LANGUAGE</h1>
                <?php get_sidebar(); ?>
            </div>
            <?php $args = array( 'post_type' => 'recipes','meta_key'=>'likes','orderby'=>'meta_value','order'=>'DESC','posts_per_page'=>4);
                  $loop = new WP_Query( $args );
?>
        <div class="row" style="margin-top:30px;">
            <div class="recipe-section">
                <div class="section-title">
                <i class="fa fa-fire fa-1x" aria-hidden="true"></i> RECIPES
                </div>
                <div class="recipes-container row flex-wrap">
                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <?php if(has_post_thumbnail()){?>
                        
                    <div class="card" style="background:url('<?php echo get_the_post_thumbnail_url();?>') no-repeat center center; background-size:cover;">
                    <?php }else{?>
                        <div class="card" style="background:gray;">
                    <?php } ?>
                        <div class="content-holder">
                            <div class="cat-like-holder row justify-content-between align-items-center">
                                <div class="cat"><?php echo ucfirst(get_post_type());?></div>
                                <div>
                                    <?php 
                                        $post_user_id = (get_post_meta(get_the_ID(),'userssss',true)) ? get_post_meta(get_the_ID(),'userssss',true) :[];
                                        $flag = false;
                                        foreach($post_user_id as $posts){
                                            if($posts == get_current_user_id()){
                                                $flag = true;    
                                            }
                                        }
                                    if(is_user_logged_in() && !$flag){?>
                                    <a class="like" data-post_id="<?php echo get_the_ID();?>">
                                    <?php }else{ ?>
                                        <a class="likes" disabled>
                                    <?php  }?>
                                     <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                     <?php 
                                        $likes = get_post_meta( get_the_ID(), 'likes', true);
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
            </div>
         </div>
    </div>
    <section class="photo-album">
        <div class="container">
            <div class="photo-album-container row">
                <div class="left"><i class="fa fa-caret-left fa-2x" aria-hidden="true"></i></div>
                <div class="right"><i class="fa fa-caret-right fa-2x" aria-hidden="true"></i></div>
                <div class="dots-container">
                    <ul class="row">
                        <li class="dots active"></li>
                        <li class="dots"></li>
                        <li class="dots"></li>
                    </ul>
                </div>
                <div class="adjustor">
                    <img class="img-fluid" src="http://localhost/01_cms/wp-content/uploads/2019/04/2016-04-04-1459778960-595542-GaiPadMedMamuangHimmapanStirfriedChickenwithCashewNuts.jpg">
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="padding:30px;">
        <div class="row">
            <div class="recipe-section">
                <div class="section-title">
                <i class="fa fa-fire fa-1x" aria-hidden="true"></i> BLOG POST
                </div>
                <div class="recipes-container row flex-wrap">
                <?php $args = array( 'post_type' => 'blogs','meta_key'=>'views','orderby'=>'meta_value','order'=>'DESC','posts_per_page'=>4);
                  $loop = new WP_Query( $args );
?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <?php if(has_post_thumbnail()){?>
                    <div class="card" style="background:url('<?php echo get_the_post_thumbnail_url();?>') no-repeat center center; background-size:cover;">
                    <?php }else{?>
                        <div class="card" style="background:gray;">
                    <?php } ?>
                        <div class="content-holder">
                            <div class="cat-like-holder row justify-content-between align-items-center">
                                <div class="cat"><?php echo ucfirst(get_post_type());?></div>
                                <div>
                                    <a href="#" class="views" data-post_id="<?php echo get_the_ID();?>">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                     <?php 
                                        $views = get_post_meta( get_the_ID(), 'views', true);
                                     ?>
                                     <span class="real-like"><?php echo $views;?></span>
                                     </a>
                                </div>
                            </div>
                            <div class="card-size">
                                <a href="<?php the_permalink();?>" class="card-title click-view" data-post_id="<?php echo get_the_ID();?>"><?php the_title();?></a>
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
    </div>
</main>


<?php get_footer(); ?>