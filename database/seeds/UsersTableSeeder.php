<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не известен',
                'email' => 'author_unknown@g.g',
                'password' => password_hash(Str::random(16), PASSWORD_BCRYPT),
            ],
            [
                'name' => 'Автор не известен',
                'email' => 'author@g.g',
                'password' => password_hash('123123', PASSWORD_BCRYPT),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
