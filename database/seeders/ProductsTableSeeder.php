<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 1,
                'name' => 'Demo Product',
                'created_at' => '2026-02-22 10:48:02',
                'updated_at' => '2026-02-22 10:48:02',
            ),
            1 => 
            array (
                'id' => 2,
                'organization_id' => 1,
                'name' => 'Resin',
                'created_at' => '2026-02-22 11:13:50',
                'updated_at' => '2026-02-22 11:13:50',
            ),
            2 => 
            array (
                'id' => 3,
                'organization_id' => 1,
                'name' => 'Food Color',
                'created_at' => '2026-02-22 11:20:33',
                'updated_at' => '2026-02-22 11:20:33',
            ),
            3 => 
            array (
                'id' => 4,
                'organization_id' => 4,
                'name' => 'Plastic',
                'created_at' => '2026-02-22 13:13:01',
                'updated_at' => '2026-02-22 13:13:01',
            ),
            4 => 
            array (
                'id' => 5,
                'organization_id' => 4,
                'name' => 'Powder Color',
                'created_at' => '2026-02-22 13:13:49',
                'updated_at' => '2026-02-22 13:13:49',
            ),
            5 => 
            array (
                'id' => 6,
                'organization_id' => 3,
                'name' => '2026 Accord Hybrid',
                'created_at' => '2026-02-22 13:18:19',
                'updated_at' => '2026-02-22 13:27:09',
            ),
            6 => 
            array (
                'id' => 7,
                'organization_id' => 3,
                'name' => '2026 Civic Hatchback Hybrid',
                'created_at' => '2026-02-22 13:22:26',
                'updated_at' => '2026-02-22 13:22:26',
            ),
        ));
        
        
    }
}