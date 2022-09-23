<?php

$n = 12;

print "<table style=\"width: 80%\">";

for($i = 1; $i <= $n; $i++){
    if($i % 2 == 1){
        print "<tr> <td style=\"border: 1px #000 solid;\">$i</td>  <td style=\"border: 1px #000 solid;\"><img style=\"width: 10%; display: block; margin: 0 auto;\" src=\"img/img_$i.png\" alt=\"image\"></td> </tr>";
    }
}

print "</table>";