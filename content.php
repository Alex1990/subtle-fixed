        <div id="me-content" class="content fl">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php
                    global $more;
                    $more = 0;
                ?>
                <div class="post">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <div class="post-excerpt cf">
                            <?php
                                if (preg_match('/<!--more-->/', get_the_content())) {
                                    the_content();
                                } else {
                                    the_excerpt();
                                }
                            ?>
                            ...<span class="read-more">
                                <a href="<?php the_permalink(); ?>">阅读全文&raquo;</a>
                            </span>
                        </div>
                        <p class="post-meta">
                            <span class="post-date"><?php the_time('Y-m-d'); ?></span>
                            <span class="post-category"><?php _e('分类：'); ?><?php the_category(', '); ?></span>
                            <span class="post-author"><?php _e('作者：'); ?><?php the_author(); ?></span>
                            <span class="post-edit"><?php edit_post_link('编辑', '', ''); ?></span>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="pagination fr">
                <?php
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer
                    
                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'prev_next' => 1,
                    'total' => $wp_query->max_num_pages
                )); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>