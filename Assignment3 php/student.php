<?php
echo "<h1>Student Data</h1>"."<br>";
?>

<?php
class student{
    public $name;
    public $age;
    public $course;

function __construct($n,$a,$c){
    $this->name=$n;
    $this->age=$a;
    $this->course=$c;
}

function displaystudentinfo(){
    echo "name=" . $this->name ."<br>";
    echo "age=" . $this->age ."<br>";
    echo "course=" . $this->course ."<br>";
}

function age(){
    if($this->age <=17){
        echo "Minor" . "<br>";
    }
    else{
        echo "Adult" . "<br>";
    }
}
}
$Student1 = new student("Shawal",20,"webdevelopment");
$Student1->displaystudentinfo();
$Student1->age();
echo "<br>";

$Student2 = new student("Amna" , 13 , "DigitalMarketing");
$Student2->displaystudentinfo();
$Student2->age();
echo "<br>";

$Student3=new student("Reshal", 18 , "CyberSecurity");
$Student3->displaystudentinfo();
$Student3->age();
echo "<br>";

?>