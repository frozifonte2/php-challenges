<?php

function bubbleSort(array $array): array
{
   do {
   	$swapped = false;
   	for ($i = 0; $i < count($array)-1; $i++) {
   		if ($array[$i] > $array[$i+1]) {
   			$temp = $array[$i];
   			$array[$i] = $array[$i+1];
   			$array[$i+1] = $temp;
   			$swapped = true;
   		}
   	}
   } 
   while($swapped);
   return $array;
    
}
print_r(bubbleSort([3, 2, 10, -2, 0]));