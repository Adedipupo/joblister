<?php
 
  class Template{
      protected $template;

      protected $vars = array();


       public function __construct($template)
       {
           $this->template = $template;
       }
       public function __set($key, $value)
       {
           $this->vars[$key] = $value;
       }
    
  }


?>