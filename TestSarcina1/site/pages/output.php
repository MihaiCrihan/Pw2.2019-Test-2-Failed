<?
session_start();

var_dump($_SESSION["number"]) ?>
<table border="1">
  <?
  rsort($_SESSION["number"]);
foreach ($_SESSION["number"] as $number){ ?>
      <tr>
          <td> <?=$number ?></td>
      </tr>
  <? } ?>
</table>
