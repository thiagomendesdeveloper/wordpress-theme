<div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Read Latest News</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <?php while(have_posts()) : the_post(); ?>

        <?php get_template_part('templates/card','blog'); ?>

        <?php endwhile; ?>

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="btn btn-primary">View More</a>
        </div>

      </div>
    </div>
</div>