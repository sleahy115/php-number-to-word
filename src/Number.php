<?php
  class Number
  {
    //private $number;
    //
    // function __construct($new_number)
    // {
    //   $this->number = $new_number;
    // }

    function NumberToWord($number)
    {
        $array_ones=[0=>"zero", "one"=>1];
        var_dump(array_keys($array_ones, $number));

        if ($number == array_keys($array_ones, $number)) {
            return $array_ones[$number];
        }
    }
  }
 ?>
