<?php
include "Question.php";

class QuestionLists{
    private $questions = [];

    public function __construct($questions = [])
    {
        $this->questions = $questions;
    }


    public function parse($path){
        if (file_exists($path)){
            // get content .md file
            $file_content = file_get_contents($path);
            // explode questions , add to $question_list
            $question_list = explode('######', $file_content);
            array_shift($question_list);
            foreach ($question_list as $item){
                //expolde answer
                $answer = explode("####", $item);
                $question = new Question($answer[0], $answer[1]);
                array_push($this->questions, $question);
            }

        }else{
            throw new \Exception("File not found, check path: ". $path . "????");
        }
    }

    public function all(){
        if (count($this->questions) == 0){
            throw new Exception("Questions list null !");
        }else{
            return $this->questions[1];
        }
    }

    public function getQuestion(int $index){
        return $this->questions[$index - 1] ?: throw new Exception("Question not found or check your index.");
    }

}

