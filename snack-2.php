<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php
$dates = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
$chiavi_dates = array_keys($dates);
// var_dump($chiavi_dates);
echo "<h3>Versione in php</h3>";

for ($i = 0; $i < count($chiavi_dates); $i++) {
    $chiavi = $chiavi_dates[$i];
    $posts = $dates[$chiavi];
    echo "<h4>$chiavi</h4>";
    for ($j = 0; $j < count($posts); $j++) {
        $chiavi_posts = $posts[$j];
        // var_dump($chiavi_posts);
        $titolo = $chiavi_posts["title"];
        $author = $chiavi_posts["author"];
        $text = $chiavi_posts["text"];
        echo "<ul>
            <li>$author - $titolo - $text</li>
            </ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h3>Versione con html innestato</h3>
    <div>
        <?php
        for ($i = 0; $i < count($chiavi_dates); $i++) {
            $chiavi = $chiavi_dates[$i];
            $posts = $dates[$chiavi];
        ?>

            <h3><?php echo $chiavi ?></h3>
            <ul>
                <?php
                for ($j = 0; $j < count($posts); $j++) {
                    $chiavi_posts = $posts[$j];
                    // var_dump($chiavi_posts);
                    $titolo = $chiavi_posts["title"];
                    $author = $chiavi_posts["author"];
                    $text = $chiavi_posts["text"];
                ?>
                    <li><?php echo "$titolo - $author - $text" ?></li>
                <?php
                }
                ?>

            </ul>
    </div>
<?php
        }
?>

</body>

</html>