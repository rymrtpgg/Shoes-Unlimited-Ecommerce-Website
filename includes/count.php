<?php 


function cartCount(){
  $xml = new DomDocument;
  $xml->load('XML/cart.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;
  echo $itemCount = "$all_prod->length";
}
function wishlistCount(){
  $xml = new DomDocument;
  $xml->load('XML/wishlist.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;
  echo $itemCount = "$all_prod->length";  
}


?>