<?php

class PointUtil extends Object {


	public function rateAvg($value = null, $count = null) {
		$avg = ($value / $count);
		return $avg;
	}

	public function rateCount($count = null) {
		$count = $count + 1;
		return $count;
	}

	public function rateSum($oldValue = null, $value = null) {
		$sum = $oldValue + $value;
		return $sum;
	}
}
