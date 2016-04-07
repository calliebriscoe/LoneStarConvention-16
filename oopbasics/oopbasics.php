<?php
//https://joind.in/talk/1a5fa
//other classes needed for the class student to run
include("classes/abstractUser.php");
include("classes/user.php");
include("classes/developer.php");

class Student extends Developer {

  public $classes = array();

  public function __construct($name, $title, $skills = array(), $classes = array()){
        $this->name = $name;
        $this->title = $title;
        $this->skills = $skills;
        $this->classes = $classes;
  }

    /**
     * Get the value of Classes
     *
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set the value of Classes
     *
     * @param mixed classes
     *
     * @return self
     */
    public function setClassesSet($type) {
    	if ($type === "back-end") {
	    	$add = array("Linux","PHP", "AWS", "Laravel", "MySQL");
    		$this->classes = array_merge($this->classes, $add);
    	} else if ($type === "front-end") {
    		$add = array("CSS", "HTML", "JavaScript", "JSON");
    		$this->classes = array_merge($this->classes, $add);
    	} else if ($type === "fullstack") {
    		$this->setClassesSet("back-end");
    		$this->setClassesSet("front-end");
    	}
    }

    public function getClassesList() {
  		$this->classes = array_unique($this->classes);
  		echo "<ul><li>";
          echo implode("</li><li>",$this->classes);
          echo "</li></ul>";
    }

    public function isStudent(){
      $student = $this->classes;

      if(empty($student)){
              echo "Is not a student.";
      } else {
       echo "Is a student.";
     }
    }

};

$developer1 = new Student("Callie Briscoe", "Ms");
echo $developer1 . "</br>";
$developer1->setSkillSet("webdev");
$developer1->getSkillsList();
// $developer1->setClassesSet("fullstack");
// $developer1->getClassesList();
$developer1->isStudent();
