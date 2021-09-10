<?php 
    $dataMovies = '
    {
        "Instructions": "delete everything in this object and make your own JSON object using different data.",
        "Title": "The Graduate",
        "Year": "1967",
        "Rated": "Approved",
        "Released": "22 Dec 1967",
        "Runtime": "106 min",
        "Genre": [
          "Comedy",
          "Drama",
          "Romance"
        ],
        "Director": "Mike Nichols",
        "Writers": [
          "Calder Willingham (screenplay)",
          "Buck Henry (screenplay)",
          "Charles Webb (based on the novel by)"
        ],
        "Actors": [
          "Anne Bancroft",
          "Dustin Hoffman",
          "Katharine Ross",
          "William Daniels"
        ],
        "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
        "Language": "English",
        "Country": "USA",
        "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
        "Poster": "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
        "imdbRating": "8.1",
        "imdbVotes": "183,131",
        "imdbID": "tt0061722"
      }';

    $movie = json_decode($dataMovies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
        <center>Data Film</center>
    <center>
        <b><?php echo $movie->Title; ?></b>
    </center>
        <center>
        <img src="<?php echo $movie->Poster;?>" alt="" srcset="" width="500px"  height="500px">
        </center>
    <table>

        <tr>
            <td></td>
            <td></td>
            <td><?php echo $movie->Plot;?></td>
        </tr>

        <tr>
            <td><b>Tahun Rilis</b></td>
            <td>:</td>
            <td><?php echo $movie->Year;?></td>
        </tr>

        <tr>
            <td><b>Tanggal Rilis</b></td>
            <td>:</td>
            <td><?php echo $movie->Released;?></td>
        </tr>

        <tr>
            <td><b>Durasi Film</b></td>
            <td>:</td>
            <td><?php echo $movie->Runtime;?></td>
        </tr>

        <tr>
            <td><b>Genre</b></td>
            <td>:</td>
            <td><?php echo implode(",", $movie->Genre);?></td>
        </tr>

        <tr>
            <td><b>Direktur</b></td>
            <td>:</td>
            <td><?php echo $movie->Director;?></td>
        </tr>

        <tr>
            <td><b>Penulis</b></td>
            <td></td>
            <td>
                <ul>
                    <li>
                <?php echo implode("<li>",$movie->Writers);?>
                </li>
                </ul>
            </td>
        </tr>
        
        <tr>
            <td><b>Pemeran</b></td>
            <td></td>
            <td>
                <ul>
                    <li>
                <?php echo implode("<li>",$movie->Actors);?>
                </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td><b>Bahasa</b></td>
            <td>:</td>
            <td><?php echo $movie->Language;?></td>
        </tr>

        <tr>
            <td><b>Negara</b></td>
            <td>:</td>
            <td><?php echo $movie->Country;?></td>
        </tr>

        <tr>
            <td><b>Penghargaan</b></td>
            <td>:</td>
            <td><?php echo $movie->Awards;?></td>
        </tr>

        <tr>
            <td><b>Nilai</b></td>
            <td>:</td>
            <td><?php echo $movie->imdbRating;?></td>
        </tr>
        
        <tr>
            <td><b>Vote</b></td>
            <td>:</td>
            <td><?php echo $movie->imdbVotes;?></td>
        </tr>

        <tr>
            <td><b>imdbID</b></td>
            <td>:</td>
            <td><?php echo $movie->imdbID;?></td>
        </tr>
    </table>
    

</body>
</html>