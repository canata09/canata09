<?php 
	//class //Students
    class Students {
        public function getStudents(){
            $students = array(
                array('name' => 'John', 'age' => 20),
                array('name' => 'Mary', 'age' => 21),
                array('name' => 'Peter', 'age' => 22),
                array('name' => 'Jane', 'age' => 23),
                array('name' => 'Tom', 'age' => 24)
            );
            return $students;
        }
    }


?>