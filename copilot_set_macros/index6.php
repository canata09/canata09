<?php 
	//class //DegreeConverter
    class DegreeConverter {
        public function convert($degrees, $from, $to){
            if($from == 'celsius' && $to == 'fahrenheit'){
                return $degrees * 9 / 5 + 32;
            } else if($from == 'fahrenheit' && $to == 'celsius'){
                return ($degrees - 32) * 5 / 9;
            } else {
                return $degrees;
            }
        }
    }
?>