<!-- program to find whether a number is Armstrong or not -->
<?php  
$num=371;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo " Armstrong number";  
}  
else  
{  
echo " not an Armstrong number";  
}  
?>  
