<!-- 

На вход подается строка из чисел, разделенных пробелами.

Замените каждый элемент строки произведением всех других элементов.

Рассмотрим на примере строки "1 2 3".

Новое значение вместо "1" это "2 * 3 = 6". Для "2" это "1 * 3 = 3". Для "3" это "1 * 2 = 2"
-->

<?php

function productOther ($strNums) {
	$arrNums = explode (" ", $strNums);
	$productArray = [];
	$product = 1;
	foreach ($arrNums as $thisKey => $thisValue) {
		$product = 1;
		foreach($arrNums as $twoKey => $twoValue) {
			if ($thisValue === $twoValue) {
				continue;
			}
			else {
				$product *= $twoValue;
			}
}
	$productArray[]=$product;
}
	return $productArray;
}


echo var_dump(productOther("7 5 3 6"));

?>