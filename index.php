<?php 
$unites = 70;
if ($unites <= 50)
{
    echo $elecBill = $unites * 3.50;
}
elseif ($unites <= 150)
{
    echo $elecBill = $unites * 4.00;
}
elseif ($unites > 150)
{
    echo $elecBill = $unites * 6.50;
}
else {
    echo 'invalid input';
}

?>