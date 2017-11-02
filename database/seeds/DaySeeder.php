<?php

use Illuminate\Database\Seeder;
use App\Models\Day;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c1=new Day;
        $c1->name='Sunday';
        $c1->save();
        
        $c2=new Day;
        $c2->name='Monday';
        $c2->save();
        
        $c3=new Day;
        $c3->name='Tuesday';
        $c3->save();
        
        $c4=new Day;
        $c4->name='Wednesday';
        $c4->save();
        
        $c5=new Day;
        $c5->name='Thursday';
        $c5->save();
        
        $c6=new Day;
        $c6->name='Friday';
        $c6->save();
        
        $c7=new Day;
        $c7->name='Saturday';
        $c7->save();
       
    }
}
