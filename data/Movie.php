<?php 

class Movie{
    public $title;
    public $originalTitle;
    public $originalLanguage;
    public $genre;
    public $overview;
    public $posterPath;
    public $voteAverage;
    
    function __construct($title,$originalTitle,$originalLanguage,$genre=null,$overview,$posterPath = null,$voteAverage = null){
        $this->title=$title;
        $this->originalTitle=$originalTitle;
        $this->originalLanguage=$originalLanguage;
        $this->genre=$genre;
        $this->overview=$overview;
        $this->posterPath=$posterPath;
        $this->voteAverage=$voteAverage;
    }

    public function setTitle($title){
        if ($title != null) {
            $this->title = $title;
        }
    }

    public function setVote($voteAverage){
        if (is_numeric($voteAverage)) {
            $this->voteAverage = $voteAverage;
        }
    }

}

?>