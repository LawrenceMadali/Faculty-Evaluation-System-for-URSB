<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(InstructorSeeder::class);
        $this->call(SchoolYearSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(YearAndSectionSeeder::class);
        $this->call(CourseCodeseeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(StudentSeeder::class);
        $this->call(StudentRaterFormQuestionairSeeder::class);
        $this->call(PeerRaterFormQuestionairSeeder::class);
    }
}
