<?php

class TextInput
{
  public static $text;
  
  public function __construct(){

  }
  
  public function add($text){
    self::$text += $text;
  }
  
  public function getValue(){
    return self::$text;
  }

}

class NumericInput extends TextInput
{
  public function add($text){
    if(is_numeric($text)){
      self::$text .= $text;
    }
  }

}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();