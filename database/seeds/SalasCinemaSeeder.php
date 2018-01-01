<?php

use Illuminate\Database\Seeder;
use App\SalasCinema;

class SalasCinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('sala')->truncate(); // truncate its for clean the column

        SalasCinema::create([
            'cinemas_id' => '1',
            'salas_id' => '1'
        ]);
        SalasCinema::create([
            'cinemas_id' => '1',
            'salas_id' => '2'
        ]);
        SalasCinema::create([
            'cinemas_id' => '1',
            'salas_id' => '3'
        ]);
        SalasCinema::create([
            'cinemas_id' => '1',
            'salas_id' => '4'
        ]);

    }
}
