<?php

class SpecialShortQRPage extends SpecialPage {
  function __construct() {
    parent::__construct( 'ShortQRPage' );
  }
 
  function execute( $par ) {
    global $wgRequest, $wgOut;
 
    $this->setHeaders();

    $title = ShortUrlUtils::decodeURL($par)->getText();
    
    $output = "
=$title=
{{#qrcode: ecc=L
 | size=27
 | boundary=5
 | label=http://qrgorod.com/s/$par
 | scheme=http
}}";
    $wgOut->addWikiText( $output );
  }
}




?>
