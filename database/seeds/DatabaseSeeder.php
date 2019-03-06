<?php

use Illuminate\Database\Seeder;
use App\Name;
class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
     
        $names = factory(Name::class, 20)->create();   
       
    }
}
