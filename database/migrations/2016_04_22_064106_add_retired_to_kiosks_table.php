<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRetiredToKiosksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kiosks', function (Blueprint $table) {
            $table->boolean('retired')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kiosks', function (Blueprint $table) {
            $table->dropColumn('retired');
        });
    }
}
