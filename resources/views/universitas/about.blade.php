<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>About</title>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/my-style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/"><strong>STMIK LIKMI</strong></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-
target="#navbarSupportedContent"

aria-controls="navbarSupportedContent" aria-expanded="false" aria-
label="Toggle navigation">

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item ">
<a class="nav-link" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="/about">About</a>
</li>
</ul>
</div>
</nav>
            <div class="container text-center">
               <h1>STMIK LIKMI</h1>
               <h2><?php echo $teks; ?></h2>
                <h3>Struktur Pimpinan</h3>
                <ol class="list-group my-4"">
                    <?php foreach ($dosen as $nama) {
                        echo "<li class=\"list-group-item\"> $nama </li>";
                         } ?>
                 </ol>
                <div> <img class="rounded-circle img-thumbnail m-2" src="/img/people1.jpg">
                    <img class="rounded-circle img-thumbnail m-2" src="/img/people2.jpg">
                     <img class="rounded-circle img-thumbnail m-2" src="/img/people3.jpg">
                     <img class="rounded-circle img-thumbnail m-2" src="/img/people4.jpg"> </div>
                    <small>Copyright © <?php echo date("Y"); ?> Mike </small>
                    <script src='/js/app.js'></script>
                    <script src="/js/my-style.js"></script>
            </body>
</html>
