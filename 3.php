<?php

// Type casting examples
$integerVariable = 10;
$floatVariable = 3.14;
$stringVariable = "20";
$booleanVariable = true;

// Casting to integer
$castedInteger = (int) $floatVariable;
echo "Casted Integer: " . $castedInteger . "\n";

// Casting to float
$castedFloat = (float) $stringVariable;
echo "Casted Float: " . $castedFloat . "\n";

// Casting to string
$castedString = (string) $integerVariable;
echo "Casted String: " . $castedString . "\n";

// Casting to boolean
$castedBoolean = (bool) $stringVariable;
echo "Casted Boolean: " . var_export($castedBoolean, true) . "\n";

?>
