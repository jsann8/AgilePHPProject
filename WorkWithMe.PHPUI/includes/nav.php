<?php

if (isset($_SESSION["Username"]))
{
    $name = "(" . $_SESSION["Username"] . ")"; //replace this with their actual name later
}
else
{
    $name = "";
}

?>

<ul>
    <li><a href="index.php">Me <?=$name?></a></li>
    <li>&#8600 My Workplace 1</li>
    <li>&#8600 &#8600 Workplace Subgroup</li>
</ul>