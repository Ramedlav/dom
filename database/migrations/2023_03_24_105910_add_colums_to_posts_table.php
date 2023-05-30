<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedSmallInteger('telephone')->nullable()->after('garden');
            $table->unsignedSmallInteger('cable_tv')->nullable()->after('garden');
            $table->unsignedSmallInteger('internet')->nullable()->after('garden');
            $table->unsignedSmallInteger('closed_area')->nullable()->after('garden');
            $table->unsignedSmallInteger('intercom_videophone')->nullable()->after('garden');
            $table->unsignedSmallInteger('alarm_system')->nullable()->after('garden');
            $table->unsignedSmallInteger('anti_burglar_doors_windows')->nullable()->after('garden');
            $table->unsignedSmallInteger('monitoring_protection')->nullable()->after('garden');
            $table->unsignedSmallInteger('anti_burglary_blinds')->nullable()->after('garden');
            $table->unsignedSmallInteger('oven')->nullable()->after('garden');
            $table->unsignedSmallInteger('dishwasher')->nullable()->after('garden');
            $table->unsignedSmallInteger('stove')->nullable()->after('garden');
            $table->unsignedSmallInteger('washing_machine')->nullable()->after('garden');
            $table->unsignedSmallInteger('tv_set')->nullable()->after('garden');
            $table->unsignedSmallInteger('refrigerator')->nullable()->after('garden');
            $table->unsignedSmallInteger('furniture')->nullable()->after('garden');
            $table->date('available_date')->nullable()->after('garden');
            $table->unsignedBigInteger('finish_condition')->nullable()->after('garden');
            $table->unsignedInteger('year_construction')->nullable()->after('garden');
            $table->unsignedBigInteger('heating')->nullable()->after('garden');
            $table->unsignedBigInteger('windows')->nullable()->after('garden');
            $table->unsignedBigInteger('material')->nullable()->after('garden');
            $table->unsignedBigInteger('floors')->nullable()->after('garden');
            $table->unsignedBigInteger('floor')->nullable()->after('garden');
            $table->unsignedBigInteger('type_construction')->nullable()->after('garden');
            $table->unsignedSmallInteger('basement')->nullable()->after('garden');
            $table->unsignedSmallInteger('elevator')->nullable()->after('garden');
            $table->unsignedSmallInteger('air_conditioning')->nullable()->after('garden');
            $table->unsignedSmallInteger('only_for_non_smokers')->nullable()->after('garden');
            $table->unsignedSmallInteger('separate_kitchen')->nullable()->after('garden');
            $table->unsignedSmallInteger('two_level')->nullable()->after('garden');
            $table->unsignedSmallInteger('room_utilitarian')->nullable()->after('garden');
            $table->unsignedSmallInteger('type_announcement')->nullable()->after('title');
            $table->unsignedSmallInteger('rent_price')->nullable()->after('price');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
