<?php
$ruleta = 3;


if($ruleta==0):?>
    <p>Ha caído en el cero</p>
<?php elseif($ruleta%2==0):?>
    <p>Ha caído en número par</p>
<?php else:?>
    <p>Ha caído en número impar</p>
<?php endif

?>
<?php
for($i=1 ; $i <= 5 ; $i+=1):?>
<div>Div <?= $i ?></div>
<?php endfor;
?>