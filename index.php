<?php
include 'app/QuestionLists.php';

class Test{
    private $path;

    public function __construct($path)
    {
        $this->path = $path ?? "";
    }

    public function test(){
        $question_lists = new QuestionLists();
        try {
            $question_lists->parse($this->path);
//            print_r($question_lists->all());
            print_r($question_lists->getQuestion(1));
        }catch (Exception $e){
            echo "Meassage: ".$e->getMessage();
        }
    }
}

$test = new Test('questions.md');
$test->test();