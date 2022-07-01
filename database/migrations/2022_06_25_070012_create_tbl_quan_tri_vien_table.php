<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('tbl_quan_tri_vien', function (Blueprint $table) {
            $table->increments('qtv_id');
            $table->string('qtv_email',100);
            $table->string('qtv_mat_khau');
            $table->string('qtv_ten');
            $table->string('qtv_sdt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_quan_tri_vien');
    }
};
