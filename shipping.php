<?
class Parcel
{
  private $weight;
  private $length;
  private $width;
  private $height;

      function __construct($package_weight, $package_length, $package_width, $package_height)
      {
        $this->weight = $package_weight;
        $this->length = $package_length;
        $this->width = $package_width;
        $this->height = $package_height;
      }

}
?>
