<?php
# Alert the user that this is not a valid entry point to MediaWiki if they try to access the special pages file directly.
if (!defined('MEDIAWIKI')) {
        echo <<<EOT
'To install my extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/ShortQRPage/ShortQRPage.php" );'
          EOT;
        exit( 1 );
}

$wgExtensionCredits['specialpage'][] =
  array('path' => __FILE__,
        'name' => 'ShortQRPage',
        'url' => 'https://github.com/s9gf4ult/ShortQRPage');

$dir = __FILE__ . '/';

$wgAutoloadClasses['ShortQRPage'] = $dir . 'SpecialShortQRPage.php';

        
                                             


?>

