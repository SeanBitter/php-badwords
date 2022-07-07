<?php 
  $paragrafo = "Un giorno Pippo deve spedire una lettera personale e decide di usare un francobollo della ditta pensando di pagarlo dopo una volta cambiato una banconota. A sera, tornato a casa, Pippo si accorge però di aver dimenticato di cambiare i soldi e teme che il direttore lo accusi di aver rubato il francobollo. Non potendo dormire con questo tarlo, Pippo decide di tornare in ufficio a saldare il debito.";

  echo $paragrafo;
  echo "<br>";
  echo "<br>";
  echo "La lunghezza del paragrafo è di:" . " " . strlen($paragrafo) . " " . "caratteri.";

  $censura = $_GET["censura"];

  if(stripos($paragrafo, $censura) !== false) {
    $paragrafo = str_ireplace($censura, "***", $paragrafo);
  }; 
  
?>

<h3>Stampa paragrafo con censura:</h3>
<h3><?php echo $paragrafo ?></h3>
<p>La lunghezza del paragrafo, con eventuali censure, è di: <?php echo strlen($paragrafo) ?> caratteri.</p>