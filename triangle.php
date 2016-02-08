<?php
  class Triangle
  {
      private $side1;
      private $side2;
      private $side3;

      function __construct($side1, $side2, $side3)
      {
          $this->side1 = $side1;
          $this->side2 = $side2;
          $this->side3 = $side3;
      }

      function setSide1($newSide1)
      {
          $this->side1 = $newSide1;
      }
      function getSide1()
      {
          return $this->side1;
      }

      function setSide2($newSide2)
      {
          $this->side2 = $newSide2;
      }
      function getSide2()
      {
          return $this->side2;
      }

      function setSide3($newSide3)
      {
          $this->$side3 = $newSide3;
      }
      function getSide3()
      {
          return $this->side3;
      }
  }

  $my_triangle = new Triangle($_GET["side1"], $_GET["side2"], $_GET["side3"]);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>What Triangle Is It?!</title>
</head>
<body>
    <div class="container">
        <?php
            $inputtedSide1 = $my_triangle->getSide1();
            $inputtedSide2 = $my_triangle->getSide2();
            $inputtedSide3 = $my_triangle->getSide3();

            if ($inputtedSide1 + $inputtedSide2 <= $inputtedSide3 || $inputtedSide2 + $inputtedSide3 <= $inputtedSide3 || $inputtedSide1 + $inputtedSide3 <= $inputtedSide2) {
                echo "<h1>This is not a triangle! GTFO!</h1>";
            } elseif ($inputtedSide1 == $inputtedSide2 && $inputtedSide2 == $inputtedSide3) {
                echo "<h1>This is an equilateral triangle!</h1>";
            } elseif ($inputtedSide1 == $inputtedSide2 || $inputtedSide1 == $inputtedSide3 || $inputtedSide2 == $inputtedSide3){
                echo "<h1>This is an isosceles triangle!</h1>";
            } else {
                echo "<h1>This is a scalene triangle!</h1>";
            }
        ?>
    </div>
</body>
</html>
