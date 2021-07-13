
<?php include("templates_class.php"); ?>
<?php

class Shoes extends Template{

  public $name;
  public $id;
  public $img;
  public $price;
  public $color;
  public $xml_file;
  public $documents;
  public $parent_shoes;
  public $child_shoes;
  public $tracker;
  public $counter;
  public $file;
  public $move_file;


  public function display_all_shoes_from($this_file) {

    $this->documents = new DomDocument;
    $this->documents->load($this_file);
    $parent_shoes = $this->documents->getElementsByTagName('shoes')->item(0);
    $child_shoes  = $this->documents->getElementsByTagName('shoe');



    if($this_file == "XML/cart.xml"){
      $this->cart_template();
    }
    elseif($this_file == "XML/wishlist.xml"){
      $this->wishlist_template($child_shoes);

    }else{
      $this->homepage_template($child_shoes);
    }
    
  }

  public function add_shoes_to_this($file) {

    $this->documents = new DomDocument;
    $this->documents->load($file);
    $this->documents->formatOutput = true;
    $this->documents->preserveWhiteSpace = false;
    $this->documents->load($file);

    $parent_shoes = $this->documents->getElementsByTagName('shoes');
    $child_shoes  = $this->documents->getElementsByTagName('shoe');

    foreach($child_shoes as $each_shoes) {
      if($each_shoes->getElementsByTagName('id')->item(0)->nodeValue == $this->id){
        $this->tracker = 1;
      }
    }

    if($this->tracker != 0 or $this->tracker >= 0) {

      $new_shoes = $this->documents->createELement('shoe');
      $new_shoes->appEndChild($this->documents->createElement('id',$this->id));
      $new_shoes->appEndChild($this->documents->createElement('image',$this->img));
      $new_shoes->appEndChild($this->documents->createElement('shoeName', $this->name));
      $new_shoes->appEndChild($this->documents->createElement('price', $this->price));
      $new_shoes->appEndChild($this->documents->createElement('color', $this->color));

      $parent_shoes->item(0)->appendChild($new_shoes);   
      
      $test = $this->documents->save($file);


      if(isset($_POST['cartBtn']) || isset($_POST['wishBtn'])) {
        header("Location: homepage.php");
      }


    // if($file == "XML/cart.xml"){
    //   header("Location: cart.php");
    // }
    // elseif($file == "XML/wishlist.xml"){
    //   header("Location: wishlist.php");

    // }else{
    //   header("Location: homepage.php");
    // }

    }
  }


  public function remove_item_to_this($item_id) {

    $this->documents = new DomDocument;
    $this->documents->formatOutput = true;
    $this->documents->preserveWhiteSpace = false;
    $this->documents->load($this->file);


    $parent_shoes = $this->documents->getElementsByTagName('shoes');
    $child_shoes  = $this->documents->getElementsByTagName('shoe');


    foreach($child_shoes as $each_shoes) {

      $old_index_node_id = $each_shoes->getElementsByTagName('id')->item(0)->nodeValue;

      if($item_id === $old_index_node_id) {

        $this->tracker = 1;
        $old_index_node = $this->documents->getElementsByTagName('shoe')->item($this->counter);

      }
      $this->counter++;
    }

    if($this->tracker != 0) {
      $parent_shoes->item(0)->removeChild($old_index_node);
      $test = $this->documents->save($this->file);
  
      if($this->file == "XML/cart.xml"){
        header("Location: cart.php");
        // echo "cart remove success";
      }
      elseif($this->file == "XML/wishlist.xml"){
        header("Location: wishlist.php");
        // echo "wishlist remove success";


      }else{
        // header("Location: homepage.php");
        echo "homepage remove success";

      }
        
    }

  }


  public function move_shoes() {

    $this->documents = new DomDocument;
    $this->documents->formatOutput = true;
    $this->documents->preserveWhiteSpace = false;
    $this->documents->load($this->file);

    $parent_shoes = $this->documents->getElementsByTagName('shoes');
    $child_shoes  = $this->documents->getElementsByTagName('shoe');

    $counter = 0;
    $id_tracker = 0;


    foreach($child_shoes as $each_shoes){

      $old_id = $each_shoes->getElementsByTagName('id')->item(0)->nodeValue;

      if($this->id == $old_id ){

        $id_tracker = 1;
        $old_node = $this->documents->getElementsByTagName('shoe')->item($counter);     

        $id           = $this->documents->getElementsByTagName('id')->item($counter)->nodeValue;
        $img          = $this->documents->getElementsByTagName('image')->item($counter)->nodeValue;
        $name         = $this->documents->getElementsByTagName('shoeName')->item($counter)->nodeValue;
        $color        = $this->documents->getElementsByTagName('color')->item($counter)->nodeValue;
        $price_input  = $this->documents->getElementsByTagName('price')->item($counter)->nodeValue;

      }
      $counter++;
    }

    if($id_tracker != 0){

      $this->id     = $id;
      $this->img  = $img;
      $this->name   = $name;
      $this->price  = $price_input;
      $this->color  = $color;

      $this->add_shoes_to_this($this->move_file);
      $this->remove_item_to_this($this->id);

      // $parent_shoes->item(0)->removeChild($old_index_node);
      // $test = $this->documents->save($this->file);

    //   if($test) {
    //     echo "yes";
    //   }else {
    //     echo "no";
    //   }
    // }

      // $parent_shoes->item(0)->removeChild($old_node);
      // $test = $this->documents->save($this->move_file);

      //   if($test){
      //     echo $old_id;
      //     echo $counter;

      //     echo "yes";
      //   }else {
      //     echo "no";
      //   }


    // echo "<pre>";
    // print_r($old_node);
    // echo "</pre>";

    // echo $id   . "<br />";
    // echo $img  . "<br />";
    // echo $name . "<br />";
    // echo $color. "<br />";
    // echo $price_input. "<br />";

      

    }
  }

 public function remove_node_at_this_index($index) {

 }   
  
  


}
$my_product = new Shoes();
?>