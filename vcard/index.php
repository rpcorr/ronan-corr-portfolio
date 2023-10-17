<?php  get_Header(); ?>

				<div class="ss">
					<div class="dd">
				
						<!-- SECTION 4 - BLOG / NEWS -->
						<section>
							<div class="item blog" id="">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3><?php _e('Blog','vcard'); ?></h3>
										</div>
										
									</div>
								</div>
								<div class="col-md-9 blog-wrap">
									 <?php
                query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); 
				 if (have_posts()) : 
				 while (have_posts()) : the_post();?>
									<article>
										<div class="row">
										<?php if ( has_post_thumbnail() ){ ?>
										
											<div class="col-md-5">
												<?php the_post_thumbnail('blog'); ?>
											</div>
											<div class="col-md-7">
												<h3><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#"><?php echo get_the_date('j F'); ?></a> 
													<i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a> 
													<i class="fa fa-comments"></i> <?php comments_popup_link(__('0 Comments', 'Morpheus'), __('1 Comment', 'vcard'), '% '.__('Comments', 'Morpheus')); ?>
												</div>
												<?php the_content(); ?>
											</div>
										
										<?php } else{?>

																					
											<div class="col-md-12">
												<h3><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#"><?php echo get_the_date('j F'); ?></a> 
													<i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a> 
													<i class="fa fa-comments"></i> <?php comments_popup_link(__('0 Comments', 'vcard'), __('1 Comment', 'vcard'), '% '.__('Comments', 'vcard')); ?>
												</div>
												<?php the_content(); ?>
											</div>
										
										<?php }?>
										</div>
									</article>
									
									
								<?php endwhile; endif;?>
                    			<?php wp_reset_query();?>
                    			<div class="blog_pagination">
                        <?php if (function_exists("pagination")) {
                         pagination($wp_query->max_num_pages);
                             } ?>   
                        
                      <div style="display:none;"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form(); wp_enqueue_script('comment-reply'); post_class();?></div>
                    
                    </div>
								</div>
								<div class="col-md-3 blog-wrap">
									<article>
									<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('blog Sidebar') ) : else : ?>
                     <?php endif; ?>
                     				</article>
								</div>

							</div>
						</section>
						<!-- SECTION 4 - BLOG / NEWS -->

						
					</div>
			
						
<?php get_footer(); ?>