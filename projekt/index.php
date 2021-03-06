<html lang="en">

<head>
  <link rel="icon" type="image/png" href="favicon.ico">
  <title>Projekt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylesheet.css">

  <?php 
      include '..\connect.php';
      include 'timeCalc.php';
      if (isset($_POST['submit'])) {
        $navn = $_POST['navn'];
        $broedtekst = $_POST['broedtext'];
      
        $mysqli->query("INSERT INTO $table4_db (navn, broedtext) VALUES ('$navn', '$broedtekst')"); 
        header("Location: projekt.php");
      }
    ?>

</head>

<body data-spy="scroll">
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
        <div id="fixednav">
          <h4>Indholdsfortegnelse</h4>
          <nav id="posSpy" class="navbar navbar-light">
            <nav class="nav nav-pills flex-column">
              <a class="nav-link" href="#fimme">FIMME</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ml-2 nav-stacked" href="#f1">Formål</a>
                <nav class="nav nav-pills flex-column">
                  <a class="nav-link ml-4 my-1" href="#f1-1">Faglige mål</a>
                </nav>
                <a class="nav-link ml-2" href="#i1">Indhold</a>
                <nav class="nav nav-pills flex-column">
                  <a class="nav-link ml-4 my-1" href="#i1-1">Kernestof</a>
                  <a class="nav-link ml-4 my-1" href="#i1-2">Indhold i dokumentation</a>
                  <a class="nav-link ml-4 my-1" href="#i1-3">Dokumentation kan indeholde</a>
                </nav>
                <a class="nav-link ml-2" href="#m1">Materiale</a>

              </nav>
              <a class="nav-link" href="#q1">Spørgsmål</a>
            </nav>
          </nav>
        </div>
      </div>

      <div class="col-sm-9" data-spy="scroll" data-target="#posSpy" data-offset="500">
        <div>
          <h4 id="fimme">
            <small>
              <b>FIMME - Sidste projekt i faget informationsteknologi på VTG 2016-2019</b>
            </small>
            <div class="btn-group text-white">
              <a class="btn btn-success"> Projekt
                <a/>
                <a class="btn btn-success"> Dokumentation af projektet
                  <a/>
            </div>
        </div>
        </h4>
        <hr>
        <h2 class="scroll-adjust" id="f1">Formål</h2>
        <p>Formålet med dette projekt er at komme igennem de sidste punkter, inden I skal lave eksamensprojekt. I kommer til
          at arbejde med Interaktionsdesig og dokumentation. Interaktionsdesign i informationsteknologi er en diciplin hvor
          det gælder om at lave design som er tilpasset brugeren mentalt og fysik. Så I skal forsøge at sætte jer ind i hvordan
          jeeres modtager umiddelbart vil reagerer på jeres design, og så redesigne så brugeren gør som I ønsker</p>
        <h5 class="scroll-adjust" id="f1-1">Faglige mål</h5>
        <ul>
          <li>Analysere og vurdere, hvordan it-systemer har betydning for og påvirker menneskelige aktiviteter, samt anvende
            brugerorienterede teknikker til konstruktion af it-produkter</li>
          <li>Realisere udvalgte interaktionsdesign i et konkret it-produkt og tilpasse eksisterende design og systemer i konsekvens
            heraf
          </li>
        </ul>
        <hr>
        <h2 class="scroll-adjust" id="i1">Indhold</h2>
        <p>I skal designe en hjemmeside eller redesigne en hjemmeside. Hovedvægten i dette projekt er Interaktionsdesign og
          dokumentation. Så I skal finde en side hvor I mener at designet forhindre en fornuftig interaktion og redisgne
          denne, eller selv udtænke et site hvor I har fokus på interaktionen.</p>
        <p>Interaktionsdesign er en konstruktivt og kreativt orienteret disciplin, som handler om at designe interaktive digitale
          produkter, og fremme den måde, som vi mennesker kommunikerer og interagerer på i vores hverdags-, privat- og arbejdsliv</p>
        <h5 class="scroll-adjust" id="i1-1">Kernestof</h5>
        <ul>
          <li>It-systemers betydning for og påvirkning af menneskelig aktivitet -begrebs- og teoribaseret analyse og syntese</li>
          <li>Interaktionsdesign - arbejdsformer (f.eks. SCRUM) og teknologier til realisering af interaktionsdesign.</li>
        </ul>
        <h5 class="scroll-adjust" id="i1-2">Indhold i dokumentation</h5>
        <ul>
          <li>inddragelse af teoretiske og metodiske overvejelser i forbindelse med fremstilling af produktet</li>
          <li>inddragelse af konstruktiv feedback i udarbejdelse af produktet</li>
          <li>perspektivering til motoriske og mentale problemstillinger i forbindelse med projektet</li>
          <li>omhu ved produktion af produktet</li>
          <li>faglig indsigt og selvstændighed i den faglige dialog om projektet.</li>
        </ul>

        <h5 class="scroll-adjust" id="i1-3">Hvad kunne en dokumentation indeholde</h5>
        <ul>
          <li>Indholdsfortegnelse</li>
          <li>Overordnet projektbeskrivelse, incl. tidplan</li>
          <li>Detaljeret beskrivelse af projektet (ikke prosa) - med screenshots somforklarer de enkelte dele og funktionalitet</li>
          <li>Flow chart / sitemap, som skal give et generelt overblik over funktionerne i projektet</li>
          <li>Test af sitet - hvordan har du testet sitet</li>
          <li>Konklusion</li>
          <li>Referencer</li>
          <li>Bilag</li>
        </ul>
        <hr>
        <h2 class="scroll-adjust" id="m1">Materiale</h2>
        <ul>
          <li>
            <a href="https://youtu.be/DmbvejtiyNo?list=PLNVjvTjIY2geo3BrTxA_YqL57P-Jxf9Nr" target="_blanck">Building webApps using Visual Studio Code - Chris Johnson - Installation</a>
          </li>
          <li>
            <a href="https://youtu.be/ZK2CUQafbZU?list=PLNVjvTjIY2geo3BrTxA_YqL57P-Jxf9Nr" target="_blanck">Building webApps using Visual Studio Code - Chris Johnson - HTML</a>
          </li>
          <li>
            <a href="https://youtu.be/qslUBG3tbDI?list=PLNVjvTjIY2geo3BrTxA_YqL57P-Jxf9Nr" target="_blanck">Building webApps using Visual Studio Code - Chris Johnson - CSS</a>
          </li>
          <li>
            <a href="https://youtu.be/_E3HkekndFU?list=PLNVjvTjIY2geo3BrTxA_YqL57P-Jxf9Nr" target="_blanck">Building webApps using Visual Studio Code - Chris Johnson - Bootstrap</a>
          </li>
          <li>
            <a href="https://youtu.be/PNKy60ah5kI?list=PLNVjvTjIY2geo3BrTxA_YqL57P-Jxf9Nr" target="_blanck">Building webApps using Visual Studio Code - Chris Johnson - JavaScript</a>
          </li>
        </ul>
        <hr>
        <h4 class="scroll-adjust" id="q1">Har du spørgsmål?</h4>
        <form role="form" method="post">
          <div class="form-group">
            <input name="navn" class="form-control" placeholder="Navn" type="text" required>
            <textarea name="broedtext" class="form-control" rows="3" required></textarea>
            <input name="submit" class="btn btn-success" type="submit" value="Indsend">
          </div>
        </form>
        <?php
      $result = $mysqli->query("SELECT id, navn, broedtext, datotid FROM $table4_db ORDER BY id DESC");    
    if($mysqli->ping()){ //Hvis der er en connection til databasen, hvilket der ikke vil være når jeg aflevere
      echo "<br><br><p><span class=\"badge badge-pill badge-success\">" . $result->num_rows . "</span> Spørgsmål:</p><hr>";
      
      while ( $row = $result->fetch_assoc() ) {
        echo"<div class=\"col-sm-10 comment\">
            <h4>" . $row['navn'] . "<small> ".time_elapsed_string($row['datotid'])."</small></h4>
            <p> ". $row['broedtext']."</p> 
          </div>";
      }
    }
    else { //Placeholder så man kan se hvordan det ville se ud
      echo "<br><br><p><span class=\"badge badge-pill badge-success\">1</span> Spørgsmål:</p><br>

      <div class=\"col-sm-10 comment\">
        <h4>Jacob Skadborg <small>5 dage siden </small></h4>
        <p>Det her er et placeholder spørgsmål, den er kun aktiveret når der ikke er forbindelse til databasen. Ved forbindelse til databasen og flere kommentare, vil den næste kommentar automatisk blive sat ind under denne</p>
        <br>
      </div>";
    } 
      $mysqli->close(); 
      ?>
      </div>
    </div>
  </div>
</body>

</html>