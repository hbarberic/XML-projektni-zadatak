<?php

$xml=simplexml_load_file('Lista.xml');

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sveučilišta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-light bg-warning bg-gradient ps-5">
            <a class="navbar-brand" href="#">Naslovnica</a>
        </nav>

        <div class="container mt-5">
            <h1 class="text-center">10 najstarijih sveučilišta u Europi</h1>

            <table class="table table-hover table-bordered mt-5">
                <thead class="bg-warning bg-gradient">
                    <tr>
                        <th>Pozicija</th>
                        <th>Naziv</th>
                        <th>Grad</th>
                        <th>Država</th>
                        <th>Godina osnutka</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($xml->sveuciliste as $sveuciliste):?>
                        <tr>
                            <td><?php echo $sveuciliste->pozicija;?></td>
                            <td><?php echo $sveuciliste->naziv;?></td>
                            <td><?php echo $sveuciliste->lokacija->grad;?></td>
                            <td><?php echo $sveuciliste->lokacija->drzava;?></td>
                            <td><?php echo $sveuciliste->godina_osnutka;?></td>                 
                        </tr>
                    <?php endforeach;?>
                </tbody>

            </table>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <footer class="mt-5 bg-warning bg-gradient p-1">
        <p class="text-center">XML programiranje</p>
        <p class="text-center">Autor: Hrvoje Barberić</p>
    </footer>

</html>