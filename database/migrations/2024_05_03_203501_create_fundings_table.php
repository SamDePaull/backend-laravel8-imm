<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grant_id');
            $table->unsignedBigInteger('grantee_id');
            $table->decimal('funding_amount', 15, 2);
            $table->date('funding_date');
            $table->string('source');
            $table->timestamps();

            $table->foreign('grant_id')->references('id')->on('grants');
            $table->foreign('grantee_id')->references('id')->on('grantees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fundings');
    }
}
