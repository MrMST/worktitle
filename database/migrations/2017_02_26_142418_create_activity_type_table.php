<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTypeTable extends Migration
{
    private $tablename = 'activity_type';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablename, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('time_span'); // days the quest is running
            $table->integer('required_actions'); // amount of actions one needs
            $table->integer('action_day_span'); // 1 action per 5 day, 30 days, 180 day, 365 day etc
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
        Schema::drop($this->tablename);
    }
}
