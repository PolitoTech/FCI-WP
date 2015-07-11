<?php 


get_header(); ?>

<section class="banner banner-about">
    <div class="container">
        <h1>Full Circle Insights</h1>
    </div>
</section>

<section class="menu-pages">
  <div class="container">
      <ul class="list-inline">
        <li>About Us:</li>
        <li>
            <a href="<?php echo bloginfo( 'url' ); ?>/?page_id=209">
                    Company            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo( 'url' ); ?>/?page_id=206">
                    Leadership            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo( 'url' ); ?>/?page_id=204">
                    News &amp; Press            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo( 'url' ); ?>/?page_id=202">
                    Partners            </a>
        </li>
        <li class="active">
            <a href="<?php echo bloginfo( 'url' ); ?>/?page_id=211">
                    Careers            </a>
        </li>
    </ul>

  </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="company-page">
        <div class="container">
            <h2 class="title"><?php echo get_the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    
<?php get_footer(); ?>
