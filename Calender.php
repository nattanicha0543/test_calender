<?php 

class Calender{
    public function showDay($month, $day)
    {
        $data = "2021-$month-$day";
        $unixTimestamp = strtotime($data);
        $dayOfWeek = date("1", $unixTimestamp);
        return $dayOfWeek;
    }
}