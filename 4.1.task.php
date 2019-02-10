<?php

if (isset($argv[1]) && is_numeric($argv[1])) {

    $input = intval($argv[1]);

} else {

    echo 'Please enter one number';
    die;

}

$cols = $input * 2 - 1;
$rows = $input * 2;
$position = $input;
$edge = $input;
$reverse = $input - 1;

for ($i = 1 ; $i <= $cols; $i++) {

    if ($i <= $edge) {

        for ($k = 0; $k < $rows; $k++) {

            if ($k == $position) {

                for ($j = 0; $j < $i; $j++) {

                    echo '* ';

                }

            }

            echo ' ';

        }

        $position--;
        echo PHP_EOL;

    } else {

        for ($k = 0; $k < $rows; $k++) {

            if ($k == $position + 2) {

                for ($j = $reverse; $j > 0; $j--) {

                    echo '* ';

                }

            }

            echo ' ';

        }

        $position++;
        $reverse--;
        echo PHP_EOL;

    }

}
