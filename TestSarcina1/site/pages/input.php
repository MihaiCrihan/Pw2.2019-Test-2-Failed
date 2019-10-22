<?
session_start();


if (!empty($_POST["number"]) and (isset($Post["number"]))) {
      $_SESSION["number"][] = $_POST["number"];
      ?><span>sa inscris</span><?
    }else{?>

<form method="post">
	Input <input type="number" name="number">
    <input type="submit">
</form>
<?}?>