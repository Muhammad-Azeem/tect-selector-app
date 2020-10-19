<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Models\Question::updateOrCreate([
            'id'=>1
        ],[
            'title' => 'Country of residence?',
            'phase_id' => 1,
            'meta' =>[
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 1,
                        'question_id' =>2,
                    ],

                    [
                        'answer_id' => 2,
                        'question_id' => null,
                        'other' => 'Sorry, but we are only working with families in the Republic of Ireland currently.'
                    ],

                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>2
        ],[

            'title' => 'Does your child have access to a device?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 3,
                        'question_id' => 3,
                        'other' => null,
                    ],

                    [
                        'answer_id' => 4,
                        'question_id' => 3,
                        'other' => null,
                    ],


                    [
                        'answer_id' => 5,
                        'question_id' => 9,
                        'other' => null,
                    ],
                ],
            ],
            ]
        );

        App\Models\Question::updateOrCreate([
            'id'=>3
        ],[

            'title' => 'What type of device?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 6,
                        'question_id' => 4,
                        'other' => null,
                    ],

                    [
                        'answer_id' => 8,
                        'question_id' => 4,
                        'other' => null,
                    ],

                    [
                        'answer_id' => 7,
                        'question_id' => null,
                        'other' => 'We are only giving information for Windows laptops and iPad tablets.',
                    ],

                    [
                        'answer_id' => 9,
                        'question_id' => null,
                        'other' => 'We are only giving information for Windows laptops and iPad tablets.',
                    ],
                ],
            ],
            ]
        );
        App\Models\Question::updateOrCreate([
            'id'=>4
        ],[
            'title' => 'Are you looking to upgrade your device?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 10,
                        'question_id' =>9,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 11,
                        'question_id' =>5,
                        'other' => null,
                        'operator' => '&&',
                        'condition' => [
                            [
                                'question_id' =>3,
                                'answer_id' => 6,
                            ]
                        ]
                    ],
                    [
                        'answer_id' => 11,
                        'question_id' =>7,
                        'other' => null,
                        'operator' => '&&',
                        'condition' => [
                            [
                                'question_id' =>3,
                                'answer_id' => 8,
                            ]
                        ]
                    ],

                ],
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>5
        ],[

            'title' => 'What operating system does it have?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                  [
                      'answer_id'=>13,
                      'question_id'=>null,
                      'other' => 'should appear suggesting they should look to upgrade'
                  ],
                    [
                        'answer_id'=>14,
                        'question_id'=>null,
                        'other' => 'should appear suggesting they should look to upgrade'
                    ],
                    [
                        'answer_id'=>15,
                        'question_id'=>6,
                        'other' => null,
                    ],
                ],
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>6
        ],[

            'title' => 'Do you know the processor of the laptop?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>[
                    [
                        'answer_id'=>16,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>17,
                        'question_id'=>11,

                    ],
                    [
                        'answer_id'=>18,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>19,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>20,
                        'question_id'=>11,
                    ],
                ]
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>7
        ],[

            'title' => 'What type of iPad is it?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>[
                    [
                        'answer_id'=>21,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>22,
                        'question_id'=>11,

                    ],
                    [
                        'answer_id'=>23,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>24,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>25,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>26,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>27,
                        'question_id'=>11,
                    ],
                ],

            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>8
        ],[

            'title' => 'What version of iOS in on your iPad?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>[
                    [
                        'answer_id'=>28,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>29,
                        'question_id'=>11,

                    ],
                    [
                        'answer_id'=>30,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>31,
                        'question_id'=>11,
                    ],
                    [
                        'answer_id'=>32,
                        'question_id'=>11,
                    ],

                ],
            ]
        ]
        );

        App\Models\Question::updateOrCreate([
            'id'=>9
        ],[

            'title' => 'Who is funding the device?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>null,
            ]
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>10
        ],[

            'title' => 'What is the budget for a device?',
            'phase_id' => 1,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>null,
            ]
        ]);

        //********************Student's ENVIRONMENT*******************************/


        App\Models\Question::updateOrCreate([
            'id'=>11
        ],[

            'title' => 'Parent Full Name',
            'phase_id' => 2,
            'meta' => [
                'type' => 'input',
                'condition' =>null,
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>12
        ],[

            'title' => 'Parent Email Address',
            'phase_id' => 2,
            'meta' => [
                'type' => 'input',
                'condition' =>null,
                'note'=>'This is where your report will be send'
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>13
        ],[

            'title' => "What's your child's name",
            'phase_id' => 2,
            'meta' => [
                'type' => 'input',
                'condition' =>null,
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>14
        ],[

            'title' => 'What age is your child?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>null,
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>15
        ],[

            'title' => 'What is the nature of your child’s disability/learning difficulty? (select all that are applicable)',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_MULTIPLE,
                'condition' =>null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>16
        ],[

            'title' => 'What type of school is your child attending?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 50,
                        'question_id' => 17,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 52,
                        'question_id' => 17,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 53,
                        'question_id' => 17,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 51,
                        'question_id' => 18,
                        'other' => null,
                    ],
                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>17
        ],[

            'title' => 'Which class are they currently in?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>[
                    [
                        'answer_id' => 54,
                        'question_id' => 19,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 55,
                        'question_id' => 19,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 56,
                        'question_id' => 19,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 57,
                        'question_id' => 19,
                        'other' => null,
                    ],
                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>18
        ],[

            'title' => 'Which year are they currently in?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>19
        ],[

            'title' => 'Does your child have access to any of the following? (select all that are applicable)',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_MULTIPLE,
                'condition' => null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>20
        ],[

            'title' => "Select the option that fits your child's current school best",
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>21
        ],[

            'title' => 'Will your child be permitted to use technology in school?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>22
        ],[

            'title' => 'Do you have WIFI at home?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => null,
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>23
        ],[

            'title' => 'Can your child touch type?',
            'phase_id' => 2,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => [
                    [
                        'answer_id' => 76,
                        'question_id' => 24,
                        'other' => null,
                    ],
                    [
                        'answer_id' => 77,
                        'question_id' => 24,
                        'other' => null,
                    ],
                ],
            ],
        ]);

        //******************Student's Tasks and Challenges********************************/


        App\Models\Question::updateOrCreate([
            'id'=>24
        ],[

            'title' => "What are your child's main challenges? (select all that are applicable)",
            'phase_id' => 3,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_MULTIPLE,
                'condition' => [
                    [
                        'answer_id'=>78,
                        'question_id'=>25,
                        'other' => null,
                    ],
                    [
                        'answer_id'=>79,
                        'question_id'=>26,
                        'other' => null,
                    ],
                    [
                        'answer_id'=>80,
                        'question_id'=>null,
                        'other' => null,
                    ],
                    [
                        'answer_id'=>81,
                        'question_id'=>27,
                        'other' => null,
                    ],
                    [
                        'answer_id'=>82,
                        'question_id'=>28,
                        'other' => null,
                    ],

                ],
            ],
        ]);
        App\Models\Question::updateOrCreate([
            'id'=>25
        ],[

            'title' => 'What areas with reading?',
            'phase_id' => 3,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>   [
                    [
                    'answer_id'=>83,
                    'question_id' =>26,
                    'condition' => [
                        [
                            'question_id' =>24,
                            'answer_id' => 79,
                        ]
                        ]
                    ],
                    [
                        'answer_id'=>83,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>83,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],

                    [
                        'answer_id'=>84,
                        'question_id' =>26,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 79,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>84,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>84,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],

                    [
                        'answer_id'=>85,
                        'question_id' =>26,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 79,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>85,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>85,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],


                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>26
        ],[

            'title' => 'What areas with writing?',
            'phase_id' => 3,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>   [
                    [
                        'answer_id'=>86,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>86,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],

                    [
                        'answer_id'=>87,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>87,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],

                    [
                        'answer_id'=>88,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>88,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],

                    [
                        'answer_id'=>89,
                        'question_id' =>27,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 81,
                            ]
                        ]
                    ],
                    [
                        'answer_id'=>89,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ]
                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>27
        ],[

            'title' => 'What areas with attention?',
            'phase_id' => 3,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' =>   [
                    [
                        'answer_id' => 90,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ],
                    [
                        'answer_id' => 91,
                        'question_id' =>28,
                        'condition' => [
                            [
                                'question_id' =>24,
                                'answer_id' => 82,
                            ]
                        ]
                    ]
                ],
            ],
        ]);

        App\Models\Question::updateOrCreate([
            'id'=>28
        ],[

            'title' => 'What areas with Organisation?',
            'phase_id' => 3,
            'meta' => [
                'type' => \App\Helpers\Constants::TYPE_SINGLE,
                'condition' => null,
            ],
        ]);






    }

}
