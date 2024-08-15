<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id()->autoIncrement();
            $table->string('first_name',100)->collation('utf8_general_ci');
            $table->string('last_name',100)->collation('utf8_general_ci');
            $table->string('email')->unique();
            $table->string('user_name',100)->collation('utf8_general_ci');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type', ['0', '1', '2'])->comment('0=Instructor | 1=Admin | 2=Super Admin');
            $table->integer('is_active')->default(1);
            $table->integer('is_approve')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        $user = new \App\Models\User();

        $user->first_name         = "Super";
        $user->last_name         = "Admin";
        $user->user_name         = "superadmin";
        $user->user_type         = "2";
        $user->email        = "superadmin21@gmail.com";
        $user->password     = bcrypt('superadmin21');
        $user->save();
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
