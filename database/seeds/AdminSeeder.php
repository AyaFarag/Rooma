<?php

use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Models\admin;
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt(123456);
        $admin->save();
    }
}
