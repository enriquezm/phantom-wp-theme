<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phantom
 */

?>
<?php get_header(); ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1><?php echo bloginfo( 'name' ); ?></h1>
								<p><?php echo bloginfo( 'description' ); ?></p>
							</header>
							<section class="tiles">

								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<article id="post-<?php the_ID(); ?>" class="style1">
											<span class="image">
												<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
											</span>
											<a href="<?php the_permalink(); ?>">
												<h2><?php the_title(); ?></h2>
												<div class="content">
													<p><?php the_excerpt(); ?></p>
												</div>
											</a>
										</article>
									<?php endwhile; ?>
								<?php endif; ?>

								<article class="style2">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Lorem</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Feugiat</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Tempus</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Aliquam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Veroeros</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ipsum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dolor</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Nullam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ultricies</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dictum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="http://localhost:8888/grant-site/wp-content/uploads/2018/05/placeholder-image.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pretium</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>
<?php get_footer(); ?>
