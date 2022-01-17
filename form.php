<?php
if(isset($_GET['surname'])){
    $txt = strtolower($_GET['surname']);
    if($txt === 'james'){
        echo "Bond, James Bond";
    }
    else {
        echo "Bonjour $txt";
    }
}
