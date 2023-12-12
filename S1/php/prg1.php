<?php
$students=array(
 "john",
 "ALice",
 "Bob",
 "Charlie",
 "Eve"
);

echo "Original Array";
Print_r($students);
asort($students);
echo"\n Sorted array in ascending order :\n";
print_r($students);
assort($students);
echo"\nSorted array in descending order :\n";
print_r($students);
?>

