<a href="<?php the_permalink(); ?>">
<div class="col-lg-4 py-3 wow fadeInUp">
    <div class="card-blog">
        <div class="header">
            <div class="post-thumb" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            </div>
        </div>
        <div class="body">
            <h5 class="post-title"><a href="#"><?php echo the_title(); ?></a></h5>
            <div class="post-date">Posted on <a href="#"><?php echo get_the_date('d-M-y');?></a></div>
        </div>
    </div>
</div>
</a>