<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class GeschenklisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('geschenkliste')->insert([
           'users_id' => 1,
            'gift'       => 'Guetzlipack',
        ]);

        DB::table('geschenkliste')->insert([
            'users_id' => 2,
            'gift'       => 'Zahnbürste',
        ]);
        
         DB::table('geschenkliste')->insert([
           'users_id' => 3,
            'gift'       => 'Lavendel-Seife',
        ]);

        DB::table('geschenkliste')->insert([
            'users_id' => 4,
            'gift'       => 'Gin',
        ]);
        
         DB::table('geschenkliste')->insert([
           'users_id' => 5,
            'gift'       => 'Gutschein fürs b.good',
        ]);

        DB::table('geschenkliste')->insert([
            'users_id' => 6,
            'gift'       => 'Zoo-Gutschein',
        ]);
        
         DB::table('geschenkliste')->insert([
           'users_id' => 7,
            'gift'       => 'Abwasch-Bürste',
        ]);

        DB::table('geschenkliste')->insert([
            'users_id' => 8,
            'gift'       => 'Schlüsselanhänger blau',
        ]);
        
         DB::table('geschenkliste')->insert([
           'users_id' => 9,
            'gift'       => 'Schlüsselanhänger rot',
        ]);

        DB::table('geschenkliste')->insert([
            'users_id' => 10,
            'gift'       => 'Knuspermüsli',
        ]);
        
    
        
        
    }
}
