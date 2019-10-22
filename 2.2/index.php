<?php

require_once 'Product.php';

$object = new Product();

  $object->setName($_POST['name']);
  $object->getName();
?>

<table border="1">
  <tr>
    <th>Name</th>
  </tr>
  <? foreach ($products as $product){ ?>
  <tr>
    <td> <?= $product?></td>
  </tr>
  <? } ?>
</table>

<form action="" method="post">
  Number = <input type="text" name="name">
  <button type="submit" name="insert">+</button>
</form>
