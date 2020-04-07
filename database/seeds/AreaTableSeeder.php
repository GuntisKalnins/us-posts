<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'name' => 'United States',
                    'children' => [
                    [
                        'name' => 'Alabama',
                        'children' => [
                            ['name' => 'Birmingham–Hoover'],
                            ['name' => 'Huntsville'],
                            ['name' => 'Mobile'],
                            ['name' => 'Montgomery'],
                            ['name' => 'Tuscaloosa'],
                            ['name' => 'Daphne–Fairhope–Foley'],
                            ['name' => 'Auburn–Opelika'],
                            ['name' => 'Decatur'],
                            ['name' => 'Dothan'],
                            ['name' => 'Florence–Muscle Shoals'],
                            ['name' => 'Anniston–Oxford–Jacksonville'],
                            ['name' => 'Gadsden'],
                        ],
                    ],
                    [
                        'name' => 'Alaska',
                        'children' => [
                            ['name' => 'Qala i Naw'],
                        ],
                    ],        
                    [
                        'name' => 'Arizona',
                        'children' => [
                            ['name' => 'Puli Khumri'],
                        ],
                    ],  
                    [
                        'name' => 'Arkansas',
                        'children' => [
                            ['name' => 'Mazar-i-Sharif'],
                        ],
                    ],                                                        
                    [
                        'name' => 'California',
                        'children' => [
                            ['name' => 'Bamyan'],
                        ],
                    ],        
                    [
                        'name' => 'Colorado',
                        'children' => [
                            ['name' => 'Nili'],
                        ],
                    ],      
                    [
                        'name' => 'Connecticut',
                        'children' => [
                            ['name' => 'Farah'],
                        ],
                    ],     
                    [
                        'name' => 'Delaware',
                        'children' => [
                            ['name' => 'Maymana'],
                        ],
                    ],        
                    [
                        'name' => 'Florida',
                        'children' => [
                            ['name' => 'Ghazni'],
                        ],
                    ],    
                    [
                        'name' => 'Georgia',
                        'children' => [
                            ['name' => 'Chaghcharan'],
                        ],
                    ],    
                    [
                        'name' => 'Hawaii',
                        'children' => [
                            ['name' => 'Lashkargah'],
                        ],
                    ],    
                    [
                        'name' => 'Idaho',
                        'children' => [
                            ['name' => 'Herat'],
                        ],
                    ],    
                    [
                        'name' => 'Illinois',
                        'children' => [
                            ['name' => 'Sheberghan'],
                        ],
                    ],    
                    [
                        'name' => 'Indiana',
                        'children' => [
                            ['name' => 'Kabul'],
                        ],
                    ],     
                    [
                        'name' => 'Iowa',
                        'children' => [
                            ['name' => 'Kandahar'],
                        ],
                    ],    
                    [
                        'name' => 'Kansas',
                        'children' => [
                            ['name' => 'Mahmud-i-Raqi'],
                        ],
                    ],    
                    [
                        'name' => 'Kentucky',
                        'children' => [
                            ['name' => 'Khost'],
                        ],
                    ],    
                    [
                        'name' => 'Louisiana',
                        'children' => [
                            ['name' => 'Asadabad'],
                        ],
                    ],    
                    [
                        'name' => 'Maine',
                        'children' => [
                            ['name' => 'Kunduz'],
                        ],
                    ],    
                    [
                        'name' => 'Maryland',
                        'children' => [
                            ['name' => 'Mihtarlam'],
                        ],
                    ],    
                    [
                        'name' => 'Massachusetts',
                        'children' => [
                            ['name' => 'Pul-i-Alam'],
                        ],
                    ],    
                    [
                        'name' => 'Michigan',
                        'children' => [
                            ['name' => 'Jalalabad'],
                        ],
                    ],    
                    [
                        'name' => 'Minnesota',
                        'children' => [
                            ['name' => 'Zaranj'],
                        ],
                    ],                           
                    [
                        'name' => 'Mississippi',
                        'children' => [
                            ['name' => 'Parun'],
                        ],
                    ],    
                    [
                        'name' => 'Missouri',
                        'children' => [
                            ['name' => 'Gardez'],
                        ],
                    ],    
                    [
                        'name' => 'Montana',
                        'children' => [
                            ['name' => 'Sharana'],
                        ],
                    ],    
                    [
                        'name' => 'Nebraska',
                        'children' => [
                            ['name' => 'Bazarak'],
                        ],
                    ],    
                    [
                        'name' => 'Nevada',
                        'children' => [
                            ['name' => 'Charikar'],
                        ],
                    ],    
                    [
                        'name' => 'New Hampshire',
                        'children' => [
                            ['name' => 'Samangan'],
                        ],
                    ],    
                    [
                        'name' => 'New Jersey',
                        'children' => [
                            ['name' => 'Sar-e Pol'],
                        ],
                    ],    
                    [
                        'name' => 'New Mexico',
                        'children' => [
                            ['name' => 'Taloqan'],
                        ],
                    ],    
                    [
                        'name' => 'New York',
                        'children' => [
                            ['name' => 'Tarinkot'],
                        ],
                    ],    
                    [
                        'name' => 'North Carolina',
                        'children' => [
                            ['name' => 'Maidan Shar'],
                        ],
                    ],    
                    [
                        'name' => 'North Dakota',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Ohio',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Oklahoma',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Oregon',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Pennsylvania',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Rhode Island',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'South Carolina',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'South Dakota',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Tennessee',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Texas',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Utah',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Vermont',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Virginia',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Washington',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'West Virginia',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Wisconsin',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],
                    [
                        'name' => 'Wyoming',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],    
                ],
            ],
            [
                'name' => 'United Kingdom',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Bangladesh',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Brazil',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'China',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Egypt',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'France',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Germany',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'India',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Iran',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Italy',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Japan',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Mexico',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ], 
            ],
            [
                'name' => 'Nigeria',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Philippines',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Russia',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Thailand',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Vietnam',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Rest of the World',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                ],
            ],      

            

        
        ];

        foreach ($areas as $area) 
        {
            \App\Area::create($area);
        }
        
    }
}
