<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("expense_name", 55);
            $table->string("expense_desc", 255)->nullable();
            $table->enum("expense_type", ["income", "expense"])->default("income");
            $table->decimal("expense_amount", 12, 2);
            $table->date("entry_date")->default(DB::raw("CURRENT_TIMESTAMP"));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
