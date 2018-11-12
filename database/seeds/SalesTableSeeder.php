<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sale::insert([

			[	
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 1,
				'product_id' => 1,
				'qty' => 2,
				'price' => 800000
			],

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 1,
				'product_id' => 2,
				'qty' => 5,
				'price' => 2500000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 2,
				'product_id' => 1,
				'qty' => 1,
				'price' => 400000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 3,
				'product_id' => 3,
				'qty' => 1,
				'price' => 7500000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 4,
				'product_id' => 4,
				'qty' => 6,
				'price' => 4800000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 5,
				'product_id' => 5,
				'qty' => 1,
				'price' => 150000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 6,
				'product_id' => '6',
				'qty' => 12,
				'price' => 4800000
			], 

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 4,
				'product_id' => 7,
				'qty' => 4,
				'price' => 1000000
			],

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 5,
				'product_id' => 8,
				'qty' => 2,
				'price' => 160000
			],

			[
				'date' => date('d-m-Y H:i:s'),
				'cust_id' => 2,
				'product_id' => 8,
				'qty' => 6,
				'price' => 4200000
			],      	

		]);
    }
}
