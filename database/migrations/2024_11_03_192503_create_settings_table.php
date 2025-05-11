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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Website name
            $table->string('phone')->nullable(); // Phone
            $table->string('email')->nullable(); // Email
            $table->string('location')->nullable(); // Email
            $table->text('logo')->nullable(); // Logo file path
            $table->text('header_icon')->nullable(); // Logo file path
            $table->text('footer_icon')->nullable(); // Logo file path
            $table->text('video')->nullable(); // Logo file path
            $table->string('primary_color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->longText('facebook_link')->nullable(); // Facebook link
            $table->longText('twitter_link')->nullable(); // Twitter link
            $table->longText('telegram_link')->nullable(); // Telegram link
            $table->longText('linkedin_link')->nullable(); // LinkedIn link
            $table->longText('youtube_link')->nullable(); // YouTube link
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
        Schema::dropIfExists('settings');
    }
};
