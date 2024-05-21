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
        Schema::create('carmodels', function (Blueprint $table) {
            $table->id();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->integer('camera360')->nullable();
            $table->integer('back_monitor')->nullable();
            $table->integer('new')->nullable();
            $table->integer('maker_id')->nullable();
            $table->string('model_name')->nullable();
            $table->string('color')->nullable();
            $table->string('price_24h')->nullable();
            $table->string('capacity')->nullable();
            $table->string('handle')->nullable();
            $table->string('displacement')->nullable();
            $table->string('fuel')->nullable();
            $table->string('size_l')->nullable();
            $table->string('size_w')->nullable();
            $table->string('size_h')->nullable();
            $table->string('insurance_deductible_property')->nullable();
            $table->string('insurance_deductible_vehicle')->nullable();
            $table->string('noc_self_propelled')->nullable();
            $table->string('noc_not_self_drive')->nullable();
            $table->string('model_year')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carmodels');
    }
};
