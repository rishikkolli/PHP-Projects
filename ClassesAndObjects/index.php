<?php

class StringUtils{
  public static function secondCase($string){
    if(strlen($string) >= 2){
      $string = strtolower($string);
      $string[1] = strtoupper($string[1]);
      return $string;
    } else {
      $string = strtolower($string);
      return $string;
    }
  }
}

class Pajamas {
  private $owner, $fit, $color;
  function __construct($owner = "Rishik", $fit = "thin", $color = "black"){
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }
  public function describe(){
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }

  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas{
  private $button_state = "unbuttoned";
  public function describe(){
    return parent::describe() . " They also have buttons which are currently $this->button_state.";
  }
  public function toggleButtons(){
    if($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    }else{
      $this->button_state = "unbuttoned";
    }
  }
}

$chicken_PJs = new Pajamas("CHICKEN", "thick", "green");
$chicken_PJs->setFit("thinner");
echo $chicken_PJs->describe();

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo $moose_PJs->describe();
$moose_PJs->toggleButtons();
echo $moose_PJs->describe();
