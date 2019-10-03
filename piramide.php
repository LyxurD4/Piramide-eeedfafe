<?php
$input  = readline();
    if(is_numeric($input)) {
        for ($i = 1; $i <= $input; $i++) {
            for ($j = 1; $j <= $i; $j++) {
            echo "*" ;
    }
    echo "\n";
    }
} else {
    echo "Een nummer invoeren grappenmaker!", exit;
}
?>
