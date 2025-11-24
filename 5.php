<?php

$user = null;
echo $user?->getName();
echo $user->getName();

//При использовании ?-> вместо -> цепочка операторов завершается, и результат будет null.

?>