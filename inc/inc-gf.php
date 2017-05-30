<?php
function google_font_loader() {
	$primaryFont = 'Open+Sans:300,600';
	$secondaryFont = 'Cavet:400,700';
?>
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ '<?php echo $primaryFont; ?>', '<?php echo $secondaryFont; ?>' ] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script><?php
}

add_action('wp_footer', 'google_font_loader');
