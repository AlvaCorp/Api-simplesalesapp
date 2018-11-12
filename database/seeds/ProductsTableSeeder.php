<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::insert([

        	[
        		'name' => 'Mouse Razer',
        		'category_id' => '1',
        		'price' => 400000
        	],

        	[
        		'name' => 'Keyboard Razer',
        		'category_id' => '2',
        		'price' => 500000
        	],

        	[
        		'name' => 'Laptop Lenovo Ideapad 310',
        		'category_id' => '3',
        		'price' => 7500000
        	],

        	[
        		'name' => 'RAM 8 GB DDR3',
        		'category_id' => '4',
        		'price' => 800000
        	],

        	[
        		'name' => 'Headset Rexus Rainbow',
        		'category_id' => '5',
        		'price' => 150000
        	],

        	[
        		'name' => 'RAM 4 GB DDR3',
        		'category_id' => '4',
        		'price' => 400000
        	],

        	[
        		'name' => 'Keyboard Rexus',
        		'category_id' => '2',
        		'price' => 250000
        	],

        	[
        		'name' => 'Headset Razer',
        		'category_id' => '5',
        		'price' => 750000
        	],

        	[
        		'name' => 'Mouse Rexus RX-110',
        		'category_id' => '1',
        		'price' => 80000
        	],

        	[
        		'name' => 'RAM 4GB DDR4',
        		'category_id' => '4',
        		'price' => 700000
        	],

        ]);
    }
}
