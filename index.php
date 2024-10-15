<?php

function showError($error)  {
    echo '<h1>ERRORE</h1>';
}

class Movie {

    private $title;         // string
    public $director;      // string
    public $actors;        // string / array di string
    private $year;          // int  / numero intero
    public $genre;         // string / array di string
    public $plot;          // string
    public $duration;      // int  / numero intero
    public $vote;          // float  / numero con virgola
    

    function __construct($title,$director,$actors,$year) {
       $this->title = $title;  
       $this->director = $director;  
       $this->actors = $actors;
       $this->year = $year;
    }

    public function getTitle($title) {
        return $this->title;
    }

    public function setTitle($title) {
        if (is_string($title) && strlen($title) >0) {
            $this->title = $title;
        }
        else {
            echo '<h4>ERRORE</h4>'
        }
    }
    public function getYear() {
        return $this->year;
    }
    public function setYear($year) {
        if (is_numeric($year)) {
            $this->year = $year;
        }

        else {
            showError('anno non valido')
        }
    }
}

$actors = [
    'Uma thurman',
    'Samuel L. Jackson',
    'Jhon Travolta',
    'Harvey Keitel'
];
$pulpFiction = new Movie('Pulp Fiction','Quentin Tarantino',$actors,1994);





?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class='py-4 mb-4'>
        <div class='container'>
            <div class='col text-center'>
                <h1>
                    PHP OOP 1
                </h1>
            </div>
        </div>
    </header>
    
</body>
</html>