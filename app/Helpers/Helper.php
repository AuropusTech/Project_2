<?php

namespace App\Helpers;


class Helper {

    public static function IDBuyFormGenerator($model ,$trow ,$length = 4 ,$prefix) {
        
        $data = $model::orderBy('BuyFormIdNo','desc')->first();

        if(!$data){
            $og_length = $length-1;
            $last_number = 1;
        }else{

            $code = (int)(substr($data->$trow, strlen($prefix)+1));
            $actial_last_number = ($code/1)*1;
            $increment_last_number = $actial_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;

        }

        $zeros = '';

        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }

        return $zeros.$last_number;
    }

    public static function IDHireFormGenerator($model ,$trow ,$length = 4 ,$prefix) {
        
        $data = $model::orderBy('HireFormIdNo','desc')->first();

        if(!$data){
            $og_length = $length-1;
            $last_number = 1;
        }else{

            $code = (int)(substr($data->$trow, strlen($prefix)+1));
            $actial_last_number = ($code/1)*1;
            $increment_last_number = $actial_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }

        $zeros = '';

        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }

        return $zeros.$last_number;
    }

}