<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('users')->insert([
            [
                'username' => 'Admin',
                'email' => 'admin@mail.ru',
                'password' => '$2y$10$QP/D3ieyfz1U5fxRnCwdL.d.SpC4hNGOpQ5elBjp/1v1XDcP3S9me',
                'is_admin' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
