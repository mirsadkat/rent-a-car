<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'mirsadkat@gmail.com',
            'password' => bcrypt('admin1'),
            'phone' => '061222333',
            'role_id' => 1,
            'is_active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
        	'name' => 'admin2',
        	'email' => 'borna@gmail.com',
            'password' => bcrypt('admin2'),
            'phone' => '0611234567',
            'role_id' => 1,
            'is_active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'BMW',
            'model' => '530',
            'godiste' => '2006',
            'tip' => 'Limuzina',
            'gorivo' => 'Dizel',
            'kubikaza' => '3.0',
            'slika' => 'slike/bmw-530.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'BMW',
            'model' => 'X5',
            'godiste' => '2007',
            'tip' => 'Terenac',
            'gorivo' => 'Dizel',
            'kubikaza' => '3.0',
            'slika' => 'slike/bmw-x5.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Dacia',
            'model' => 'Logan',
            'godiste' => '2007',
            'tip' => 'Limuzina',
            'gorivo' => 'Benzin',
            'kubikaza' => '1.6',
            'slika' => 'slike/dacia-logan.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Ford',
            'model' => 'Focus',
            'godiste' => '2006',
            'tip' => 'Kompakt',
            'gorivo' => 'Dizel',
            'kubikaza' => '1.6',
            'slika' => 'slike/ford-focus.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Golf',
            'model' => '5',
            'godiste' => '2005',
            'tip' => 'Kompakt',
            'gorivo' => 'Benzin',
            'kubikaza' => '1.6',
            'slika' => 'slike/golf-5.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Golf',
            'model' => '7',
            'godiste' => '2013',
            'tip' => 'Kompakt',
            'gorivo' => 'Dizel',
            'kubikaza' => '1.6',
            'slika' => 'slike/golf-7.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Opel',
            'model' => 'Zafira',
            'godiste' => '2006',
            'tip' => 'Monovolumen',
            'gorivo' => 'Dizel',
            'kubikaza' => '1.9',
            'slika' => 'slike/opel-zafira.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Peugeot',
            'model' => '307',
            'godiste' => '2005',
            'tip' => 'Kompakt',
            'gorivo' => 'Dizel',
            'kubikaza' => '2.0',
            'slika' => 'slike/peugeot-307.jpg'
        ]);
        DB::table('vehicles')->insert([
            'marka' => 'Skoda',
            'model' => 'Fabia',
            'godiste' => '2010',
            'tip' => 'Kompakt',
            'gorivo' => 'Dizel',
            'kubikaza' => '1.9',
            'slika' => 'slike/skoda-fabia.jpg'
        ]);
    }
}
