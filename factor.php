
Write a program to find factor of any number

<?php

$x = 90;
echo "The factors of the " . $x . " are: ";

for ($i = 1; $i <= $x; ++$i)
{
    if ($x % $i == 0)
    {
        echo $i . " ";
    }
}

?>