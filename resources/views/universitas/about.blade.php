<html lang="en">
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="/css/app.css" rel="stylesheet">
          <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>About</title>
         </head>
           <body>
               <h1>STMIK LIKMI</h1>
               <h2><?php echo $teks; ?></h2>
                <h3>Struktur Pimpinan</h3> <ol>
                    <?php foreach ($dosen as $nama) {
                         echo "<li> $nama </li>";
                         } ?>
                </ol>
                <div> <img src="/img/people1.jpg">
                    <img src="/img/people2.jpg">
                     <img src="/img/people3.jpg">
                     <img src="/img/people4.jpg"> </div>
                    <small>Copyright © <?php echo date("Y"); ?> Mike </small>
                    <script src='/js/my-script.js'></script>
            </body>
</html>
