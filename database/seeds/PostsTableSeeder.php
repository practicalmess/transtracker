<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 1,
        	'title' => 'Test Post 1',
        	'date' => date('Y-m-d'),
        	'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, mollis dis ultricies sodales suspendisse aenean commodo quisque, a risus taciti mattis hendrerit congue sapien. Curabitur posuere tempus ullamcorper curae sagittis tortor nisl vestibulum senectus sed, felis adipiscing lorem a nostra nisi at turpis mus, id nulla habitasse nibh habitant leo varius sociis etiam. Ullamcorper malesuada elementum fames morbi ipsum semper sapien donec nisl montes, cursus magna hendrerit diam justo sollicitudin potenti dignissim purus, tortor laoreet enim aptent massa odio erat dis interdum. Dis nisl class viverra pellentesque vivamus varius tristique inceptos pretium quis, dignissim porttitor eleifend orci id habitant massa nullam fringilla. Tortor cum cursus dui pulvinar pretium sodales, tempor turpis velit id ultricies class, ultrices porta libero nostra etiam. Scelerisque quam aenean adipiscing varius lacinia proin at, vestibulum sem laoreet dignissim tristique inceptos elit leo, cum pulvinar turpis amet mi primis. Phasellus eleifend varius sed amet massa molestie nascetur, tincidunt lorem erat ac venenatis quis natoque, sem cum lectus eu viverra hac.',
        	]);
		DB::table('posts')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 1,
        	'title' => 'Test Post 2',
        	'date' => date('Y-m-d'),
        	'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, mollis dis ultricies sodales suspendisse aenean commodo quisque, a risus taciti mattis hendrerit congue sapien. Curabitur posuere tempus ullamcorper curae sagittis tortor nisl vestibulum senectus sed, felis adipiscing lorem a nostra nisi at turpis mus, id nulla habitasse nibh habitant leo varius sociis etiam. Ullamcorper malesuada elementum fames morbi ipsum semper sapien donec nisl montes, cursus magna hendrerit diam justo sollicitudin potenti dignissim purus, tortor laoreet enim aptent massa odio erat dis interdum. Dis nisl class viverra pellentesque vivamus varius tristique inceptos pretium quis, dignissim porttitor eleifend orci id habitant massa nullam fringilla. Tortor cum cursus dui pulvinar pretium sodales, tempor turpis velit id ultricies class, ultrices porta libero nostra etiam. Scelerisque quam aenean adipiscing varius lacinia proin at, vestibulum sem laoreet dignissim tristique inceptos elit leo, cum pulvinar turpis amet mi primis. Phasellus eleifend varius sed amet massa molestie nascetur, tincidunt lorem erat ac venenatis quis natoque, sem cum lectus eu viverra hac.',
        	]);
        DB::table('posts')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => 2,
            'title' => 'Test Post 3',
            'date' => date('Y-m-d'),
            'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, mollis dis ultricies sodales suspendisse aenean commodo quisque, a risus taciti mattis hendrerit congue sapien. Curabitur posuere tempus ullamcorper curae sagittis tortor nisl vestibulum senectus sed, felis adipiscing lorem a nostra nisi at turpis mus, id nulla habitasse nibh habitant leo varius sociis etiam. Ullamcorper malesuada elementum fames morbi ipsum semper sapien donec nisl montes, cursus magna hendrerit diam justo sollicitudin potenti dignissim purus, tortor laoreet enim aptent massa odio erat dis interdum. Dis nisl class viverra pellentesque vivamus varius tristique inceptos pretium quis, dignissim porttitor eleifend orci id habitant massa nullam fringilla. Tortor cum cursus dui pulvinar pretium sodales, tempor turpis velit id ultricies class, ultrices porta libero nostra etiam. Scelerisque quam aenean adipiscing varius lacinia proin at, vestibulum sem laoreet dignissim tristique inceptos elit leo, cum pulvinar turpis amet mi primis. Phasellus eleifend varius sed amet massa molestie nascetur, tincidunt lorem erat ac venenatis quis natoque, sem cum lectus eu viverra hac.',
            ]);
    }
}
