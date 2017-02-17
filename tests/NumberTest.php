
<?php
require_once "src/Number.php";
    class NumberTest extends PHPUnit_Framework_TestCase
    {
        function test_1()
        {
            $test_number = new Number;
            //Arrange
            $input = 1;

            $test_number->numberToWord($input);
            //Act
            $result = $test_number->numberToWord($input);
            //Assert
            $this->AssertEquals(1, $result);
        }

        // function test_no()
        // {
        //   $test_arrays = new Scrabble;
        //   //Arrange
        //   $input = "no";
        //
        //   $test_arrays->wordScore($input);
        //   //Act
        //   $result = $test_arrays->wordScore($input);
        //   //Assert
        //   $this->AssertEquals(2, $result);
        //
        // }
        //
        // function test_go()
        // {
        //   $test_arrays = new Scrabble;
        //   //Arrange
        //   $input = "go";
        //
        //   $test_arrays->wordScore($input);
        //   //Act
        //   $result = $test_arrays->wordScore($input);
        //   //Assert
        //   $this->AssertEquals(3, $result);
        //
        // }
        //
        // function test_food()
        // {
        //   $test_arrays = new Scrabble;
        //   //Arrange
        //   $input = "food";
        //
        //   $test_arrays->wordScore($input);
        //   //Act
        //   $result = $test_arrays->wordScore($input);
        //   //Assert
        //   $this->AssertEquals(8, $result);
        //
        // }
        //
        // function test_queen()
        // {
        //   $test_arrays = new Scrabble;
        //   //Arrange
        //   $input = "queen";
        //
        //   $test_arrays->wordScore($input);
        //   //Act
        //   $result = $test_arrays->wordScore($input);
        //   //Assert
        //   $this->AssertEquals(14, $result);
        //
        // }



}
 ?>
