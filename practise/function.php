<?php
    //function that takes three names and makes each one lowercase
    echo fix_names("WIllIAM", "henry", "gatES");

    function fix_names($n1,$n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1 ." " . $n2 . " " . $n3; 
    }

    // The include Statement
    include "library.php";

    

    

?>