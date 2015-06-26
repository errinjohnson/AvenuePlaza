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

//test html for wiki pages. add content
<?php
    //require 'vendor/autoload.php';

    //$log = new Monolog\Logger('name');
    //$log->pushHandler(new Monolog\Handler\StreamHandler('app.log',Monolog\Logger::WARNING));

   // $log->addWarning('Foo two');

    //$app = new \Slim\Slim();

    //$app->get('/hello/:name', function ($name) {
    //echo "Hello, $name";
      //  });
    ?>
<?php
    require 'vendor/autoload.php';
    date_default_timezone_set ( 'America/New_York');

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger( 'name');
    $log->pushHandler(new StreamHandler('app.log', Monolog\Logger::WARNING));

    $log->addWarning('Foo Two');

 //#36246644728248 - online calendar training schedule. -->
 //#33053744815478  - create simple php website. -->

?>
