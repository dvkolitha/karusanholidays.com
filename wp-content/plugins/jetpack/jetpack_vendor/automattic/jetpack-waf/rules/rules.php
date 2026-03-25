<?php
if ( require('/home3/karusan3/public_html/karusanholidays/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-waf/src/../rules/allow-ip.php') ) { return; }
if ( require('/home3/karusan3/public_html/karusanholidays/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-waf/src/../rules/block-ip.php') ) { return $waf->block('block', -1, 'ip block list'); }

