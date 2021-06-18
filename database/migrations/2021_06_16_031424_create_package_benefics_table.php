<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBeneficsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_benefics', function (Blueprint $table) {
            $table->foreignUuid('package_id')->constrained('packages')->onDelete('cascade');
            $table->foreignUuid('benefic_id')->constrained('benefics')->onDelete('cascade');
            $table->boolean('ilimited')->default(false);
            $table->unsignedInteger('quantity')->default(0);
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('package_benefics');
    }
}
