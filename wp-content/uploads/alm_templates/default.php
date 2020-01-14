<?php if ($cont % 2 == 0) { ?>

                            <article class="col-6 blogPostList pr-4" id="post-list">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('420x240'); ?></a>
                                <div class="blogPostText" >
                                <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                                    <?php $content = the_excerpt(); ?>
                                </div>
                            </article>
                            
                        <?php } else {?>

                            <article class="col-6 blogPostList pl-4" id="post-list">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('420x240'); ?></a>
                                <div class="blogPostText" >
                                    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                                    <?php $content = the_excerpt(); ?>
                                </div>
                            </article>

                        <?php } $cont++;?>