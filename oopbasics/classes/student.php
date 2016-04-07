<?php

class Student extends Developer {

  public $classes = array();

  public function __construct($name, $title, $skills, $classes = array()){
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
    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    

}

?>
