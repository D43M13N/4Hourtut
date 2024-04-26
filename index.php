<?php
$query = require 'core/bootstrap.php';
$tasks = $query->selectAll('todos');
require 'views/index.view.php';












//
//require 'functions.php';
//class Task{
//
//    public $description;
//    public $completed = false;
//
//    public function __construct($description)
//    {
//        $this->description = $description;
//    }
//    public function isComplete(){
//        return $this->completed;
//    }
//    public function complete() {
//        $this->completed = true;
//    }
//}
//
//$tasks = [
//    new Task('Go to the Store'),
//    new Task('Finish  my php tutorial'),
//    new Task('Clean my roon')
//];
//
//$tasks[0]->complete();
//
//
//require 'index.view.php';
//
//
//

//
//$greetings = 'Hello World';
//
//$animals= ['dog', 'cat', 'dolphin', 'horse', 'rabbit'];
//
//$person = [
//        'age' => 31,
//        'hair' => 'brown',
//        'career' => 'web developer',
//        'points' => 100
//];
//
//$task = [
//        'title'=> 'name of the task',
//        'due' => 'needs to be a date',
//        'assigned_to' => 'should refer to id value in database',
//        'completed' => false
//];
//
//$person['name'] = 'Jeffrey';
//
//unset($person['age']);
//
//
//
//require 'index.view.php';
