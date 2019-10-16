<?php 
/**
* footer.php
*
* The template for displaying the footer.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

<?php if(is_active_sidebar('footer-one')):  ?>
<!-- footer -->
<footer class="siter-footer">
	<div class="container">
		<div class="row">
		<?php get_sidebar('footer'); ?>
		</div>
	</div>
	<!-- end container -->
</footer>
<!-- end site-footer -->
<?php endif; ?>

	<div class="copyright">
			<div class="container">
				<div class="row">
					 <?php if(is_active_sidebar('footer-bottom-left-column')):  ?>
					<?php get_sidebar('bottombar'); ?>
					<?php else: ?>
					<div class="col">
						<p>
						<?php if(get_option( 'copyright_text' ) !=''){ ?>

				<?php } else { ?>&copy; <?php echo esc_html(date('Y')); ?>
				<a href="<?php echo esc_url(home_url()); ?>"><?php ucfirst(bloginfo('name')); ?></a>
				<?php esc_html_e('. All right reserved',"begro"); ?>
			<?php } ?>
			<?php esc_html_e('Designed &amp; Developed BY ',"begro"); ?> <a href="<?php echo esc_url('https://www.midexigner.com'); ?>" title="MI Dexigner" target="_blank" rel="nofollow">MI Dexigner</a>
			</p>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- end copyright -->
		</div>
			<!-- end Wrapper -->
			

<?php wp_footer(); ?>