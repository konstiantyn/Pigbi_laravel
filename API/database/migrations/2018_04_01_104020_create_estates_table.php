<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Address')->nullable(true);
            $table->integer('ListPrice')->nullable(true);
            $table->string('ListingURL')->nullable(true);
            $table->string('ProviderName')->nullable(true);
            $table->string('ProviderURL')->nullable(true);
            $table->string('ProviderCategory')->nullable(true);
            $table->string('LeadRoutingEmail')->nullable(true);
            $table->integer('Bedrooms')->nullable(true);
            $table->integer('Bathrooms')->nullable(true);
            $table->string('PropertyType')->nullable(true);
            $table->string('PropertySubType')->nullable(true);
            $table->string('ListingKey')->nullable(true);
            $table->string('ListingCategory')->nullable(true);
            $table->string('ListingStatus')->nullable(true);
            $table->text('MarketingInformation')->nullable(true);
            $table->text('Photos')->nullable(true);
            $table->string('DiscloseAddress')->nullable(true);
            $table->text('ListingDescription')->nullable(true);
            $table->string('MlsId')->nullable(true);
            $table->string('MlsName')->nullable(true);
            $table->integer('MlsNumber')->nullable(true);
            $table->integer('LivingArea')->nullable(true);
            $table->double('LotSize', 8, 2)->nullable(true);
            $table->integer('YearBuilt')->nullable(true);
            $table->string('ListingDate')->nullable(true);
            $table->string('ListingTitle')->nullable(true);
            $table->integer('FullBathrooms')->nullable(true);
            $table->integer('ThreeQuarterBathrooms')->nullable(true);
            $table->integer('HalfBathrooms')->nullable(true);
            $table->integer('OneQuarterBathrooms')->nullable(true);
            $table->integer('PartialBathrooms')->nullable(true);
            $table->text('ListingParticipants')->nullable(true);
            $table->text('Offices')->nullable(true);
            $table->text('Brokerage')->nullable(true);
            $table->text('Location')->nullable(true);
            $table->text('Taxes')->nullable(true);
            $table->text('DetailedCharacteristics')->nullable(true);
            $table->string('ModificationTimestamp')->nullable(true);
            $table->text('Disclaimer')->nullable(true);
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
        Schema::dropIfExists('estates');
    }
}
