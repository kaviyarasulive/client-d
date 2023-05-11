<?php

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
         DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'info@admin.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('administrations')->insert([
            'name' => 'demo',
            'email' => 'info@admin.com',
            'password' => bcrypt('123456'),
        ]);


        DB::table('users')->insert([
            'name' => 'demo',
            'email' => 'info@admin.com',
            'phone' => '0987654321',
            'password' => bcrypt('123456'),
        ]);

        DB::table('patients')->insert([
            'name' => 'demo',
            'email' => 'info@admin.com',
            'phone' => '0987654321',
            'password' => bcrypt('123456'),
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dr. Niranjan Naik',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Fortis Memorial Research Institute',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr. Vinod Raina',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Fortis Memorial Research Institute Gurgaon',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Ankur Bahl',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Fortis Memorial Research Institute Gurgaon',
        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr. Prasad E',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'MIOT International, Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Prof. Dr. Suresh H. Advani',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Jaslok Hospital,Mumbai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Rajesh Mistry',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Kokilaben Dhirubhai Ambani Hospital, Mumbai',
        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr. Raja Sundaram',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Global Hospitals, Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr. Sanjay Dudhat',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Nanavati Super Specialty Hospital, Mumbai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Mahadev P',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'Apollo Hospitals, Greams Road, Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Senthil Kumar',
            'disease'=>'Oncologist (Cancer)',
           'hospital'=>'MIOT International, Chennai',
        ]);




        DB::table('doctors')-> insert([
            'name' => 'Dr Aparna Bhatnagar',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Speciality Hospitals Vanagaram',
        ]);
        DB::table('doctors') ->insert([
            'name' => 'Dr Ashok Rangarajan',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Spectra Hospitals Alwarpet',
        ]);
        DB::table('doctors') ->insert([
            'name' => 'Dr Atheeswar Das',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Speciality Hospitals O M R',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr CHANDRAN ABRAHAM',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Firstmed Hospital',
        ]);
        DB::table('doctors') ->insert([
            'name' => 'Dr Chockalingam Muthuraman',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Geetha P',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Speciality Hospitals Vanagaram',
        ]);

        DB::table('doctors')-> insert([
            'name' => 'Dr Major Raghavan V',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Cancer Institutes',
        ]);
        DB::table('doctors') ->insert([
            'name' => 'Dr Manoj Subhash Khatri',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Spectra Hospitals Alwarpet',
        ]);
        DB::table('doctors') ->insert([
            'name' => 'Dr Mary Abraham',
            'disease'=>'Opthalmology',
           'hospital'=>'Apollo Firstmed Hospital',
        ]);



        DB::table('doctors')-> insert([
            'name' => 'Dr Brig K Shanmuganandan',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Chitra Sundaramoorthy',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Children Hospital Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Kaushik V ',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors') -> insert([
            'name' => 'Dr Mahesh Janarthanan',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Children Hospital Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Mathai Thomas',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Speciality Hospitals Vanagaram',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Padmanabhan R ',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Rajasekar B',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')-> insert([
            'name' => 'Dr Ramakrishnan S ',
            'disease'=>'Rheumatology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);







        DB::table('doctors')-> insert([
            'name' => 'Dr Aishwarya Raj Kumar',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Spectra Hospitals Alwarpet',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr Ashwin K Mani',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Children Hospital Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr Ayesha Shahnaz ',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Children Hospital Chennai',
        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr Babu K Abraham',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr Gayathri A R',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr Ghanshyam Verma ',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Speciality Hospitals Vanagaram',
        ]);

        DB::table('doctors')->  insert([
            'name' => 'Dr Gomathi R G ',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Firstmed Hospital',
        ]);  
        DB::table('doctors')->  insert([
            'name' => 'Dr Ilangho R P ',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Hospitals Greams Road Chennai',
        ]);  
        DB::table('doctors')->  insert([
            'name' => 'Dr Jaishree Narasimhan ',
            'disease'=>'Pulmonology',
           'hospital'=>'Apollo Cancer Institutes',
        ]);


       

        DB::table('doctors')->  insert([
            'name' => 'Dr. T. Vijay ',
            'disease'=>'Neurologisty',
           'hospital'=>'Mogappair East,Chennai  Dr. Vijay s Hospital',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. V.Soundappan ',
            'disease'=>'Neurologisty',
           'hospital'=>' Fortis Malar Hospital,Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. S. Balasubramaniam',
            'disease'=>'Neurologisty',
           'hospital'=>'  Diya Speciality Clinic,Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Karthic Babu Natarajan',
            'disease'=>'Neurologisty',
           'hospital'=>'  Synapse Pain and Spine Clinic,Chennai',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. A Gunasekaran',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Neuro Life Hospital',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. A. Panneer',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Apollo Hospital',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Anusha D ',
            'disease'=>'Neurologisty',
           'hospital'=>'Apollo Cancer Centres Chennai ',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. M. Dhanaraj',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Apollo Hospital',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Somasundaram Aadhimoolam Chinnadurai',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Apollo Hospital',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. Dinesh Nayak',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Gleneagles Global Health City',
        ]);
        DB::table('doctors')->  insert([
            'name' => 'Dr. M. Kodeeswaran',
            'disease'=>'Neurologisty',
           'hospital'=>'Chennai  Boston Brain and Spine Care',
        ]);
    }
}
