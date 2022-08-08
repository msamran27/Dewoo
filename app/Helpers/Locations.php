<?php
namespace App\Helpers;

class Locations
{
    public static function province()
    {
        return
        [
            ['id'=>'1', 'name'=> 'Punjab'],
            ['id'=>'2', 'name'=> 'Khyber Pakhtunkhwa'],
            ['id'=>'3', 'name'=> 'sindh'],
            ['id'=>'4', 'name'=> 'Balochistan'],
            ['id'=>'5', 'name'=> 'Gilgit-Baltistan'],
            ['id'=>'6', 'name'=> 'Azad Kashmir'],

        ];
    }

    public static function cities()
    {
        return
        [
            ['id'=> '1', 'Province_id'=> '1','name'=> 'islamabad'],
            ['id'=> '2', 'Province_id'=> '2','name'=> 'Mardan'],
            ['id'=> '3', 'Province_id'=> '1','name'=> 'Rahimyarkhan'],
            ['id'=> '4', 'Province_id'=> '3','name'=> 'karachi'],
            ['id'=> '5', 'Province_id'=> '5','name'=> 'Skardu'],
            ['id'=> '6', 'Province_id'=> '3','name'=> 'Ghotki'],
            ['id'=> '7', 'Province_id'=> '3','name'=> 'Mirpur'],
            ['id'=> '8', 'Province_id'=> '6', 'name'=> 'Muzaffarabad'],
            ['id'=> '9','Province_id'=> '1','name'=> 'sadiqabad'],
            ['id'=> '10', 'Province_id'=> '6', 'name'=> 'Nakyal'],
            ['id'=> '11', 'Province_id'=> '1','name'=> 'lahore'],
            ['id'=> '12', 'Province_id'=> '5','name'=> 'Khaplu'],
            ['id'=> '13', 'Province_id'=> '1','name'=> 'Multan'],
            ['id'=> '14', 'Province_id'=> '3','name'=> 'Dadu'],
            ['id'=> '15', 'Province_id'=> '6', 'name'=> 'Neelam Valley'],
            ['id'=> '16', 'Province_id'=> '1', 'name'=> 'khanpur'],

        ];
    }
    public static function TrimnalArrival()
    {
        return
        [
            ['id'=> '1', 'city_id'=> '11', 'name'=> 'LAHORE THOKAR'],
            ['id'=> '2', 'city_id'=> '11', 'name'=> 'City Terminal Lahore'],
            ['id'=> '3', 'city_id'=> '2',  'name'=> 'Mardan Terminal'],
            ['id'=> '4', 'city_id'=> '3',  'name'=> 'Chowk Bahadurpur Terminal'],
            ['id'=> '5', 'city_id'=> '5',  'name'=> 'Skardu Terminal'],
            ['id'=> '6', 'city_id'=> '6',  'name'=> 'Daharki Terminal '],
            ['id'=> '7', 'city_id'=> '7',  'name'=> 'Mirpur Terminal'],
            ['id'=> '8', 'city_id'=> '8',  'name'=> 'Muzaffarabad Terminal'],
            ['id'=> '9','city_id'=> '9',   'name'=> 'sadiqabad Terminal'],
            ['id'=> '10', 'city_id'=> '10', 'name'=> 'Nakyal Terminal'],
            ['id'=> '11', 'city_id'=> '11', 'name'=> 'DHA Terminal Lahore'],
            ['id'=> '12', 'city_id'=> '12', 'name'=> 'Khaplu Terminal'],
            ['id'=> '13', 'city_id'=> '4',  'name'=> 'MORO Terminal'],
            ['id'=> '14', 'city_id'=> '4',  'name'=> 'Dadu Terminal'],
            ['id'=> '15', 'city_id'=> '15', 'name'=> 'Neelam Valley Terminal'],
            ['id'=> '16', 'city_id'=> '16', 'name'=> 'khanpur Terminal'],
            ['id'=> '17', 'city_id'=> '13', 'name'=> 'Multan(Main) Terminal'],

        ];
    }

    public static function TrimnalDeparture()
    {
        return
        [
            ['id'=> '1', 'city_id'=> '11', 'name'=> 'LAHORE THOKAR'],
            ['id'=> '2', 'city_id'=> '11', 'name'=> 'City Terminal Lahore'],
            ['id'=> '3', 'city_id'=> '2',  'name'=> 'Mardan Terminal'],
            ['id'=> '4', 'city_id'=> '3',  'name'=> 'Chowk Bahadurpur Terminal'],
            ['id'=> '5', 'city_id'=> '5',  'name'=> 'Skardu Terminal'],
            ['id'=> '6', 'city_id'=> '6',  'name'=> 'Daharki Terminal '],
            ['id'=> '7', 'city_id'=> '7',  'name'=> 'Mirpur Terminal'],
            ['id'=> '8', 'city_id'=> '8',  'name'=> 'Muzaffarabad Terminal'],
            ['id'=> '9','city_id'=> '9',   'name'=> 'sadiqabad Terminal'],
            ['id'=> '10', 'city_id'=> '10', 'name'=> 'Nakyal Terminal'],
            ['id'=> '11', 'city_id'=> '11', 'name'=> 'DHA Terminal Lahore'],
            ['id'=> '12', 'city_id'=> '12', 'name'=> 'Khaplu Terminal'],
            ['id'=> '13', 'city_id'=> '4',  'name'=> 'MORO Terminal'],
            ['id'=> '14', 'city_id'=> '4',  'name'=> 'Dadu Terminal'],
            ['id'=> '15', 'city_id'=> '15', 'name'=> 'Neelam Valley Terminal'],
            ['id'=> '16', 'city_id'=> '16', 'name'=> 'khanpur Terminal'],
            ['id'=> '17', 'city_id'=> '13', 'name'=> 'Multan(Main) Terminal'],
        ];
    }


}