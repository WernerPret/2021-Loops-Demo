<h1>Welcome to the Repetitive Cafe</h1>
<?php 
  $drinks =["Coke"=>2, "Fanta"=>2];
  $snacks = ["Pies"=>3, "Chips"=>1];
?>

<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $drink=>$price): ?>
  <li><?= "$drink : $price" ?></li>
<?php endforeach; ?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
<?php foreach($snacks as $snack=>$price):?>
  <li><?= "$snack : $price" ?></li>
<?php endforeach; ?>
</ul>
