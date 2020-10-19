<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Answer::updateOrCreate([
            'id'=>1
        ],[

            'title' => 'Republic of Ireland',
            'question_id' => 1,
            'meta' => null,

        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>2
        ],[

            'title' => 'Other',
            'question_id' => 1,
            'meta' => null,

        ]);

        //***************Question-id-2********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>3
        ],[

            'title' => 'Yes - In school only',
            'question_id' => 2,
            'meta' =>null,
        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>4
        ],[
            'title' => 'Yes - in school / at home',
            'question_id' => 2,
            'meta' =>null,

        ]);

         App\Models\Answer::updateOrCreate([
             'id'=>5
         ],[
            'title' => "No - I'm looking to buy a device",
            'question_id' => 2,
            'meta' =>null,
        ]);

        //***************Question-id-3********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>6
        ],[

            'title' => 'Laptop - Windows',
            'question_id' => 3,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>7
        ],[

            'title' => 'Laptop - Mac',
            'question_id' => 3,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>8
        ],[

            'title' => 'Tablet - iPad',
            'question_id' => 3,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>9
        ],[

            'title' => 'Tablet - Android',
            'question_id' => 3,
            'meta' =>null,
        ]);

        //***************Question-id-4********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>10
        ],[

            'title' => 'Yes',
            'question_id' => 4,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>11
        ],[

            'title' => 'No',
            'question_id' => 4,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>12
        ],[

            'title' => 'No - School applying for AT Grant',
            'question_id' => 4,
            'meta' =>null,
        ]);

        //***************Question-id-5********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>13
        ],[

            'title' => 'Window 7',
            'question_id' => 5,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>14
        ],[

            'title' => 'Window 8',
            'question_id' => 5,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>15
        ],[

            'title' => 'Window 10',
            'question_id' => 5,
            'meta' =>null,
        ]);

        //***************Question-id-6********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>16
        ],[

            'title' => 'Intel core i5',
            'question_id' => 6,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>17
        ],[

            'title' => 'Intel core i3',
            'question_id' => 6,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>18
        ],[

            'title' => 'Intel Pentium',
            'question_id' => 6,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>19
        ],[

            'title' => 'Intel Celeron',
            'question_id' => 6,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>20
        ],[

            'title' => 'Other',
            'question_id' => 6,
            'meta' =>null,
        ]);

        //***************Question-id-7********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>21
        ],[

            'title' => 'iPad (7th Gen)',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>22
        ],[

            'title' => 'iPad (6th Gen)',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>23
        ],[

            'title' => 'iPad (5th Gen)',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>24
        ],[

            'title' => 'iPad Air (3rd Gen)',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>25
        ],[

            'title' => 'iPad Air 2',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>26
        ],[

            'title' => 'iPad Pro',
            'question_id' => 7,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>27
        ],[

            'title' => 'Older',
            'question_id' => 7,
            'meta' =>null,
        ]);


        //***************Question-id-8********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>28
        ],[

            'title' => 'iPadOS 14',
            'question_id' => 8,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>29
        ],[

            'title' => 'iPadOS 13',
            'question_id' => 8,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>30
        ],[

            'title' => 'iOS12',
            'question_id' => 8,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>31
        ],[

            'title' => 'iOS11',
            'question_id' => 8,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>32
        ],[

            'title' => 'Older',
            'question_id' => 8,
            'meta' =>null,
        ]);

        //***************Question-id-9********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>33
        ],[

            'title' => "Child's family",
            'question_id' => 9,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>34
        ],[

            'title' => 'School directly',
            'question_id' => 9,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>35
        ],[

            'title' => 'AT Grant',
            'question_id' => 9,
            'meta' =>null,
        ]);

        //***************Question-id-10********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>36
        ],[

            'title' => '€200 - €499',
            'question_id' => 10,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>37
        ],[

            'title' => '€500 - €699',
            'question_id' => 10,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>38
        ],[

            'title' => '€700 - €999',
            'question_id' => 10,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>39
        ],[

            'title' => '€999+',
            'question_id' => 10,
            'meta' =>null,
        ]);
        //***************Question-id-11 Skipped Due to Input Field********************************//
        //***************Question-id-12 Skipped Due to Input Field********************************//
        //***************Question-id-13 Skipped Due to Input Field********************************//

        //***************Question-id-14********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>40
        ],[

            'title' => '5 - 9',
            'question_id' => 14,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>41
        ],[

            'title' => '10 - 13',
            'question_id' => 14,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>42
        ],[

            'title' => '14 - 17',
            'question_id' => 14,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>43
        ],[

            'title' => 'Greater than 18',
            'question_id' => 14,
            'meta' =>null,
        ]);

        //***************Question-id-15********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>44
        ],[

            'title' => 'Dyslexia',
            'question_id' => 15,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>45
        ],[

            'title' => 'Dysgraphia',
            'question_id' => 15,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>46
        ],[

            'title' => 'Dyscalculia',
            'question_id' => 15,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>47
        ],[

            'title' => 'Dyspraxia / DCD',
            'question_id' => 15,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>48
        ],[

            'title' => 'Autism / ASD',
            'question_id' => 15,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>49
        ],[

            'title' => 'Sensory processing disorder',
            'question_id' => 15,
            'meta' =>null,
        ]);

        //***************Question-id-16********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>50
        ],[

            'title' => 'Primary',
            'question_id' => 16,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>51
        ],[

            'title' => 'Secondary',
            'question_id' => 16,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>52
        ],[

            'title' => 'Special School',
            'question_id' => 16,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>53
        ],[

            'title' => 'Reading School',
            'question_id' => 16,
            'meta' =>null,
        ]);

        //***************Question-id-17********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>54
        ],[

            'title' => '3rd Class',
            'question_id' => 17,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>55
        ],[

            'title' => '4th Class',
            'question_id' => 17,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>56
        ],[

            'title' => '5th Class',
            'question_id' => 17,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>57
        ],[

            'title' => '6th Class',
            'question_id' => 17,
            'meta' =>null,
        ]);

        //***************Question-id-18********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>58
        ],[

            'title' => '1st Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>59
        ],[

            'title' => '2nd Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>60
        ],[

            'title' => '3rd Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>61
        ],[

            'title' => '4th Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>62
        ],[

            'title' => '5th Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>63
        ],[

            'title' => '6th Year',
            'question_id' => 18,
            'meta' =>null,
        ]);

        //***************Question-id-19********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>64
        ],[

            'title' => 'Special Class',
            'question_id' => 19,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>65
        ],[

            'title' => 'Additional Teaching Support',
            'question_id' => 19,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>66
        ],[

            'title' => ' Special Needs Assistant',
            'question_id' => 19,
            'meta' =>null,
        ]);



        //***************Question-id-20********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>67
        ],[

            'title' => 'Students use iPads for all classes (one to one)',
            'question_id' => 20,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>68
        ],[

            'title' => 'Devices used in some classes (iPad or other)',
            'question_id' => 20,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>69
        ],[

            'title' => 'No requirement for student to own a device',
            'question_id' => 20,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>70
        ],[

            'title' => 'School not using any technology',
            'question_id' => 20,
            'meta' =>null,
        ]);

        //***************Question-id-21********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>71
        ],[

            'title' => 'Yes',
            'question_id' => 21,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>72
        ],[

            'title' => 'No',
            'question_id' => 21,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>73
        ],[

            'title' => 'Unsure',
            'question_id' => 21,
            'meta' =>null,
        ]);

        //***************Question-id-22********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>74
        ],[

            'title' => 'Yes',
            'question_id' => 22,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>75
        ],[

            'title' => 'No',
            'question_id' => 22,
            'meta' =>null,
        ]);

        //***************Question-id-23********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>76
        ],[

            'title' => 'Yes',
            'question_id' => 23,
            'meta' =>null,
        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>77
        ],[

            'title' => 'No',
            'question_id' => 23,
            'meta' =>null,
        ]);

        //***************Question-id-24********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>78
        ],[

            'title' => 'Reading',
            'question_id' => 24,
            'meta' =>[
                    'question_id'=>25
            ],
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>79
        ],[

            'title' => 'Writing',
            'question_id' => 24,
            'meta' =>[
                'question_id'=>26
            ],
        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>80
        ],[

            'title' => 'Maths',
            'question_id' => 24,
            'meta' =>null,
        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>81
        ],[

            'title' => 'Attention',
            'question_id' => 24,
            'meta' =>[
                'question_id'=>27
            ],
        ]);
        App\Models\Answer::updateOrCreate([
            'id'=>82
        ],[

            'title' => 'Organistion',
            'question_id' => 24,
            'meta' =>[
                'question_id'=>28
            ],
        ]);

        //***************Question-id-25********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>83
        ],[

            'title' => 'Reading Comprehension',
            'question_id' => 25,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>84
        ],[

            'title' => 'Word Reading',
            'question_id' => 25,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>85
        ],[

            'title' => 'Oral Reading Fluency',
            'question_id' => 25,
            'meta' =>null,
        ]);

        //***************Question-id-26********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>86
        ],[

            'title' => 'Spelling',
            'question_id' => 26,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>87
        ],[

            'title' => 'Handwriting',
            'question_id' => 26,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>88
        ],[

            'title' => 'Sentence Structure',
            'question_id' => 26,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>89
        ],[

            'title' => 'Filling Worksheets',
            'question_id' => 26,
            'meta' =>null,
        ]);

        //***************Question-id-27********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>90
        ],[

            'title' => 'Remembering key dates',
            'question_id' => 27,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>91
        ],[

            'title' => 'Concentration',
            'question_id' => 27,
            'meta' =>null,
        ]);

        //***************Question-id-28********************************//
        App\Models\Answer::updateOrCreate([
            'id'=>92
        ],[

            'title' => 'Notetaking',
            'question_id' => 28,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>93
        ],[

            'title' => 'Time management',
            'question_id' => 28,
            'meta' =>null,
        ]);

        App\Models\Answer::updateOrCreate([
            'id'=>94
        ],[
            'title' => 'None of the above',
            'question_id' => 19,
            'meta' =>null,
        ]);











    }
}
