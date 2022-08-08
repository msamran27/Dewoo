<?php

namespace Database\Seeders;
use App\Helpers\Bus;
use App\Models\Buses;
use Illuminate\Database\Seeder;

class BusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Bus::companyName() as $companyName) {
            Buses::create([
                'id' => $companyName['id'],
                'company_name' => $companyName['company_name'],
                'busSerial_no' => $companyName['busSerial_no'],
                'Made_in' => $companyName['Made_in'],
               

            ]);
        }

        // foreach (Bus::UpperBusinessClass() as $Upper_business_class) {
        //     Buses::create([
        //         'Upper_business_class' => $Upper_business_class['Upper_business_class'],
        //     ]);
        // }

        // foreach (Bus::BusinessClass() as $business_class) {
        //     Buses::create([
        //         'business_class' => $business_class['business_class'],
        //     ]);
        // }

        // foreach (Bus::EconomyClass() as $Economy_class) {
        //     Buses::create([
        //         'Economy_class' => $Economy_class['Economy_class'],
        //     ]);
        // }

        // foreach (Bus::busSerialNo() as $busSerial_no) {
        //     Buses::create([
        //         'busSerial_no' => $busSerial_no['busSerial_no'],
        //     ]);
        // }

        // foreach (Bus::busSerialNo() as $Made_in) {
        //     Buses::create([
        //         'Made_in' => $Made_in['Made_in'],
        //     ]);
        // }
    }
}
