<?php

class Movie
{
    public $title;
    public $director;
    public $year;
    public $lang;


    public function __construct($title, $director, $year, $lang)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->lang = $lang;
    }

    public function print()
    {
        echo "Titolo:" . $this->title . "<br>";
        echo "Regista:" . $this->director . "<br>";
        echo "Anno:" . $this->year . "<br>";
        echo "Lingua:" . $this->lang . "<br>";
    }
}
