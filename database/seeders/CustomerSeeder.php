<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert( [
            [
                'video_url' => 'https://www.youtube.com/watch?v=zK-YBZ6raHU',
                'title' => 'Getting it right the last time', 
                'views' => '200',
                'size' => '324',
                'last_modified' =>  Carbon::parse(Carbon::now()->subMonth(2))->month. ' month ago',
            ],
            [
                'video_url'=>'https://www.youtube.com/watch?v=OLr33BKumVE&list=PL9RiXq3CWn9pbV-g6d7VgnlPRSyBVpweq&index=2',
                'title' => 'Getting it right the last time', 
                'views' => '200',
                'size' => '324',
                'last_modified' =>  Carbon::parse(Carbon::now()->subMonth(4))->month. ' month ago',
           ],
           [
                'video_url' => 'https://www.youtube.com/watch?v=H5v3kku4y6Q&list=PL9RiXq3CWn9pbV-g6d7VgnlPRSyBVpweq&index=5',
                'title' => 'Getting it right the last time', 
                'views' => '200',
                'size' => '324',
                'last_modified' =>  Carbon::parse(Carbon::now()->subMonth(5))->month.  ' month ago',    
             ],
            [
                'video_url' => 'https://www.youtube.com/watch?v=TO-_3tck2tg&list=PL9RiXq3CWn9pbV-g6d7VgnlPRSyBVpweq&index=2',
                'title' => 'Getting it right the last time', 
                'views' => '200',
                'size' => '324',
                'last_modified' =>  Carbon::parse(Carbon::now())->month.  ' month ago',
            ],
          ]);  
    }
}
