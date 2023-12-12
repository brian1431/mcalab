<?php
$students=array(
"john",
"alice",
"bob",
"charlie",
"eve"
);
echo"original array:\n";
print_r($students);

asort($students);
echo"\nsorted array in ascending order:\n";
print_r($students);
arsort($students);
echo"\nsorted array in decending order:\n";
print_r($students);
?>
