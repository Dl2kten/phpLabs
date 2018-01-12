<?php

/**
*Comp 4711 Set 4B
*
*@author David (Heqing) Liu
*/

class Student {
    /*
     * Constructor for student class
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /*
     * adds students email
     * @param which, address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    /*
     * Adds grade to student
     * @param grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    /*
     * Calculates average of student
     * @return average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    /*
     * Returns string of student's information
     * @return string result
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
            $result .= "\n";
            return '<pre>'.$result.'</pre>';
    }
    
}