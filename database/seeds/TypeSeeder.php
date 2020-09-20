<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // 1
        DB::table('types')->insert([
            'name' => '01. Security Vision',
            'details' => '1 Security Vision and Responsibility',
            'slug' => 'security-vision',
            'status'=> 1,
        ]);
        // 2
        DB::table('types')->insert([
            'name' => '02. Risk Assessment',
            'details' => '2 Risk Assessment',
            'slug' => 'risk-assessment',
            'status'=> 1,
        ]);
        // 3
        DB::table('types')->insert([
            'name' => '03. Business Partner Security',
            'details' => '3 Business Partner Security',
            'slug' => 'business-partner-security',
            'status'=> 1,
        ]);
         // 4
         DB::table('types')->insert([
            'name' => '04. Cybersecurity',
            'details' => '4 Cybersecurity',
            'slug' => 'cybersecurity',
            'status'=> 1,
        ]);
         // 5
         DB::table('types')->insert([
            'name' => '05. CIIT Security',
            'details' => '5 Conveyance and Instruments of International Traffic Security ',
            'slug' => 'ciit-security',
            'status'=> 1,
        ]);
         // 6
         DB::table('types')->insert([
            'name' => '06. Seal Security',
            'details' => '6 Seal Security',
            'slug' => 'seal-security',
            'status'=> 1,
        ]);
         // 7
         DB::table('types')->insert([
            'name' => '07. Procedural Security',
            'details' => '7 Procedural Security',
            'slug' => 'procedural-security',
            'status'=> 1,
        ]);
         // 8
         DB::table('types')->insert([
            'name' => '08. Agricultural Security',
            'details' => '8 Agricultural Security',
            'slug' => 'agricultural-security',
            'status'=> 1,
        ]);
         // 9
         DB::table('types')->insert([
            'name' => '09. Physical Access Controls',
            'details' => '9 Physical Access Controls',
            'slug' => 'physical-access-controls',
            'status'=> 1,
        ]);
         // 10
         DB::table('types')->insert([
            'name' => '10. Physical Security',
            'details' => '10 Physical Security',
            'slug' => 'physical-security',
            'status'=> 1,
        ]);
         // 11
         DB::table('types')->insert([
            'name' => '11. Personnel Security',
            'details' => '11 Personnel Security',
            'slug' => 'personnel-security',
            'status'=> 1,
        ]);
         // 12
         DB::table('types')->insert([
            'name' => '12. Education, Training and Awareness',
            'details' => '12 Education, Training and Awareness',
            'slug' => 'education-training-awareness',
            'status'=> 1,
        ]);

    }
}
