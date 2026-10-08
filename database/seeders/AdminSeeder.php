<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Prodi',
                'email' => 'admin@prodihukum.test',
                'password' => bcrypt('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('users')->where('email', 'admin@prodihukum.test')->delete();
    }
};
