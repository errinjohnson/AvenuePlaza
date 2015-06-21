<?php
class Education {

    public $course = "default course";
    public $subject = "default subject";

    function __construct($course, $subject) {
        $this->course = $course;
        $this->subject = $subject;
    }
    public function getInfo(){
        return "Course: " . $this->course . "Subject: " . $this->subject;
    }
}
    $e = new Education("Hardware -", "Mouse Basics- "); ?>
   <?php echo $e->getInfo(); ?>



<?php

class Fish
{
    public $common_name;
    public $flavor;
    public $record_weight;

    function __construct($name, $flavor, $record){
        $this->common_name = $name;
        $this->flavor = $flavor;
        $this->record_weight = $record;
    }

    public function getInfo() {
        $output  = "The " . $this->common_name . "is an awesome fish. ";
        $output .= "It is very" . $this->flavor . " when eaten.- ";
        $output .= "Currently the world record" . $this->common_name . "weighed" . $this->record_weight;
        return $output;
    }
}
class Trout extends Fish{
    public $species;
  function __construct($name, $flavor, $record,$species) {
        $this->species = $species;
        parent::__construct($name, $flavor,$record);
  }
  function getInfo() {
      $output = $this->species . " " . $this->common_name . " tastes  " . $this->flavor . ". ";
      $output .= "The record " . $this->species . " " . $this->common_name . " weighed " . $this->record_weight . ".";
    return $output;
  }
}
$brook_trout = new Trout("Trout","Delicious","14 pounds 8 ounces","Brook");
?>
<?php echo $brook_trout->getInfo(); ?>

