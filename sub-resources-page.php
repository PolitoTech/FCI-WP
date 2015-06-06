<?php 

/**
 * Template Name: Sub Resources Page
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php echo do_shortcode( getField('banner') ); ?>

        <div id="sources-page">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">

                <?php the_content(); ?>

              </div>

              <div class="col-sm-5">
                <section class="sign-up">
                  <h2>Sign up now!</h2>
                  <p><em>Please complete all fields</em></p>
                  <?php echo do_shortcode( '[contact-form-7 id="276" title="Sign up now"]' ); ?>
                </section>
              </div>
            </div>
          </div>
        </div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    


<?php get_footer(); ?>
