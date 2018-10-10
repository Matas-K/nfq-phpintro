<?php

namespace {
	function calculateHomeWorkSum(...$numbers){
		return array_sum($numbers);
	}
}

namespace Nfq\Akademija\Not_Typed {
	function calculateHomeWorkSum(...$numbers): int{
		return array_sum($numbers);
	}
}

namespace Nfq\Akademija\Soft {
	function calculateHomeWorkSum(int ...$numbers): int{
		return array_sum($numbers);
	}
}
