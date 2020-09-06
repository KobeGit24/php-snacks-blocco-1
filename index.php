<!--GOAL:
Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.
Snack 6
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->


 <div style="background-color:#ccc; border:3px solid black; padding:30px;">

   <h2 style="color:red;">Snack 1</h2>
   <hr>
   <br>
   <b>

     <?php

        $arrNBA = [
          "match1" => [
            "team1" => "Lakers",
            "team2" => "Celtic",
            "pt1" => 80,
            "pt2" => 75
          ],
          "match2" => [
            "team1" => "Knicks",
            "team2" => "Heat",
            "pt1" => 92,
            "pt2" => 83
          ],
          "match3" => [
            "team1" => "Rockets",
            "team2" => "Clippers",
            "pt1" => 102,
            "pt2" => 99
          ],
          "match4" => [
            "team1" => "Suns",
            "team2" => "Spurs",
            "pt1" => 112,
            "pt2" => 105
          ],
          "match5" => [
            "team1" => "Magic",
            "team2" => "Bulls",
            "pt1" => 91,
            "pt2" => 99
          ],
        ];

        foreach ($arrNBA as $value) {
          echo $value["team1"] . " - " . $value["team2"] . " | " . $value["pt1"] . " - " . $value["pt2"];
          echo "<br><br>..........<br><br>";
        }

        // $keys = array_keys($arrNBA);
        //
        // for ($i=0; $i < count($keys); $i++) {
        //
        //   $key = $keys[$i];
        //   $m = $arrNBA[$key];
        //   echo $m["team1"] . " - " . $m["team2"] . " | " . $m["pt1"] . " - " . $m["pt2"];
        //   echo "<br><br>..........<br><br>";
        //
        // }

     ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 2</h2>
   <hr>
   <b>

     <?php

        $name = $_GET["name"];
        $nameLong = strlen($name);
        echo $name;
        echo "<br>........<br>";
        $mail = $_GET["mail"];
        $isDot = strpos($mail,".");
        $isAt = strpos($mail,"@");
        echo $mail;
        echo "<br>........<br>";
        $age = $_GET["age"];
        $isInt = is_numeric($age);
        echo $age;
        echo "<br>........<br>";
        if ($nameLong>3 && $isDot !== false && $isAt !== false && $isInt) {
          echo "Accesso riuscito";
        } else {
          echo "Accesso negato";
        }
      ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 3</h2>
   <hr>
   <br>

   <b>
     <?php

        $posts = [

          '10/01/2019' => [
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
          '10/02/2019' => [
          [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
          ]
          ],
          '15/05/2019' => [
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

        foreach ($posts as $key => $value) {

          echo $key;
          echo "<br>";

          foreach ($value as $p) {

            echo $p["title"];
            echo "<br>";
            echo $p["author"];
            echo "<br>";
            echo $p["text"];
            echo "<br>--------<br>";
          }

          echo "<br><br>";
        }
      ?>
   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 4</h2>
   <hr>
   <b>

     <?php

        $a = [];
        while (count($a) < 15) {
          $numRan = rand(1,100);
          if (!in_array($numRan, $a)) {
            $a[] = $numRan;
          }
        }
        var_dump($a);
      ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 5</h2>
   <hr>
   <br>

   <b>

     <?php

        $p = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $y = explode(".", $p);

        foreach ($y as $value) {

          if (!empty($value)) {

            echo "<p>" . trim($value) . ".</p>";
          }
        }

        // for ($i=0; $i < count($y) - 1; $i++) {
        //
        //   echo "<p>" . trim($y[$i]) . ".</p>";
        // }

      ?>

   </b>

 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 6</h2>
   <hr>
   <br>

   <b>

     <?php

     $db = [
       'teachers' => [
         [
           'name' => 'Michele',
           'lastname' => 'Papagni'
         ],
         [
           'name' => 'Fabio',
           'lastname' => 'Forghieri'
         ]
       ],
       'pm' => [
         [
           'name' => 'Roberto',
           'lastname' => 'Marazzini'
         ],
         [
           'name' => 'Federico',
           'lastname' => 'Pellegrini'
         ]
       ]
     ];

     foreach ($db as $key => $value) {

       echo $key;

       foreach ($value as $p) {

         if ($key === 'teachers') {
           echo '<div style="background-color:red;">' . $p["name"] . " " . $p["lastname"] . '</div>';
         } else if($key === 'pm') {
           echo '<div style="background-color:green;">' . $p["name"] . " " . $p["lastname"] . '</div>';
         }
       }

       echo "<br>";
     }

     ?>


   </b>

 </div>

<div style="background-color:#ccc; border:3px solid black; padding:20px;">

  <h2 style="color:red;">Snack 7</h2>
  <hr>
  <br>

  <b>

    <?php

      $voti = [
        'Mario Rossi' => [
          5, 7, 9, 5, 5, 6, 7, 8
        ],
        'Francesca Bianchi' => [
          9, 10, 9, 9, 8, 9, 10, 10
        ]
      ];
      foreach ($voti as $name => $v) {
        echo $name . ": ";
        // VERSIONE 1
        // $sum = 0;
        // foreach ($v as $voto) {
        //
        //     $sum += $voto;
        // }
        // $avg = $sum / count($v);
        // VERSIONE 2
        $avg = array_sum($v) / count($v);
        echo $avg;
        echo "<br>";
      };
    ?>

  </b>

</div>
