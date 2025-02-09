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
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('company_name');
            $table->longtext('project_details');
            $table->boolean('replied');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('project_theme_id');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('project_theme_id')->references('id')->on('project_themes');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mails');
    }
};
