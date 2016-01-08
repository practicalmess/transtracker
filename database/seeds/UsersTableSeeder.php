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
	    $user->birthday = Carbon\Carbon::now()->subYears(21);
	    $user->gender = 'Woman';
	    $user->pronouns = "she/her";

	    $user->save();

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
    }
}
