<?php


class Task
{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title;
        $this->completed = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('First Task', 'Learn OOP');

$task->complete();

var_dump($task->completed);