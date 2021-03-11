<?php 
$a = 5;
$b = 5;
echo "$a == $b : ". ($a == $b); //operator sama dengan(==)
echo "<br>$a != $b : ". ($a != $b);//operator tidak sama dengan(!=)
echo "<br>$a > $b : ". ($a > $b);//operator lebih dari (>)
echo "<br>$a < $b : ". ($a < $b); //operator kurang dari (<)
echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b)); //operator dan(&&)
echo "<br>($b == $a) || ($a < $b) : ".(($a != $b) || ($a > $b)); //operator atau(||)
?>