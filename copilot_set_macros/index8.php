<?php 
	//class Date
    class Date {
        public $day;
        public $month;
        public $year;
        public function __construct($day, $month, $year) {
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }
        public function __toString() {
            return $this->day . "/" . $this->month . "/" . $this->year;
        }
    }

    public function convertDailyNumber ($day, $month, $year) {
        $date = new Date($day, $month, $year);
        $date = strtotime($date);
        $date = date('z', $date);
        return $date;
    }
?>