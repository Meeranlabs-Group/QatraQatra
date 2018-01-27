<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//        Schema::defaultStringLength(191);
        Schema::create('feature', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned();



//            $table->foreign('property_id')->references('id')->on('feature');

            $table->text('built_in_year')->nullable();
            $table->text('view')->nullable();
            $table->text('parking_space')->nullable();
            $table->text('double_glazed_window')->nullable();
            $table->text('central_air_conditioning')->nullable();
            $table->text('central_heating')->nullable();
            $table->text('flooring_type')->nullable();
            $table->text('electricity_backup_type')->nullable();
            $table->text('waste_disposal')->nullable();
            $table->string('total_number_of_floors')->nullable();
            $table->text('other_main_feature')->nullable();
            $table->text('furnished')->nullable();
            $table->text('lobby_in_building')->nullable();


            $table->text('floor')->nullable();
            $table->text('total_floor_building')->nullable();
            $table->text('number_of_elevators_in_building')->nullable();
            $table->text('service_elevators_in_building')->nullable();
            $table->text('public_parking')->nullable();
            $table->text('underground_parking')->nullable();
            $table->text('elevator_or_lift')->nullable();
            $table->text('number_of_units')->nullable();
            $table->text('broadband_internet_access')->nullable();
            $table->text('satellite_or_cable_tv_ready')->nullable();
            $table->text('intercom')->nullable();
            $table->text('other_business_and_communication')->nullable();
            $table->text('facilities')->nullable();
            $table->text('business_center_or_media_room_building')->nullable();
            $table->text('confrence_room_in_building')->nullable();
            $table->text('atm_and_machine_in_building')->nullable();
            $table->text('number_of_bedrooms')->nullable();
            $table->text('number_of_bathrooms')->nullable();
            $table->text('number_of_servant_quaters')->nullable();
            $table->text('drawing_room')->nullable();
            $table->text('dining_room')->nullable();
            $table->text('number_of_kitchens')->nullable();
            $table->text('study_room')->nullable();
            $table->text('prayer_room')->nullable();
            $table->text('powder_room')->nullable();
            $table->text('gym_room')->nullable();
            $table->text('steaming_room')->nullable();
            $table->text('number_of_store_rooms')->nullable();
            $table->text('lounge_or_sitting_room')->nullable();
            $table->text('laundry_room')->nullable();
            $table->text('other_room')->nullable();

            $table->text('nearby_schools')->nullable();
            $table->text('nearby_hospitals')->nullable();
            $table->text('nearby_shopping_malls')->nullable();
            $table->text('nearby_restaurants')->nullable();
            $table->text('distance_from_airport_kms')->nullable();
            $table->text('other_nearby_places')->nullable();
            $table->text('nearby_public_transport')->nullable();


            $table->text('lawn_or_garden')->nullable();
            $table->text('swimming_pool')->nullable();
            $table->text('sauna')->nullable();


            $table->text('jacuzzi')->nullable();
            $table->text('other_health_and_recreational')->nullable();
            $table->text('maintenance_staff')->nullable();
            $table->text('security_staff')->nullable();
            $table->text('facilities_for_disabled')->nullable();
            $table->text('other_facilities')->nullable();
            $table->text('laundry_or_dry_cleaning_facilities')->nullable();
            $table->text('communal_or_shared_kitchen_in_building')->nullable();
            $table->text('pet_policies')->nullable();
            $table->text('cctv_security_installed')->nullable();
            $table->text('cafeteria_or_canteen_in_building')->nullable();

            $table->text('pet_policy_type')->nullable();

            $table->text('possesion')->nullable();
            $table->text('corner')->nullable();
            $table->text('park_facing')->nullable();
            $table->text('disputed')->nullable();
            $table->text('file')->nullable();
            $table->text('balloted')->nullable();
            $table->text('sewerage')->nullable();
            $table->text('electricity')->nullable();
            $table->text('water_supply')->nullable();
            $table->text('sui_gas')->nullable();
            $table->text('boundry_wall')->nullable();

            $table->text('Irrigation')->nullable();
            $table->text('Tube_Wells')->nullable();
            $table->text('Accessible_by_Road')->nullable();
            $table->text('Perimeter_Fencing')->nullable();
            $table->text('Is_Land_Fertile')->nullable();
            $table->text('Boundary_Lines')->nullable();
            $table->text('Nearby_Water_Resources')->nullable();
            $table->text('Other_Land_Features')->nullable();



            $table->text('other_plot_features')->nullable();

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
        Schema::dropIfExists('feature');
    }
}
