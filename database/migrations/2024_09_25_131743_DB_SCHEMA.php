<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('registers',function(Blueprint $table){
            $table->increments('register_id');  // Assuming auto-incrementing primary key
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->dateTime('birthdate');
            $table->string('nationality', 50);
            $table->string('country', 50);
            $table->string('state', 80);
            $table->integer('zip_code');
            $table->string('gender', 20);
            $table->string('user_type', 10);
            $table->string('email', 80)->unique(); // Assuming emails should be unique
            $table->timestamps();
            $table->string('password',255); 
        });

        /*Schema::create('artwork_product_info', function (Blueprint $table) {
            $table->id('artwork_id');
            $table->string('title', 255);
            $table->string('description', 255);
            $table->integer('qty_on_hand');
            $table->decimal('unit_price', 10, 2); // Adjust precision and scale as needed
            $table->string('image_filename', 100);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); // Assuming a 'users' table
            $table->timestamps();
        });*/
       /* Schema::create('user_accounts',function(Blueprint $table){
            $table->id('user_id')->primary();
            $table->string('email');
            $table->string('password');
            $table->foreign('register_id');
            $table->foreignId('register_id')->references('register_id')->on('registers')->onDelete('cascade');

        });
        */
    }
        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
