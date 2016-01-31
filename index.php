<?php
get_header();

if (have_posts()):
    while (have_posts()): the_post();
        ?>
				    <div class="post">
              <a class="post-title" href="<?php echo the_permalink()?>"><?php the_title()?></a>
  				    <p class="post-content">
                <?php the_content_rss()?>
              </p>
            </div>
				<?php
    endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer();
?>
