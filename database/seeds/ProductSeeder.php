<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Product::updateOrCreate([
            'id'=>1
        ],[

            'title' => 'Voice Dream Reader',
            'desc' => 'This is a must have app for students struggling with reading. It reads aloud text that can be pulled from PDFs, web browsers and Word documents. The whole experience can be customised for the student, including the voice, speech rate, sentence pause, visual layout (background colour) and even the font type (Open Dyslexic).
                       One key stand-out feature is the “Lines Visible” option',
            'price' => '16.99',
            'download_link' => 'https://apps.apple.com/ie/app/voice-dream-reader/id496177674#?platform=ipad',
            'icon_link' => 'https://drive.google.com/file/d/18DxunPP1zsRY17px-9jCZkw8w4zshRnd/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0' => [
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ]
                ],
                '1' => '&&',

                '2' =>[
                    '0' => [
                        'question_id' => 8,
                        'operator' => 'in',
                        'answer_id' => [29,30,31],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0' => [
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0' => [
                        'question_id' => 15,
                        'operator' => 'in',
                        'answer_id' => [44,45,47],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0' => [
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],

                '9' => '&&',

                '10' =>[
                    '0' => [
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [78],
                    ]
                ],
            ]
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>2
        ],[

            'title' => 'Teach your Monster to Read',
            'desc' => 'This is a beautifully made and entertaining resource for young children to learn phonic sounds. They design a monster and take it on an adventure around a magic area to find the letter sounds and fix a spaceship. The storyline is good, and the activities are educational and motivational.
                        It has 3 different games, as they progress, they practice',
            'price' => '5.49',
            'download_link' => 'https://www.teachyourmonstertoread.com',
            'icon_link' => 'https://drive.google.com/file/d/1nriZ7Fc3GSpqUA4d7depR-69wim1SlCl/view?usp=sharing',
            'logical_expression' => [
                '0' => [
                    '0' =>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1' => '&&',

                    '2' =>[
                        'question_id' => 8,
                        'operator' => 'in',
                        'answer_id' => [29,30,31],
                    ],

                    '3' => '||',

                    '4' =>[
                        'question_id' => 3,
                        'operator' => 'in',
                        'answer_id' => [6,7],
                    ],
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => '==',
                        'answer_id' => [40],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => '==',
                        'answer_id' => [50],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => '==',
                        'answer_id' => [78],
                    ]
                ],

            ] ,
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>3
        ],[

            'title' => 'ClaroRead Pro',
            'desc' => 'ClaroPDF Pro allows students to access books that are
                       in PDF format. It contains a built-in reader and has a highlighting function. It allows materials to be opened from all internet-based storage.
                       Users can select from a choice of voices, speed of voice and colour of highlighting according to their preference.',
            'price' => '10.99',
            'download_link' => 'https://apps.apple.com/gb/app/id633997623',
            'icon_link' => 'https://drive.google.com/file/d/1_RIdfYXyrn_4xO8gX8bcg1xfik2pwE2z/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1'=>'&&',
                    '2'=>[
                        'question_id' => 8,
                        'operator' => 'in',
                        'answer_id' => [29,30,31],
                    ],
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [78],
                    ]
                ]
            ]
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>4
        ],[

            'title' => 'Immersive Reader',
            'desc' => 'This is a game changer for me, I just love the ease of use and it is now my go-to option for struggling readers. The Immersive Reader tool allows those with reading and writing difficulties the ability to have content read aloud to them, setting adjustments to break words into syllables/parts of speech, and adjust text size/background colours.
                       Another plus, it’s free! This tool from Microsoft helps to improve reading, writing, and comprehension when you are using an Office 365 subscription. It implements proven techniques to improve reading and writing for people regardless of their age or ability.',
            'price' => '0.00',
            'download_link' => 'https://www.onenote.com/learningtools',
            'icon_link' => 'https://drive.google.com/file/d/169rf-Ir9MrxYbwSVGCyxHYu_-Q_-I9sR/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1'=>'&&',
                    '2'=>[
                        'question_id' => 8,
                        'operator' => '==',
                        'answer_id' => [29,30],
                    ],
                    '3'=>'||',
                    '4'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [6,7],
                    ],

                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'answer_id' => [44,45,47],
                    ]
                ],
                '5' => '&&',
                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => '==',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [78],
                    ]
                ],

            ]
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>5
        ],[

            'title' => 'Read & Write',
            'desc' => 'Read&Write lets the student hear text read aloud, look up words in the dictionary or picture dictionary with a click, write with word prediction, highlight and collect information from the web, and proofread with a grammar, spelling and confusable words checker.
                       This a 12-month subscription and can be accessed for Windows, Mac and all tablet devices. It also gives you access to the Read&Write for Google Chrome extension. This toolbar targets reading, writing, and organising while working seamlessly with Google Docs. Tools such as text-to-speech, speech-to-text, colour highlighting, and word prediction are just some of the features to boost confidence for students.',
            'price' => '208',
            'download_link' => 'https://www.texthelp.com/en-gb/products/read-write/read-write-for-education/',
            'icon_link' => 'https://drive.google.com/file/d/1s2Sd5bPalcl2l5lJ1KUUAHGfqzFC0ZZo/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [6,7,8],
                    ]
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => '==',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,45,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [78,79],
                    ]
                ],
            ] ,
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>6
        ],[

            'title' => 'Voice Dream Writer',
            'desc' => 'Voice Dream Writer works as a proof-reader. Using its text-to-speech functionality, it reads aloud text as it is typed using the keyboard or the dictate function. This helps students to spot grammatical errors, spelling mistakes and awkward sentences.',
            'price' => '6.99',
            'download_link' => 'https://apps.apple.com/ie/app/voice-dream-writer/id920583100',
            'icon_link' => 'https://drive.google.com/file/d/1wlUHYunLWJPd7eNUJcEo51S44awshqro/view?usp=sharing',
            'logical_expression' =>[
                '0'=>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1'=>'&&',
                    '2'=>[
                        'question_id' => 8,
                        'operator' => '==',
                        'answer_id' => [29,30,31],
                    ],
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,45,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [79],
                    ]
                ],
            ] ,
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>7
        ],[

            'title' => 'Snaptype Pro',
            'desc' => 'SnapType Pro allows students to work on workbooks and photocopied worksheets – by letting them fill them in on the iPad. Students can overlay textboxes on the images and work directly from there. Snaptype helps students keep up with their peers in class, even when their penmanship holds them back. Once finished working on a document, they can print, save it or send it to their teacher. Great for those who find hand-writing difficult. There is a free version too, which is a good starting point.',
            'price' => '5.49',
            'download_link' => 'https://apps.apple.com/ie/app/snaptype-pro/id1124123246',
            'icon_link' => 'https://drive.google.com/file/d/1-CA9h3JYpg3OuPfJNAMJjWjSojxeOkOh/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1'=>'&&',
                    '2'=>[
                        'question_id' => 8,
                        'operator' => '==',
                        'answer_id' => [29,30,31],
                    ],
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,45,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [79],
                    ]
                ],
            ],

        ]);
        App\Models\Product::updateOrCreate([
            'id'=>8
        ],[

            'title' => 'Google Voice Typing',
            'desc' => 'This is a great dictation tool for Google Docs and Google Slides. To use it, you must be connected to the internet with the Google Chrome Browser on Windows, MacOS or Chromebook devices. Voice Typing is also available on Google Android devices.',
            'price' => '0.00',
            'download_link' => 'https://support.google.com/docs/answer/4492226?hl=en',
            'icon_link' => 'https://drive.google.com/file/d/1YTw0zuvDGWDFMMarDlWzRYkGXrJYA9-H/view?usp=sharing',
            'logical_expression' => [
                '0' => [
                    '0'=>[
                        'question_id' =>  3,
                        'operator' => '==',
                        'answer_id' => [6,7],
                    ]
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => '==',
                        'answer_id' => [40,41,42,43],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => 'in',
                        'answer_id' => [44,45,47]
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => 'in',
                        'answer_id' => [50,51,52,53],
                    ]
                ],
                '7' => '&&',
                '8' =>[
                    '0'=>[
                        'question_id' => 22,
                        'operator' => '=',
                        'answer_id' => [74,75],
                    ]
                ],
                '9' => '&&',
                '10' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => '=',
                        'answer_id' => [79],
                    ]
                ],


            ],
        ]);
        App\Models\Product::updateOrCreate([
            'id'=>9
        ],[

            'title' => 'Grammarly',
            'desc' => 'Grammarly corrects over 250 types of grammatical mistakes, while also catching contextual spelling errors and poor vocabulary usage. Premium/Paid version has downloadable software to work in Microsoft Office. Free version works online in a browser only.
                       It’s a great tool for students who need a little help with grammar. It also has a very useful built-in spell checker.',
            'price' => '139.95',
            'download_link' => 'https://app.grammarly.com',
            'icon_link' => 'https://drive.google.com/file/d/1n-PFBIwFf2tJB1op1mxjRQ2AZSdyT5PF/view?usp=sharing',
            'logical_expression' => [
                '0' =>[
                    '0'=>[
                        'question_id' => 3,
                        'operator' => '==',
                        'answer_id' => [8],
                    ],
                    '1'=>'&&',
                    '2'=>[
                        'question_id' => 8,
                        'operator' => 'in',
                        'answer_id' => [29,30,31],
                    ],
                    '3'=>'||',
                    '4'=>[
                        'question_id' => 3,
                        'operator' => 'in',
                        'answer_id' => [6,7],
                    ],
                ],
                '1' => '&&',

                '2' =>[
                    '0'=>[
                        'question_id' => 14,
                        'operator' => 'in',
                        'answer_id' => [40,41,42],
                    ]
                ],
                '3' => '&&',

                '4' =>[
                    '0'=>[
                        'question_id' => 15,
                        'operator' => '==',
                        'answer_id' => [44,45,47],
                    ]
                ],
                '5' => '&&',

                '6' =>[
                    '0'=>[
                        'question_id' => 16,
                        'operator' => '==',
                        'answer_id' => [51],
                    ]
                ],
                '7' => '&&',

                '8' =>[
                    '0'=>[
                        'question_id' => 22,
                        'operator' => '==',
                        'answer_id' => [74,75],
                    ]
                ],
                '9' => '&&',

                '10' =>[
                    '0'=>[
                        'question_id' => 24,
                        'operator' => 'in',
                        'answer_id' => [79],
                    ]
                ],
            ] ,

        ]);
    }
}
