<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , function (){
    $courses = \App\Course::take(9)->get();
    return view('welcome')->with('courses' ,$courses);
});
Auth::routes(['verify' => true]);

Route::post('/course/search' , 'CourseController@search');
Route::get('/about' , 'InfoController@about');
Route::get('/contact' , 'InfoController@contact');
Route::get('/courses' , 'CourseController@courses');
Route::get('/online' , 'OnlineController@view');
Route::get('/services' , 'ServiceController@view');
Route::get('/course/details/{course_id}' , 'CourseController@courseDetails');
Route::get('/profile' , 'ProfileController@profile');
Route::get('/certificates' , 'CertificateController@certificate');
Route::get('/books' , 'HomeController@books');
Route::get('/book/preview/{book_name}/{book_id}' , 'HomeController@bookPreview');
Route::get('/fsp/exam/__demingAcademy-Egy-toLearn2020' , 'ExamController@examView')->middleware('auth');
Route::post('/exam/result' , 'ExamController@examResult');

Route::get('/admin_login', 'AdminController@adminLoginView');
Route::get('/admin', 'AdminController@panel');

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/course/register/{course_id}', 'CourseController@courseRegister');
    Route::post('/course/register/{course_id}', 'CourseController@courseRegister');
    Route::post('/upload/certificate', 'UploadWizardController@upload');
    Route::get('/profile' , 'ProfileController@profile');
    Route::post('/profile' , 'ProfileController@profile');
    Route::get('/admin/certificates' , 'AdminController@certificate');
    Route::get('/admin/books' , 'AdminController@books');
    Route::get('/admin/book/delete/{book_id}' , 'AdminController@bookDelete');
    Route::get('/admin/book/visibility/{book_id}/{flag}' , 'AdminController@bookVisibility');


    Route::post('/certificates' , 'AdminController@certificate');
    Route::post('/admin/books' , 'AdminController@books');
    Route::post('get-support' , 'HomeController@support')->name('support');

});


