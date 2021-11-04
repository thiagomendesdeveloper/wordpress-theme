<div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          <?php
          $args = array('post_type' => 'servicos','posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC');
          $services = new WP_Query($args);

          while($services->have_posts()): $services->the_post();
          ?>

          <?php get_template_part('templates/card','servico'); ?>

          <?php endwhile; ?>

        </div>

    </div>
</div>