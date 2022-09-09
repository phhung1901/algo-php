<?php

class Question{
    private $question;
    private $answer;

    public function __construct($question, $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }
}