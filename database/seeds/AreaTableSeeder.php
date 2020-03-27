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
                'name' => 'Afghanistan',
                    'children' => [
                    [
                        'name' => 'Badakhshan',
                        'children' => [
                            ['name' => 'Fayzabad'],
                        ],
                    ],
                    [
                        'name' => 'Badghis',
                        'children' => [
                            ['name' => 'Qala i Naw'],
                        ],
                    ],        
                    [
                        'name' => 'Baghlan',
                        'children' => [
                            ['name' => 'Puli Khumri'],
                        ],
                    ],  
                    [
                        'name' => 'Balkh',
                        'children' => [
                            ['name' => 'Mazar-i-Sharif'],
                        ],
                    ],

                                                        
                    [
                        'name' => 'Bamyan',
                        'children' => [
                            ['name' => 'Bamyan'],
                        ],
                    ],        
                    [
                        'name' => 'Daykundi',
                        'children' => [
                            ['name' => 'Nili'],
                        ],
                    ],      
                    [
                        'name' => 'Farah',
                        'children' => [
                            ['name' => 'Farah'],
                        ],
                    ],     
                    [
                        'name' => 'Faryab',
                        'children' => [
                            ['name' => 'Maymana'],
                        ],
                    ],        
                    [
                        'name' => 'Ghazni',
                        'children' => [
                            ['name' => 'Ghazni'],
                        ],
                    ],    
                    [
                        'name' => 'Ghor',
                        'children' => [
                            ['name' => 'Chaghcharan'],
                        ],
                    ],    
                    [
                        'name' => 'Helmand',
                        'children' => [
                            ['name' => 'Lashkargah'],
                        ],
                    ],    
                    [
                        'name' => 'Herat',
                        'children' => [
                            ['name' => 'Herat'],
                        ],
                    ],    
                    [
                        'name' => 'Jowzjan',
                        'children' => [
                            ['name' => 'Sheberghan'],
                        ],
                    ],    
                    [
                        'name' => 'Kabul',
                        'children' => [
                            ['name' => 'Kabul'],
                        ],
                    ],     
                    [
                        'name' => 'Kandahar',
                        'children' => [
                            ['name' => 'Kandahar'],
                        ],
                    ],    
                    [
                        'name' => 'Kapisa',
                        'children' => [
                            ['name' => 'Mahmud-i-Raqi'],
                        ],
                    ],    
                    [
                        'name' => 'Khost',
                        'children' => [
                            ['name' => 'Khost'],
                        ],
                    ],    
                    [
                        'name' => 'Kunar',
                        'children' => [
                            ['name' => 'Asadabad'],
                        ],
                    ],    
                    [
                        'name' => 'Kunduz',
                        'children' => [
                            ['name' => 'Kunduz'],
                        ],
                    ],    
                    [
                        'name' => 'Laghman',
                        'children' => [
                            ['name' => 'Mihtarlam'],
                        ],
                    ],    
                    [
                        'name' => 'Logar',
                        'children' => [
                            ['name' => 'Pul-i-Alam'],
                        ],
                    ],    
                    [
                        'name' => 'Nangarhar',
                        'children' => [
                            ['name' => 'Jalalabad'],
                        ],
                    ],    
                    [
                        'name' => 'Nimruz',
                        'children' => [
                            ['name' => 'Zaranj'],
                        ],
                    ],                           
                    [
                        'name' => 'Nuristan',
                        'children' => [
                            ['name' => 'Parun'],
                        ],
                    ],    
                    [
                        'name' => 'Paktia',
                        'children' => [
                            ['name' => 'Gardez'],
                        ],
                    ],    
                    [
                        'name' => 'Paktika',
                        'children' => [
                            ['name' => 'Sharana'],
                        ],
                    ],    
                    [
                        'name' => 'Panjshir',
                        'children' => [
                            ['name' => 'Bazarak'],
                        ],
                    ],    
                    [
                        'name' => 'Parwan',
                        'children' => [
                            ['name' => 'Charikar'],
                        ],
                    ],    
                    [
                        'name' => 'Samangan',
                        'children' => [
                            ['name' => 'Samangan'],
                        ],
                    ],    
                    [
                        'name' => 'Sar-e Pol',
                        'children' => [
                            ['name' => 'Sar-e Pol'],
                        ],
                    ],    
                    [
                        'name' => 'Takhar',
                        'children' => [
                            ['name' => 'Taloqan'],
                        ],
                    ],    
                    [
                        'name' => 'Urozgan',
                        'children' => [
                            ['name' => 'Tarinkot'],
                        ],
                    ],    
                    [
                        'name' => 'Wardak',
                        'children' => [
                            ['name' => 'Maidan Shar'],
                        ],
                    ],    
                    [
                        'name' => 'Zabul',
                        'children' => [
                            ['name' => 'Qalat'],
                        ],
                    ],    
                ],
            ],
        
        //     [
        //         'name' => 'Albania',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Algeria',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'American Samoa',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Andorra',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Angola',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Anguilla',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Antarctica',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Antigua and Barbuda',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Argentina',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Armenia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Aruba',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Australia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Austria',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Azerbaijan',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bahamas',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bahrain',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bangladesh',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Barbados',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Belarus',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Belgium',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Belize',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Benin',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bermuda',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bhutan',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //     'name' => 'Bolivia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bosnia and Herzegovina',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Botswana',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Brazil',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'British Indian Ocean Territory',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'British Virgin Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Brunei',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Bulgaria',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Burkina Faso',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Burundi',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cambodia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cameroon',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Canada',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cape Verde',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cayman Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Central African Republic',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Chad',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Chile',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'China',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Christmas Island',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cocos Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Colombia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Comoros',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cook Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Costa Rica',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Croatia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cuba',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Curacao',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Cyprus',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Czech Republic',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Democratic Republic of the Congo',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Denmark',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Djibouti',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Dominica',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Dominican Republic',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'East Timor',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ecuador',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Egypt',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'El Salvador',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Equatorial Guinea',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Eritrea',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Estonia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ethiopia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Falkland Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Faroe Islands',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Fiji',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Finland',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'France',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'French Polynesia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Gabon',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Gambia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Georgia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Germany',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ghana',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Gibraltar',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Greece',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Greenland',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Grenada',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guam',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guatemala',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guernsey',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guinea',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guinea-Bissau',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Guyana',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Haiti',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Honduras',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Hong Kong',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Hungary',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Iceland',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'India',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Indonesia',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Iran',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Iraq',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ireland',
        //             'children' => [
        //             [
        //                 'name' => '',
        //                     'children' => [
        //                         ['name' => ''],
        //                     ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Isle of Man',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Israel',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Italy',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ivory Coast',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Jamaica',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Japan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Jersey',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Jordan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kazakhstan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kenya',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kiribati',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kosovo',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kuwait',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Kyrgyzstan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Laos',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Latvia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Lebanon',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Lesotho',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Liberia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Libya',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Liechtenstein',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Lithuania',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Luxembourg',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Macau',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Macedonia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Madagascar',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Malawi',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Malaysia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Maldives',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mali',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Malta',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Marshall Islands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mauritania',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mauritius',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mayotte',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mexico',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Micronesia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Moldova',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Monaco',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mongolia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Montenegro',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Montserrat',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Morocco',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Mozambique',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Myanmar',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Namibia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Nauru',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Nepal',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Netherlands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Netherlands Antilles',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'New Caledonia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'New Zealand',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Nicaragua',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Niger',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Nigeria',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Niue',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'North Korea',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Northern Mariana Islands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Norway',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Oman',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Pakistan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Palau',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Palestine',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Panama',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Papua New Guinea',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Paraguay',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Peru',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Philippines',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Pitcairn',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Poland',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Portugal',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Puerto Rico',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Qatar',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Republic of the Congo',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Reunion',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Romania',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Russia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Rwanda',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Barthelemy',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Helena',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Kitts and Nevis',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Lucia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Martin',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Pierre and Miquelon',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saint Vincent and the Grenadines',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Samoa',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'San Marino',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sao Tome and Principe',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Saudi Arabia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Senegal',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Serbia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Seychelles',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sierra Leone',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Singapore',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sint Maarten',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Slovakia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Slovenia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Solomon Islands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Somalia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'South Africa',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'South Korea',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'South Sudan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Spain',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sri Lanka',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sudan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Suriname',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Svalbard and Jan Mayen',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Swaziland',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Sweden',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Switzerland',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Syria',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Taiwan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tajikistan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tanzania',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Thailand',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Togo',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tokelau',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tonga',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Trinidad and Tobago',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tunisia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Turkey',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Turkmenistan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Turks and Caicos Islands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Tuvalu',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'U.S. Virgin Islands',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Uganda',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Ukraine',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'United Arab Emirates',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'United Kingdom',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'United States',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Uruguay',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Uzbekistan',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Vanuatu',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Vatican',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Venezuela',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Vietnam',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Wallis and Futuna',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Western Sahara',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Yemen',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Zambia',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        //     [
        //         'name' => 'Zimbabwe',
        //            'children' => [
        //             [
        //             'name' => '',
        //                 'children' => [
        //                     ['name' => ''],
        //                 ],
        //             ]
        //         ],
        //     ],
        ];

        foreach ($areas as $area) 
        {
            \App\Area::create($area);
        }
        
    }
}
