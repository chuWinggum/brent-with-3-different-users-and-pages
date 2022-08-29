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
        Schema::create('accounts_table', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('account_email')->unique();
            $table->string('account_password');
            $table->boolean('account_email_verified');
            $table->integer('account_role')->unassigned();
            $table->timestamp('account_created_at')->useCurrent();
            $table->timestamp('account_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_table');
    }
};
