<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('documentacion', function (Blueprint $table) {
            // Add cliente_id column as a foreign key
            $table->unsignedBigInteger('cliente_id');  // Add the foreign key column
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');  // Define the foreign key relationship
        });
    }

    public function down()
    {
        Schema::table('documentacion', function (Blueprint $table) {
            // Remove the foreign key constraint and the column
            $table->dropForeign(['cliente_id']);
            $table->dropColumn('cliente_id');
        });
    }

};
