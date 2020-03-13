<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("No one");
            $table->string('photo')->default("122345");
            $table->string('role')->default("student");
            $table->integer('age')->default(22);
            $table->string('phone_number')->default("974472277");
            $table->string('address')->default("no");
            $table->string('city')->default("nothing");
            $table->string('state')->default("nothing");
            $table->string('country')->default("nothing");
            $table->string('postal_code')->default("nothing");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(bcrypt("password"));
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'Bekzod',
                'password' =>bcrypt('begzod12345'),
                'email'=>'erkinovbegzod.45@gmail.com',
                'email_verified_at'=>'2020-03-14 00:00:00'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
