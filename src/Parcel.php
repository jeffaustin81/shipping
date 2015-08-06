<?php
class Parcel
{
  private $weight;
  private $volume;


      function __construct($package_weight)
      {
        $this->weight = $package_weight;
      }

      function setVolume($number1, $number2, $number3) {
        $sum = $number1 * $number2 * $number3;
        $this->volume = $sum;
      }

      function setWeight($new_weight) {
        $changed_weight = (integer) $new_weight;
        $this->weight = $changed_weight;
      }

      function getWeight() {
        return $this->weight;
      }

      function getVolume() {
        return $this->volume;
      }




}

$weight = $_GET["weight"];
$calculator_length = $_GET["length"];
$calculator_width = $_GET["width"];
$calculator_height = $_GET["height"];

$new_parcel = new Parcel($weight);
$new_parcel->volume($calculator_length, $calculator_width, $calculator_height);


?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
        echo "<h1>" . $new_parcel->getWeight() . "</h1>";
        echo "<h1>" . $new_parcel->getVolume() . "</h1>";
    ?>

  </body>
</html>
