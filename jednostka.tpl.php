<?php
/**
* @file
* Domy�lna implementacja sk�rki wykorzystywana do wy�wietlania informacji o sponsorze og�oszenia o pracy.
* Dost�pne zmienne
* - $sponsor_id: identyfikator segmentu zwi�zanego z og�oszeniem o pracy
* - $sponsor: nazwa sponsora og�oszenia o pracy
*/
?>
<div id="jednostka-<?php print $jednostka_id ?>" class="jednostka">
<div class="jednostka-title">
<h2>Jednostka</h2>
</div>
<div class="sponsored-by-message">
Ogłoszenie wydane przez: <?php print $jednostka; ?>
</div>
</div>