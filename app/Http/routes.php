<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

//User authentication routes
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', [
    'middleware' => 'auth',
    'uses' => 'Auth\AuthController@getLogout'
    ]);

//Login restricted routes
Route::group(['middleware' => 'auth'], function() {
    //Blog routes
    Route::get('/blog', 'BlogController@getBlog');
    Route::get('/blog/new-post', 'BlogController@getNew');
    Route::post('/blog/publish-post', 'BlogController@postPublish');
    Route::get('/blog/post/{id}', 'BlogController@getPost');
    Route::get('/blog/edit/{id}', 'BlogController@getEdit');
    Route::post('/blog/edit', 'BlogController@postEdit');
    Route::get('/blog/delete/{id}', 'BlogController@getDelete');
    Route::post('/blog/post-deleted', 'BlogController@postDelete');

    //Events routes
    Route::get('/milestones', 'EventsController@getMilestones');
    Route::get('/milestones/new-event', 'EventsController@getNew');
    Route::post('/milestones/publish', 'EventsController@postPublish');
    Route::get('/milestones/edit/{id}', 'EventsController@getEdit');
    Route::post('/milestones/edit', 'EventsController@postEdit');
    Route::get('/milestones/delete/{id}', 'EventsController@getDelete');
    Route::post('/milestones/event-deleted', 'EventsController@postDelete');

    //User profile routes
    Route::get('/profile', 'ProfileController@getProfile');
});





//Database connection test
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

?>