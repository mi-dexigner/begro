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
<?php get_sidebar('footernav'); ?>
	<div class="copyright">
			<div class="container">
				<div class="row">
					 <?php if(is_active_sidebar('footer-bottom-left-column')):  ?>
					<?php get_sidebar('bottombar'); ?>
					<?php else: ?>
					<div class="col">
						<p>
						
			<?php esc_html_e('Designed &amp; Developed BY ',"begro"); ?> <strong><a href="<?php echo esc_url('https://www.midexigner.com'); ?>" title="MI Dexigner" target="_blank" rel="nofollow">MI Dexigner</a></strong> | Power By <strong>Wordpress</strong>
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