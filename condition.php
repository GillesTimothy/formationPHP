<?php

$adulte = true;
$age = 18;
if ($age <= 14){
    echo 'salut gamin !';
}
else if ($age == 18 AND $adulte) {
    echo 'plus mineur chacal !!';
}
else {
    echo 'bonjour cher adulte !';
}

echo ' ';

if ($adulte)
{
?>
<p> bonjour bonjour bonjour </p>
<?php
}

switch ($age)
{
    case 4:
        echo 'tu a 4 ans';
    break;
    case 18:
        echo 'tu as 18 piges';
    break;
}


?>