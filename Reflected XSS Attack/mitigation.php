<?php
if(isset($_GET["search"]))
{
    //$search = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
    $search = htmlspecialchars($_GET['search']);
    echo "The result of your search for:".$search;
    echo "<br><br> <i>Sorry no results found</i><br><br>";

}

?>
