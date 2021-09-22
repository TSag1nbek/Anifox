<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dates')->insert([
            ['date' => '1998', 'created_at' => '2021-08-31 03:14:16'],
            ['date' => '1999', 'created_at' => '2021-08-31 03:14:17'],
            ['date' => '2000', 'created_at' => '2021-08-31 03:14:18'],
            ['date' => '2001', 'created_at' => '2021-08-31 03:14:19'],
            ['date' => '2002', 'created_at' => '2021-08-31 03:14:20'],
            ['date' => '2003', 'created_at' => '2021-08-31 03:14:21'],
            ['date' => '2004', 'created_at' => '2021-08-31 03:14:22'],
            ['date' => '2005', 'created_at' => '2021-08-31 03:14:23'],
            ['date' => '2006', 'created_at' => '2021-08-31 03:14:24'],
            ['date' => '2007', 'created_at' => '2021-08-31 03:14:25'],
            ['date' => '2008', 'created_at' => '2021-08-31 03:14:26'],
            ['date' => '2009', 'created_at' => '2021-08-31 03:14:27'],
            ['date' => '2010', 'created_at' => '2021-08-31 03:14:28'],
            ['date' => '2011', 'created_at' => '2021-08-31 03:14:29'],
            ['date' => '2012', 'created_at' => '2021-08-31 03:14:30'],
            ['date' => '2013', 'created_at' => '2021-08-31 03:14:31'],
            ['date' => '2014', 'created_at' => '2021-08-31 03:14:32'],
            ['date' => '2015', 'created_at' => '2021-08-31 03:14:33'],
            ['date' => '2016', 'created_at' => '2021-08-31 03:14:34'],
            ['date' => '2017', 'created_at' => '2021-08-31 03:14:35'],
            ['date' => '2018', 'created_at' => '2021-08-31 03:14:36'],
            ['date' => '2019', 'created_at' => '2021-08-31 03:14:37'],
            ['date' => '2020', 'created_at' => '2021-08-31 03:14:38'],
            ['date' => '2021', 'created_at' => '2021-08-31 03:14:39'],
        ]);
    }
}
