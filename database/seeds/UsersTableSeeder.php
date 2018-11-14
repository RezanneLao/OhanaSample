<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
        [
            [
                'id' => '1',
                'email' => 'ginnypotter@gmail.com', 
                'password' => bcrypt('ginnypotter'),
                'firstName' => 'Ginevra',
                'middleName' => 'Weasley',
                'lastName' => 'Potter',
                'gender' => 'female',
                'livingStatus' => 'living',
                'birthDate' => '1997-01-10',
                'birthPlace' => 'Cebu',
                'barangay' => 'Lungsod',
                'city' => 'Minglanilla',
                'postalCode' => '6045',
                'streetAddress' => 'Potters',
            ],
            [
                'id' => '2',
                'email' => 'albusdumbledore@gmail.com', 
                'password' => bcrypt('albusdumbledore'),
                'firstName' => 'Albus',
                'middleName' => null,
                'lastName' => 'Dumbledore',
                'gender' => 'male',
                'livingStatus' => 'living',
                'birthDate' => '1967-08-20',
                'birthPlace' => 'Cebu',
                'barangay' => 'Lungsod',
                'city' => 'Minglanilla',
                'postalCode' => '6045',
                'streetAddress' => 'Dumbledores',
            ]
        ];
                
		DB::table('users')->insert($users);
    }
}
