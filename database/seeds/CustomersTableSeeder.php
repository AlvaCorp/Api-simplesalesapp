<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Customer::insert([	

        	[
        		'name' => 'Fitra Aziz',
        		'phone' => '083898343040',
        		'email' => 'fitraaziz71@gmail.com'
        	],

        	[
        		'name' => 'Sholeh Zuamsyah',
        		'phone' => '089637408979',
        		'email' => 'sholehzuam@gmail.com'
        	],

        	[
        		'name' => 'Agus Supriatna',
        		'phone' => '083898345090',
        		'email' => 'agussupriatna@gmail.com'
        	],

        	[
        		'name' => 'Yusuf Al',
        		'phone' => '089657894532',
        		'email' => 'yusufal@gmail.com'
        	],

        	[
        		'name' => 'Syarif Hidayatullah',
        		'phone' => '085789797867',
        		'email' => 'syarifhidayatullah@gmail.com'
        	],

        	[
        		'name' => 'Achmad Muhyidin',
        		'phone' => '085389789089',
        		'email' => 'achmadmuhyidin@gmail.com'
        	],
        ]);
    }
}
