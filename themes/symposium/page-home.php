<?php get_header(); ?>
<div class="row">
    <div class="backgroundimage" data-background="<?php echo get_template_directory_uri(); ?>/img/aerial.jpg" colour="#1c941c"></div>
    <div class="content" style="height: 450px;">
        <h1 class="pagetitle"><?php echo get_the_title(); ?></h1>
    </div>
</div>


<div class="row">
    <div class="content">
<?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
<?php the_content(); ?>
                    </div>
                </article>               
<?php endwhile; ?>   
    </div>
</div>
<?php get_footer(); ?>