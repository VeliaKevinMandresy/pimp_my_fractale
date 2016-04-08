<?php
	function creatMandel($z_r,$z_i,$n,$c_r,$c_i)
	{
		$tmp = pow(pow($z_r, 2) + pow($z_i, 2),$n/2) * cos($n * atan2($z_i, $z_r))+ $c_r;
        $z_i = pow(pow($z_r, 2) + pow($z_i, 2),$n/2) * sin($n * atan2($z_i, $z_r)) + $c_i;
        $z_r = $tmp;
        while($z_r*$z_r + $z_i*$z_i < 4 AND $i < $iterations_max)
        {
            $tmp = pow(pow($z_r, 2) + pow($z_i, 2),$n/2) * cos($n * atan2($z_i, $z_r))+ $c_r;
            $z_i = pow(pow($z_r, 2) + pow($z_i, 2),$n/2) * sin($n * atan2($z_i, $z_r)) + $c_i;
            $z_r = $tmp;
            $i++;
        }
    }     