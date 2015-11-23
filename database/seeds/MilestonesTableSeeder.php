<?php

use Illuminate\Database\Seeder;

class MilestonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('milestones')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 1,
        	'type' => 'Coming Out',
            'glyph' => 'star-empty',
        	'date' => '11/19/2015',
        	'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sem, class sociosqu suspendisse senectus mi mus at fringilla pellentesque, molestie ultrices habitasse tellus nostra proin id.'
        	]);
        DB::table('milestones')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 1,
        	'type' => 'Presentation',
            'glyph' => 'user',
        	'date' => '11/20/2015',
        	'description' => 'Gravida facilisi leo sem nullam turpis sodales praesent maecenas, ultricies facilisis elementum sit condimentum volutpat mi dictumst hendrerit, platea interdum congue tincidunt dapibus etiam malesuada.'
        	]);
        DB::table('milestones')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 2,
        	'type' => 'Legal',
            'glyph' => 'book',
        	'date' => '11/20/2015',
        	'description' => 'Nisl id luctus inceptos justo faucibus hac vivamus eleifend praesent, leo magnis lobortis himenaeos dictumst a sapien gravida elementum, fusce vitae commodo sed tellus purus curabitur ut.'
        	]);
    }
}
