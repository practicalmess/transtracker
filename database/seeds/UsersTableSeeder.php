<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//User 1
    	//Necessary user columns
        $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
	    $user->name = 'Jill';
	    $user->email = 'jill@harvard.edu';
	    $user->password = \Hash::make('helloworld');
	    //User profile columns
	    $user->birthday = Carbon\Carbon::now()->subYears(21);
	    $user->gender = 'Woman';
	    $user->pronouns = "she/her";

	    $user->save();

	    //User 2 - used to demonstrate inability to access posts by a user you are not sign in as
	    //Necessary user columns
	    $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
	    $user->name = 'Jamal';
	    $user->email = 'jamal@harvard.edu';
	    $user->password = \Hash::make('helloworld');
	    //User profile columns
	    $user->birthday = Carbon\Carbon::now()->subDays(20)->subYears(28);
	    $user->gender = 'Man';
	    $user->pronouns = "he/him";

	    $user->save();

	    //User 3 - used to demonstrate how a lack of posts or profile information is handled
	    //Necessary user columns
	    $user = \App\User::firstOrCreate(['email' => 'jan@harvard.edu']);
	    $user->name = 'Jan';
	    $user->email = 'jan@harvard.edu';
	    $user->password = \Hash::make('helloworld');

	    $user->save();
    }
}
