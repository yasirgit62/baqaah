<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c1=new City;
        $c1->name='Abu Dhabi';
        $c1->save();
        
        $c2=new City;
        $c2->name='Ajman';
        $c2->save();
        
        $c3=new City;
        $c3->name='Sharjah';
        $c3->save();
        
        $c4=new City;
        $c4->name='Dubai';
        $c4->save();
        
        $c5=new City;
        $c5->name='Fujairah';
        $c5->save();
        
        $c6=new City;
        $c6->name='Ras Al Khaimah';
        $c6->save();
        
        $c7=new City;
        $c7->name='Umm Al Quwain';
        $c7->save();
       
    }
}
