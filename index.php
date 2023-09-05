<?php


   class Movies
   {
    public string $title;
    public string $genre;
    public int $year;
    public float $duration;
    public string $language;
    public string $plot;
    public bool $available;
    public  $cast;

    public function __construct($title, $genre, $year, $duration, $language, $plot, $available, $cast, )
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;
        $this->language = $language;
        $this->plot = $plot;
        $this->available = $available;
        $this->cast = $cast;
        
    }
}

// Creazione di una lista di 5 film
$movie1 = new Movies
(
    "Il Signore degli Anelli: La Compagnia dell'Anello",
    "Fantasy",
    2001,
    178, 
    "Inglese", 
    "Un gruppo di avventurieri cerca di distruggere un potente anello.", 
    true, 
    ["Elijah Wood", "Ian McKellen"]
);

$movie2 = new Movies
(
    "Pulp Fiction", 
    "Crime", 
    1994, 
    154, 
    "Inglese", 
    "Storie intrecciate di gangster, droga e violenza.", 
    true, 
    ["John Travolta", "Samuel L. Jackson"],
    );
    
$movie3 = new Movies
(
    "Forrest Gump", 
    "Drama", 
    1994, 
    142, 
    "Inglese", 
    "La straordinaria vita di un uomo con un QI basso ma un grande cuore.", 
    true, 
    ["Tom Hanks", "Robin Wright"]
);

$movie4 = new Movies
(
    "Il Gladiatore", 
    "Action", 
    2000, 
    155, 
    "Inglese", 
    "Un generale romano diventa un gladiatore per vendicare la sua famiglia.", 
    true, ["Russell Crowe", "Joaquin Phoenix"] 
    );

$movie5 = new Movies
(
    "Interstellar", 
    "Sci-Fi", 
    2014,
    169, 
    "Inglese",
    "Un gruppo di astronauti viaggia attraverso un buco nero per salvare l'umanità.", 
    true, 
    ["Matthew McConaughey", "Anne Hathaway"]
);

// Aggiungi i film a un array
$filmList = [$movie1, $movie2, $movie3, $movie4, $movie5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"></script>


</head>
<body>
<body>
    <h1>Lista dei Film</h1>
        
        <?php foreach ($filmList as $movie) { ?>
            <div class="row">
                <div class="col-2">
                    <div>
                        <h3  class="text-success">Titolo:  <?php echo $movie->title  ?></h3>
                    <ul>
                        <li >
                            <p"> <strong >Genere:</strong> <?php echo $movie->genre  ?> </p>
                        </li>
                        <li>
                            <p> <strong>Anno di uscita:</strong>  <?php echo $movie->year  ?></p>
                        </li>
                        <li>
                            <p> <strong>Durata film:</strong>  <?php echo $movie->duration  ?> min</p>
                        </li>
                        <li>
                            <p> <strong>Lingua originale:</strong> Lingua originale: <?php echo $movie->language  ?></p>
                        </li>
                        <li>
                            <p> <strong>Descrizione:</strong>  <?php echo $movie->plot  ?></p>
                        </li>
                        <li>
                            <p> <strong>Disponibilità su piattaforma:</strong><?php echo ($movie->available ? "Sì" : "No")  ?></p>
                        </li>
                        <li>
                            <p> <strong>Cast:</strong> <?php echo implode(", ", $movie->cast)  ?></p>
                        </li>
                    </ul>
                        
                        

                    </div>
                </div>
            </div>
            <?php }?>

        



        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </body>
</html>

