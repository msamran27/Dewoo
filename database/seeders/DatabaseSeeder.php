<?php

namespace Database\Seeders;

use App\Models\BusCancel;
use App\Models\Buses;
use App\Models\City;
use App\Models\Custmer;
use App\Models\Complaint;
use App\Models\other;
use App\Models\Province;
use App\Models\RefundTicket;
use App\Models\Services;
use App\Models\ServicesComplaint;
use App\Models\Ticket;
use App\Models\ticket_not_issued;
use App\Models\TrimnalArrival;
use App\Models\TrimnalDeparture;
use CreateTicketNotIssuedsTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\user::factory(10)->create();

    //      \App\Models\BusCancel::factory(10)->create();
    //     \App\Models\Buses::factory(10)->create();
    //     \App\Models\City::factory(10)->create();
    //     \App\Models\Complaint::factory(10)->create();
    //    \App\Models\Custmer::factory(10)->create();
    //     \App\Models\other::factory(10)->create();
    //    \App\Models\Province::factory(10)->create();
    //   \App\Models\RefundTicket::factory(10)->create();
    //     \App\Models\ServicesComplaint::factory(10)->create();
    //     \App\Models\Services::factory(10)->create();
    //     \App\Models\TrimnalArrival::factory(10)->create();
    //     \App\Models\TrimnalDeparture::factory(10)->create();
    //     \App\Models\Ticket::factory(10)->create();
    //   \App\Models\ticket_not_issued::factory(10)->create();

    //     $this->call(user::class);

    //     $this->call(BusCancelSeeder::class);
        // $this->call(BusesSeeder::class);
    //    $this->call(CitySeeder::class);
    //     $this->call(ComplaintSeeder::class);
        // $this->call(CustmerSeeder::class);
    //     $this->call(OtherSeeder::class);
        // $this->call(ProvinceSeeder::class);
    //     $this->call(RefundTicketSeeder::class);
    //     $this->call(ServicesComplaintSeeder::class);
    //     $this->call(ServicesSeeder::class);
        // $this->call(TrimnalArrivalSeeder::class);
        // $this->call(TrimnalDepartureSeeder::class);
    //     $this->call(TicketSeeder::class);
    //     $this->call(TicketNotIssuedSeeder::class);



    }
}
