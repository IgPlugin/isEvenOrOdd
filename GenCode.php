<?php

declare(strict_types=1);

$number = 0;
while ($number < 10000) {
	$number++;
	echo ('} elseif ($number == ' . $number . ') {' . PHP_EOL);
	if ($number % 2 == 0) {
		echo ('$sender->sendMessage("' . $number . ' is even");' . PHP_EOL);
	} else {
		echo ('$sender->sendMessage("' . $number . ' is odd");' . PHP_EOL);
	}
}
