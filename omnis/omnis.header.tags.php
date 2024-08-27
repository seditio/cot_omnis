<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=header.tags
[END_COT_EXT]
==================== */

/**
 * Omnis Plugin / Global Part
 *
 * @version 1.00
 * @author SED.by
 * @copyright (c) 2024 SED.by
 */

defined('COT_CODE') or die('Wrong URL');

$gtm = "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','" . $cfg['plugin']['omnis']['gtm_id'] . "');</script>
<!-- End Google Tag Manager -->";

$gtm_noscript = '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . $cfg['plugin']['omnis']['gtm_id'] . '" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->';

$t->assign([
	'HEADER_GTM'					=> $gtm,
	'HEADER_GTM_NOSCRIPT'	=> $gtm_noscript,
]);
