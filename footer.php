
		<footer>
			
			<?php 
				include( __DIR__.'/src/assets/svgs/footer_svgs.php' );
				do_action('get_footer_code'); 
			?>

			<div class="js">
				<?php 
					wp_footer(); 
				?>
			</div>
			
		</footer>

	</body>
</html>
