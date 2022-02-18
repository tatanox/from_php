<?php
echo ("Salut ".$_POST["name"]);
echo("<br>");
echo("Votre email est ".$_POST["email"]); 
echo("<br>");
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$this_day = 17;
$this_month = 02;
$this_year = 2022;
$day_val = $this_day - $day;
$month_val = $this_month - $month;
$year_val = $this_year - $year;
if (!empty($_POST['submit'])) {
    $today = date_create('today');
    $birth = date_create("{$_POST['year']}-{$_POST['month']}-{$_POST['day']}");
    $age = date_diff($today, $birth)->y;

    if ($age >= 18) {
        echo("Bienvenu, dans la guilde !");
    } 
    else { 
        echo("réessaye quand tu sera majeur !");
    }
}
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$this_day = 17;
$this_month = 02;
$this_year = 2022;
$day_val = $this_day - $day;
$month_val = $this_month - $month;
$year_val = $this_year - $year;
if (!empty($_POST['submit'])) {
    $today = date_create('today');
    $birth = date_create("{$_POST['year']}-{$_POST['month']}-{$_POST['day']}");
    $age = date_diff($today, $birth)->y;

    if ($age >= 18) {
        header("Location: https://www.amazon.fr/ ", true, 301);
            exit();
    } 
    else { 
        header("Location: https://www.youtube.com/watch?v=iuV5G1hkEYE", true, 301);
            exit();
    }
}



?>
