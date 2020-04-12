<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1,'email'=>'Lecongtai@yahoo.com.vn','name'=>'Le Cong Tai','password'=>'$2y$10$4jjw3Y7Wc2Z0P6XuqTgpIetY5kRD5ov3QVnXt4dnU5K2d/vt1Id3.'],
            ['id' => 2,'email'=>'Lecongta2i@yahoo.com.vn','name'=>'Le Cong Tai 2','password'=>'$2y$10$4jjw3Y7Wc2Z0P6XuqTgpIetY5kRD5ov3QVnXt4dnU5K2d/vt1Id3.'],
            ['id' => 3,'email'=>'Lecongta3i@yahoo.com.vn','name'=>'Le Cong Tai 3','password'=>'$2y$10$4jjw3Y7Wc2Z0P6XuqTgpIetY5kRD5ov3QVnXt4dnU5K2d/vt1Id3.']
        ]);
    }
}
