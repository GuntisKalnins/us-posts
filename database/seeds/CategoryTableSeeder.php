<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Vehicles',
                'children' => [
                    ['name' => 'Cars'],
                    ['name' => 'Motorcycles'],
                    ['name' => 'Scooters'],
                    ['name' => 'Vans'],
                    ['name' => 'RVs'],
                    ['name' => 'Jeeps / SUVs'],
                    ['name' => 'Trucks'],
                    ['name' => 'Trailers'],
                    ['name' => 'Other Vehicles'],
                    ['name' => 'Financing / Insurance'], 
                    ['name' => 'Number Plates'], 
                    ['name' => 'Parts / Accessories'], 
                    ['name' => 'Salvage / Scrap'], 
                    ['name' => 'Servicing / Grooming'], 
                    ['name' => 'Other Announcements'],             
                ]
            ],
            [
                'name' => 'Employment',
                'children' => [
                    ['name' => 'Administrative / Support Services'],
                    ['name' => 'Advertising'],
                    ['name' => 'Aerospace / Aviation / Defense'],
                    ['name' => 'Agriculture / Forestry'], 
                    ['name' => 'Architecture'],
                    ['name' => 'Arts / Entertainment'],
                    ['name' => 'Automotive'],
                    ['name' => 'Call Center'],
                    ['name' => 'Construction / Maintenance'],
                    ['name' => 'Consulting'],
                    ['name' => 'Domestic Help'],
                    ['name' => 'Education'],
                    ['name' => 'Engineering'],
                    ['name' => 'Finance / Accounting'],
                    ['name' => 'Food & Related Products'],
                    ['name' => 'Government'],
                    ['name' => 'Healthcare'],
                    ['name' => 'Hospitality'],
                    ['name' => 'Human Resources'],
                    ['name' => 'Information Technology'],
                    ['name' => 'Insurance'],
                    ['name' => 'Law'],
                    ['name' => 'Management'],
                    ['name' => 'Manufacturing'],  
                    ['name' => 'Marketing / Sales'],
                    ['name' => 'Non-Profit'],
                    ['name' => 'Oil / Gas / Utilities'],
                    ['name' => 'Procurement'],
                    ['name' => 'Publishing'],
                    ['name' => 'Real Estate'],
                    ['name' => 'Research & Development'],
                    ['name' => 'Retail'],
                    ['name' => 'Science'],
                    ['name' => 'Security'],
                    ['name' => 'Sports / Recreation'],
                    ['name' => 'Supply Chain'],
                    ['name' => 'Telecommunications'],
                    ['name' => 'Transportation'],                                 
                ]
            ],
            [
                'name' => 'Homes & Offices',
                'children' => [
                    ['name' => 'Apartment / Condo / Townhouse'],
                    ['name' => 'House / Single Family'],
                    ['name' => 'Mobile Home'],
                    ['name' => 'Office / Commercial / Industrial'],
                    ['name' => 'Land / Farm / Ranch'], 
                    ['name' => 'Other Homes & Offices'],
                    ['name' => 'Financing / Insurance'],
                    ['name' => 'Repair / Renovation / Services'],
                    ['name' => 'Valuers / Legal'],
                    ['name' => 'Other Announcements'],
                ]
            ],
            [
                'name' => 'Personals',
                'children' => [
                    ['name' => 'Casual Dating'],
                    ['name' => 'Men Seeking Men'],
                    ['name' => 'Men Seeking Women'],
                    ['name' => 'Missed Connections'],
                    ['name' => 'Women Seeking Men'],
                    ['name' => 'Women Seeking Women'], 
             
                ]
            ],
            [
                'name' => 'Services',
                'children' => [
                    ['name' => 'Automotive Services'],
                    ['name' => 'Beauty & Salon Services'],
                    ['name' => 'Caregivers & Baby Sitting'],
                    ['name' => 'Cleaning Services'],
                    ['name' => 'Construction & Remodeling'],
                    ['name' => 'Financial Services'],   
                    ['name' => 'Health & Wellness'],   
                    ['name' => 'Home Services'],   
                    ['name' => 'Insurance'],   
                    ['name' => 'Lawn & Garden Services'],   
                    ['name' => 'Legal Services'],   
                    ['name' => 'Marketing Services'],   
                    ['name' => 'Moving & Storage'],                     
                    ['name' => 'Office Services'],
                    ['name' => 'Real Estate Services'],
                    ['name' => 'Training & Education Services'],
                    ['name' => 'Web Design & Tech'],   
                    ['name' => 'Weddings & Photography'],
                    
                ]
            ],
            [
                'name' => '	Community',
                'children' => [
                    ['name' => 'Announcements'],
                    ['name' => 'Carpool'],
                    ['name' => 'Churches'],
                    ['name' => 'Free Stuff'],
                    ['name' => 'Garage Sales'], 
                    ['name' => 'General Entertainment'], 
                    ['name' => 'Items Wanted'], 
                    ['name' => 'Lost & Found'], 
                    ['name' => 'Musicians & Bands'],
                    ['name' => 'Volunteers'],                  
                ]
            ],
            [
                'name' => '	Items for Sale',
                'children' => [
                    ['name' => 'Appliances'],
                    ['name' => 'Art & Crafts'],
                    ['name' => 'Automotive Items & Parts'],
                    ['name' => 'Bicycles'],
                    ['name' => 'Books & Magazines'],  
                    ['name' => 'Cell Phones'],  
                    ['name' => 'Clothing & Apparel'],  
                    ['name' => 'Collectibles'],  
                    ['name' => 'Computers & Electronics'],  
                    ['name' => 'Farm & Ranch'],  
                    ['name' => 'Games'],  
                    ['name' => 'Health & Beauty Items'],  
                    ['name' => 'Heavy Equipment'],  
                    ['name' => 'Hobbies'],  
                    ['name' => 'Household & Furniture'],  
                    ['name' => 'Jewelry'],  
                    ['name' => 'Kids Stuff'],  
                    ['name' => 'Lawn & Garden'],  
                    ['name' => 'Mattresses'],
                    ['name' => 'Miscellaneous Items'], 
                    ['name' => 'Movies & DVDs'], 
                    ['name' => 'Music & CDs'], 
                    ['name' => 'Musical Instruments'], 
                    ['name' => 'Office & Business'],                   
                    ['name' => 'Sports Equipment'], 
                    ['name' => 'Tickets'], 
                    ['name' => 'Tools'], 
                ]
            ],
            [
                'name' => '	Pets',
                'children' => [
                    ['name' => 'Birds'],
                    ['name' => 'Cats'],
                    ['name' => 'Dogs'],
                    ['name' => 'Fish'], 
                    ['name' => 'Horses'],
                    ['name' => 'Livestock'],
                    ['name' => 'Pets Lost & Found'],
                    ['name' => 'Pet Services & Stores'],
                    ['name' => 'Pet Supplies'],
                    ['name' => 'Reptiles / Amphibians'],
                    ['name' => 'Small Mammals'],
                    ['name' => 'Other Pets'],               
                ]
            ],
            [
                'name' => '	Business Opportunities',
                'children' => [
                    ['name' => 'Brokerage'],
                    ['name' => 'Distributors'],
                    ['name' => 'Franchising'],
                    ['name' => 'Home Based'],
                    ['name' => 'Import / Export'],
                    ['name' => 'Internet'],
                    ['name' => 'Inventions'],
                    ['name' => 'Investors'],
                    ['name' => 'Mail Order'],
                    ['name' => 'Networking-MLM'],
                    ['name' => 'Partners Programs'],
                    ['name' => 'Resources / Networking'],
                    ['name' => 'Other Business Opportunities'],
                    ['name' => 'Other Announcements'],                
                ]
            ],
        ];

        foreach ($categories as $category) 
        {
            \App\Category::create($category);
        }


    }
}