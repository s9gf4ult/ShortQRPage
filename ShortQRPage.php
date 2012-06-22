<?php

$wgExtensionCredits['specialpage'][] = array('path' => __FILE__,
                                             'name' => 'ShortQRPage',
                                             'descritpion' => '',
                                             'url' => 'https://github.com/s9gf4ult/ShortQRPage');

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['SpecialShortQRPage'] = $dir . 'SpecialShortQRPage.php';
$wgSpecialPages['ShortQRPage'] = 'SpecialShortQRPage';


?>

