<?php

use Illuminate\Database\Seeder;

class PotentialUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $potentialUsers =
        [
            [
                'pid' => '01',
                'email' => 'mollyweasley@gmail.com', 
                'firstName' => 'Molly',
                'middleName' => null,
                'lastName' => 'Prewett',
                'gender' => 'female',
                'livingStatus' => 'living',
                'birthDate' => '1971-02-17',
                'birthPlace' => 'Cebu',
                'relationship' => 'mother',
                'role' => 'contributor',
            ],
            [
                'pid' => '02',
                'email' => 'arthurweasley@gmail.com', 
                'firstName' => 'Arthur',
                'middleName' => 'Black',
                'lastName' => 'Weasley',
                'gender' => 'male',
                'livingStatus' => 'living',
                'birthDate' => '1970-03-21',
                'birthPlace' => 'Cebu',
                'relationship' => 'father',
                'role' => 'contributor',
            ],
            [
                'pid' => '03',
                'email' => 'harrypotter@gmail.com', 
                'firstName' => 'Harry',
                'middleName' => 'Evans',
                'lastName' => 'Potter',
                'gender' => 'male',
                'livingStatus' => 'living',
                'birthDate' => '1996-04-30',
                'birthPlace' => 'Cebu',
                'relationship' => 'husband',
                'role' => 'contributor',
            ],
            [
                'pid' => '04',
                'email' => 'albuspotter@gmail.com', 
                'firstName' => 'Albus',
                'middleName' => 'Weasley',
                'lastName' => 'Potter',
                'gender' => 'male',
                'livingStatus' => 'living',
                'birthDate' => '2023-05-02',
                'birthPlace' => 'Cebu',
                'relationship' => 'son',
                'role' => 'contributor',
            ]
        ];
                
		DB::table('potentialUsers')->insert($potentialUsers);
    }
}
