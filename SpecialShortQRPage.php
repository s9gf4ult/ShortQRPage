<?php

class SpecialShortQRPage extends SpecialPage {
  function __construct() {
    parent::__construct( 'ShortQRPage' );
  }
 
  function execute( $par ) {
    global $wgRequest, $wgOut;
 
    $this->setHeaders();
 
    # Get request data from, e.g.
      $param = $wgRequest->getText('param');

    $title = ShortUrlUtils::decodeURL($par)->getText();
    
    $output = "
=$title=
{{#qrcode: ecc=H
 | size=4
 | boundary=5
 | label=http://qrgorod.ru/s/$par
 | scheme=http
}}";
    $wgOut->addWikiText( $output );
  }
}




?>
