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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255); // اسم الشخص
            $table->string('second_name', 255); // اسم الشخص
            $table->string('email'); // بريد إلكتروني
            $table->text('message'); // نص الرسالة
            $table->string('phone');
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
        Schema::dropIfExists('_contact_us');
    }
};
