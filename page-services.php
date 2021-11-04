<?php /* template name: page-services */ ?>

<?php get_header(); ?>

<div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
              </ul>
            </nav>
            <h1 class="text-center">Our Services</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

<?php get_template_part('templates/index/index', 'tools'); ?>

<?php get_template_part('templates/index/index', 'services'); ?>

<?php get_footer(); ?>