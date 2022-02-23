<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInputTypeToFormInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_inputs', function (Blueprint $table) {

            // 1. Create new column
            // You probably want to make the new column nullable
            $table->string('input_type')->after('name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_inputs', function (Blueprint $table) {
            $table->string('input_type')->after('name');
        });
    }
}
