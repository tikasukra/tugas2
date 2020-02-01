<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert table mahasiswa menggunakan faker
        $faker = Faker\Factory::create('id_ID');

        for ($i=1; $i < 10 ; $i++) { 
        	# code...
        	DB::table('mahasiswa')->insert([
        		'nim' => $faker->numberBetween(12345,20000),
        		'nama' => $faker->name,
        		'alamat'=> $faker->address]);
        }
    }
}
