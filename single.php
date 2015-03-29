<?php get_header(); ?>

    <div id="me-main" class="main">
        <div class="wrap cf">
            <?php get_sidebar(); ?>
            <div id="me-content" class="content">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="entry">
                            <p class="post-meta">
                            <span class="post-date"><?php the_date('Y-m-d'); ?></span>
                            <span class="post-category"><?php _e('分类：'); ?><?php the_category(', '); ?></span>
                            <span class="post-author"><?php _e('作者：'); ?><?php the_author(); ?></span>
                            <span class="post-edit"><?php edit_post_link('编辑', '', ''); ?></span>
                            <span class="post-comment"><?php comments_popup_link('No Comments &#187;', '1 Comments &#187;', '% Comments &#187;', 'png-fix'); ?></span>
                            <div class="post-content"><?php the_content(); ?></div>
                        </p>
                        </div>
                        <?php comments_template(); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>