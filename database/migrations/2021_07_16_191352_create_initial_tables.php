<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotnetjobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('company_name');
            $table->string('company_type');
            $table->string('location');
            $table->string('url');
            $table->string('tags');
            $table->boolean('is_pinned')->default(false);
            $table->string('background_color')->default('#ffffff');
            $table->string('color')->default('#1F2937');
            $table->string('company_logo')->default('');
            $table->date('expiration_date');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dotnetjob_id');
            $table->unsignedBigInteger('user_id');
            $table->string('stripe_payment_id');
            $table->decimal('amount');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('dotnetjob_id')
                ->references('id')
                ->on('dotnetjobs')
                ->onDelete('cascade');
        });

        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
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
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('receipts');
        Schema::dropIfExists('subscribers');
    }
}