<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('student_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('nationality');

            // Guardian Information
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_email')->nullable();
            $table->string('relationship');
            $table->text('guardian_address');

            // Education Details
            $table->string('entry_level');
            $table->string('previous_school')->nullable();

            // Health Information
            $table->text('allergies')->nullable();
            $table->text('medical_conditions')->nullable();

            // Emergency Contact
            $table->string('emergency_name');
            $table->string('emergency_phone');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_enrollments');
    }
};
