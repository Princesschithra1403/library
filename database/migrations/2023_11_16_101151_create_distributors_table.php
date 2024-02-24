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
        Schema::create('distributors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('distributionName');
            $table->string('userName');
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('mobileNumber'); 
            $table->string('distributionAddress');
            $table->string('city');
            $table->string('District');
            $table->string('state');
            $table->string('country');
            $table->string('postalCode');
            $table->string('usertype');
            $table->string('contactName');
            $table->string('contactEmail')->unique();
            $table->string('contactMobileNumber'); 
            $table->string('contactAddress');
            $table->string('contactCity');
            $table->string('contactDistrict');
            $table->string('contactState');
            $table->string('contactCountry');
            $table->string('contactPostalCode');
            $table->string('yearOfEstablishment');
            $table->string('noOfBooksAvailable');
            $table->json('language');
            $table->string('otherIndian')->nullable();
            $table->string('otherForeign')->nullable();
            $table->json('publisher');
            // $table->string('distributionProof');
            $table->string('dis_ownership');
            $table->string('gstProof')->nullable();
            $table->string('panOrTanProof')->nullable();
            $table->string('udyamProof')->nullable();
            $table->string('societyProof')->nullable();
            $table->string('certificationIncorporationProof')->nullable();
            $table->string('certificationRegistrationProof')->nullable();
            $table->string('partnershipDeedProof')->nullable();
            $table->string('llpProof')->nullable();
            $table->string('moaProof')->nullable();
            $table->string('aoaProof')->nullable();
            $table->string('bookCatalogue');
            $table->string('haveSubsidiary');
            $table->json('subsidiary')->nullable();
            $table->string('declaration');
            $table->string('profileImage')->nullable();
            $table->string('backgroundImage')->nullable();
            $table->enum('approved_status',['pending','approve','reject'])->default('pending');
            $table->enum('status',['1','0'])->default('0');
            $table->enum('verfication',['1','0'])->default('0');

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
        Schema::create('distributors', function (Blueprint $table) {
            $table->string('profileImage');
            $table->string('backgroundImage');
            $table->string('otherIndian');
            $table->string('otherForeign');
            $table->json('subsidiary');
            $table->string('gstProof');
            $table->string('panOrTanProof');
            $table->string('udyamProof');
            $table->string('certificationIncorporationProof');
            $table->string('certificationRegistrationProof');
            $table->string('partnershipDeedProof');
            $table->string('llpProof');
            $table->string('moaProof');
            $table->string('aoaProof');
            $table->string('societyProof');
            
        });
    }
};
