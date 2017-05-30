<?php
$whitelist = array(
	'127.0.0.1',
	'::1'
);

$GTM_ID = 'xGTM-TZGCN4F';

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {

// Include the Google Tag Manager Code
function gtm_tracking_code_head() {

global $GTM_ID; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $GTM_ID; ?>');</script>
<!-- /Google Tag Manager -->
<?php
}

function gtm_tracking_code_footer() {
global $GTM_ID; ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $GTM_ID; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- /Google Tag Manager (noscript) -->
<?php
}

// Include GA tracking code before the closing head tag
add_action('wp_head', 'gtm_tracking_code_head');

// Include GA tracking code before the closing body tag
add_action('wp_footer', 'gtm_tracking_code_footer');
}
