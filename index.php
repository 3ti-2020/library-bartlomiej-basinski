<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" rel="stylesheet">
    <title>Dane z Bazy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="footer"></div>
    <div class="header"></div>
    <div class="sidebar"></div>
    <div class="main">
<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $con = new mysqli($servername, $username, $password, $dbname);
    
    

   $sql = "SELECT * FROM autorzy,id,tytuly WHERE id.id_autorzy = autorzy.id AND id.id_tytuly = tytuly.id";

   $result = $con->query( $sql);

   
   echo("<div class='tabelka'>");
   echo("<h3 class='tytul'></h3>");
   echo("<table class='tabelka_moja'>");
   echo("<tr>
           <th>Imie</th>
           <th>Mazwisko</th>
           <th>Tytuł</th>
           <th>ISBN</th>
       </tr>");
       while( $wiersz = $result->fetch_assoc() ) {
           echo("<tr class='row'>");
           echo( "<td class='col'>".$wiersz['Imie']." </td>
           <td class='col'> ".$wiersz['Nazwisko']."</td>
           <td class='col'> ".$wiersz['tytuł']."</td>
           <td class='col'> ".$wiersz['ISBN']."</td>
           " );
           echo("</tr>");
       }
       echo("</table>");
      


?>
</div>
</div>
</div>
</body>
</html>
