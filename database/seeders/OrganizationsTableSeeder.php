<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Noor Business Enterprise Ltd.',
                'address' => '28/G/1, Toyenbee Circular Road, Motijheel, Dhaka-1000',
                'bin_no' => '000956931-0202',
                'type' => '2',
                'created_at' => '2026-02-21 17:04:43',
                'updated_at' => '2026-02-21 17:14:05',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Maa Enterprise',
                'address' => 'Wireless Gate, Banani, Dhaka 1213',
                'bin_no' => '000956931-0785',
                'type' => '1',
                'created_at' => '2026-02-22 06:50:55',
                'updated_at' => '2026-02-22 06:52:53',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Bou er Dua Enterprise',
                'address' => 'Inner Circular Road, Moghbazar, Dhaka-1100',
                'bin_no' => '000957892-2062',
                'type' => '2',
                'created_at' => '2026-02-22 06:59:14',
                'updated_at' => '2026-02-22 06:59:14',
            ),
        ));
        
        
    }
}