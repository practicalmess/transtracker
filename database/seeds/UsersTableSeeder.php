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
    	//Necessary user columns
        $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
	    $user->name = 'Jill';
	    $user->email = 'jill@harvard.edu';
	    $user->password = \Hash::make('helloworld');
	    //User profile columns
	    $user->birthday = Carbon::createFromDate(1990, 5, 21);
	    $user->gender = 'Woman';
	    $user->pronouns = "she/her";

	    $user->save();

	    $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
	    $user->name = 'Jamal';
	    $user->email = 'jamal@harvard.edu';
	    $user->password = \Hash::make('helloworld');

	    //User profile columns
	    $user->birthday = Carbon::createFromDate(1983, 10, 4);
	    $user->gender = 'Man';
	    $user->pronouns = "he/him";

	    $user->save();
    }
}
