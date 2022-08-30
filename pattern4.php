<!-- Write a program to print below format 
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
1 2 3 4 5 6 7
1 2 3 4 5 6 7 8
-->

<?php
//printing pattern 

for($i=1;$i<=8;$i++){

    for($j=0;$j<=$i;$j++){
        echo "$j";
    }

    echo "<br/>";
}



?>