<?php
	function prod($n1,$n2,$n3){
		$aux = ($n1*$n2);
		return ($aux *$n3);
	}

	function sum($n1,$n2,$n3){
		$aux = $n1+$n2;
		return $aux+$n3;
	}

	function calcx($a,$b,$c,$d,$e,$f){
		$num = ($c*$e) - ($b*$f);
		$den = ($a*$e) - ($b*$d);
		if ($den == 0) {
			echo "X no tiene solución";
		} else{
			return ($num/$den);
		}
	}

	function calcy($a,$b,$c,$d,$e,$f){
		$num = ($a*$f)-($c*$d);
		$den = ($a*$e)-($b*$d);
		if ($den == 0) {
			echo "Y no tiene solución";
		} else{
			return ($num/$den);
		}
	}
	function bisisesto($ano){
		if(($ano%4 == 0)){
			return 1;
		}else{
			return 0;
		}
	}
?>