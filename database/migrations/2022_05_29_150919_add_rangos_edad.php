<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert('insert into rangosEdad (id, rangoEdad) values (?, ?)', [1, '18-25']);
        DB::insert('insert into rangosEdad (id, rangoEdad) values (?, ?)', [2, '26-33']);
        DB::insert('insert into rangosEdad (id, rangoEdad) values (?, ?)', [3, '34-40']);
        DB::insert('insert into rangosEdad (id, rangoEdad) values (?, ?)', [4, '40+']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete rangosEdad where id = ?', [1]);
        DB::delete('delete rangosEdad where id = ?', [2]);
        DB::delete('delete rangosEdad where id = ?', [3]);
        DB::delete('delete rangosEdad where id = ?', [4]);
    }
};
