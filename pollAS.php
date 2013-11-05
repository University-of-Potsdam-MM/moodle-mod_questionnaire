<?php 
class PollAS { 
    public $activated = false;
    public $answer = array();
    public $date;
    public $multiple;
    public $options = array();
    public $PID;
    public $question;
    public $result = array();
    public $teacherName;
     
    function PollAS(){
    	
    }
    
    function isActivated() {
    	return $activated;
    }

    function setActivated($value1) {
    	$activated = $value1;
    }
    
    function getAnswer() {
    	return $answer;
    }
    
    function getDate() {
    	return $date;
    }
    
    function setDate($value2) {
    	$date = $value2;
    }
    
    function isMultiple() {
    	return $multiple;
    }
    
    function setMultiple($value3) {
    	$multiple = $value3;
    }
    
    function getOptions() {
    	return $options;
    }
    
    function getPID() {
    	return $pid;
    }

    function setPID($value4) {
    	$PID = $value4;
    }
    
    function getQuestion() {
    	return $question;
    }
    
    function setQuestion($value5) {
    	$question = $value5;
    }
    

    function getResult() {
    	return $result;
    }
    
    function getTeacherName() {
    	return $teacherName;
    }
    
    function setTeacherName($value6) {
    	$teacherName = $value6;
    }
    
    function setAnswer($answerList) {
    	$answer = $answerList;
    }
 } 