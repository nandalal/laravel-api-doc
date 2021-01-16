<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMobileStateDistrictPlaceToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 100)->after('remember_token')->nullable();
            $table->integer('state_id')->after('phone');
            $table->integer('district_id')->after('state_id');
            $table->string('place', 100)->after('district_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('state_id');
            $table->dropColumn('district_id');
            $table->dropColumn('place');
        });
    }
}
