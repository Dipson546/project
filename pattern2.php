<!-- Program to print below format. 
1 2 3 4 5 6 7
1 2 3 4 5 6
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1

-->

<?php
//printing pattern 

for($i=1;$i<=7;$i++){

    for($j=$i;$j<=7;$j++){
        echo "$j";
    }

    echo "<br/>";
}



?>