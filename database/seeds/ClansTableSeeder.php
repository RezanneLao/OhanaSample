<?php

use Illuminate\Database\Seeder;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clans =
        [
            [
                'cid' => '001',
                'clanId' => '0001',
                'id' => '1', 
                'pid' => null, 
                'relationship' => null,
                'maritalStatus' => null,
            ],
            [
                'cid' => '002',
                'clanId' => '0001',
                'id' => '1', 
                'pid' => '01', 
                'relationship' => 'mother',
                'maritalStatus' => null,
            ],
            [
                'cid' => '003',
                'clanId' => '0001',
                'id' => '1', 
                'pid' => '02', 
                'relationship' => 'father',
                'maritalStatus' => null,
            ],
            [
                'cid' => '004',
                'clanId' => '0001',
                'id' => '1', 
                'pid' => '03', 
                'relationship' => 'husband',
                'maritalStatus' => 'married',
            ],
            [
                'cid' => '005',
                'clanId' => '0001',
                'id' => '1', 
                'pid' => '04', 
                'relationship' => 'son',
                'maritalStatus' => null,
            ],
            [
                'cid' => '006',
                'clanId' => '0002',
                'id' => '2', 
                'pid' => null, 
                'relationship' => null,
                'maritalStatus' => null,
            ],
        ];
                
		DB::table('clans')->insert($clans);
    }
}
