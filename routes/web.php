<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController ;
use App\Http\Controllers\Frontend\CourseController ;
use App\Http\Controllers\Frontend\InstructorController ;
use App\Http\Controllers\Frontend\GalleryController ;
use App\Http\Controllers\Frontend\BlogController ;
use App\Http\Controllers\Frontend\ContactController ;
use App\Http\Controllers\Frontend\SignController ;
use App\Http\Controllers\Admin\AdminController ;
use App\Http\Controllers\Admin\BannerController ;
use App\Http\Controllers\Admin\CoursecategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\SiteimageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RoleController;
use \App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\SettingsController;


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

//forntend route

//home route
Route::get('/',[HomeController::class, 'maanhome'])->name('home');
// course route
Route::get('/course',[CourseController::class, 'maancourse'])->name('course');
Route::get('/coursesingle/{course?}',[CourseController::class, 'maancourseSingle'])->name('coursesingle');
//instructors route
Route::get('/instructors',[InstructorController::class, 'maaninstructors'])->name('instructors');
Route::get('/instructorsingle/{instructor?}',[InstructorController::class, 'maaninstructorSingle'])->name('instructorsingle');
// gallery route
Route::get('/gallery',[GalleryController::class, 'maangallery'])->name('gallery');
//contact route
Route::get('/contactus',[ContactController::class, 'maancontactus'])->name('contactus');
Route::post('/contactus',[ContactController::class, 'maancontactstore']);
//signin route
Route::get('/signin',[SignController::class, 'maansignin'])->name('signin');
Route::post('/signin',[SignController::class, 'maansignin_login']);
Route::get('/signout',[SignController::class, 'maansignout'])->name('signout');
//signup route
Route::get('/signup',[SignController::class, 'maansignup'])->name('signup');
Route::post('/signup',[SignController::class, 'maansignupstore']);
//route blog
Route::get('/blog',[BlogController::class, 'maanblog'])->name('blog');
Route::get('/blogsingle/{blog?}',[BlogController::class, 'maanblogsingle'])->name('blogsingle');

//Auth route..
Route::get('/login',[AuthController::class,'maanindex'])->name('login');
Route::post('/login',[AuthController::class,'maanlogin']);
Route::get('/logout',[AuthController::class,'maanlogout'])->name('logout');

//route admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::group(['middleware'=>'auth'],function (){
        //Route dashboard
        Route::get('/', [AdminController::class, 'naandashboard'])->name('dashboard');
        //Route role
        Route::group(['middleware'=>['role:super-admin']],function () {
            //Route role
            Route::get('roles',[RoleController::class, 'maanroleindex'])->name('role');
            Route::post('roles',[RoleController::class, 'maanrolestore']);
            Route::get('roles/edit/{id}',[RoleController::class,'maanroleedit'])->name('role.edit');
            Route::match(['put', 'patch'],'role/update/{id}',[RoleController::class,'maanroleupdate'])->name('role.update');
            Route::delete('roles/destroy/{id}',[RoleController::class,'maanroledestroy'])->name('role.destroy');

        });
        Route::group(['middleware'=>'role:super-admin,admin'],function(){
            Route::get('/users', [UserController::class, 'maanuserindex'])->name('user');
            Route::post('/users', [UserController::class, 'maanuserstore']);
            Route::get('/users/edit/{user}', [UserController::class, 'maanuseredit'])->name('user.edit');
            Route::match(['put', 'patch'], 'user/update/{user}', [UserController::class, 'maanuserupdate'])->name('user.update');
            Route::delete('users/destroy/{user}', [UserController::class, 'maanuserdestroy'])->name('user.destroy');
            //user ajax route
            Route::get('/users/ajax', [UserController::class, 'maanuserajax'])->name('user.ajax');

        });


        //Route banners
        Route::get('banner',[BannerController::class,'maanbanner'])->name('banner');
        Route::post('banner',[BannerController::class,'maanbannerstore']);
        Route::get('banner/edit/{id}',[BannerController::class,'maanbanneredit'])->name('banner.edit');
        Route::match(['put', 'patch'],'banner/update/{id}',[BannerController::class,'maanbannerupdate'])->name('banner.update');
        Route::delete('banner/destroy/{id}',[BannerController::class,'maanbannerdestroy'])->name('banner.destroy');
        //Route blogs
        Route::get('blog',[\App\Http\Controllers\Admin\BlogController::class,'maanblog'])->name('blog');
        Route::post('blog',[\App\Http\Controllers\Admin\BlogController::class,'maanblogstore']);
        Route::get('blog/edit/{id}',[\App\Http\Controllers\Admin\BlogController::class,'maanblogedit'])->name('blog.edit');
        Route::match(['put', 'patch'],'blog/update/{id}',[\App\Http\Controllers\Admin\BlogController::class,'maanblogupdate'])->name('blog.update');
        Route::delete('blog/destroy/{id}',[\App\Http\Controllers\Admin\BlogController::class,'maanblogdestroy'])->name('blog.destroy');

        //Route course category
        Route::get('course/category',[CoursecategoryController::class,'maancoursecategory'])->name('course.category');
        Route::post('course/category',[CoursecategoryController::class,'maancoursecategorystore']);
        //Route course category edit
        Route::get('course/category/edit/{id}',[CoursecategoryController::class,'maancoursecategoryedit'])->name('course.category.edit');
        //Route course category update
        Route::match(['put', 'patch'],'course/category/update/{id}',[CoursecategoryController::class,'maancoursecategoryupdate'])->name('course.category.update');
        //Route course category delete
        Route::delete('course/category/destroy/{id}',[CoursecategoryController::class,'maancoursecategorydestroy'])->name('course.category.destroy');
         //Route contact
        Route::get('contact',[\App\Http\Controllers\Admin\ContactController::class,'maancontact'])->name('contact');
        //Route contact delete
        Route::delete('contact/destroy/{id}',[\App\Http\Controllers\Admin\ContactController::class,'maancontactdestroy'])->name('contact.destroy');

        //Route course
        Route::get('course',[\App\Http\Controllers\Admin\CourseController::class,'maancourse'])->name('course');
        Route::post('course',[\App\Http\Controllers\Admin\CourseController::class,'maancoursestore']);
        //Route course edit
        Route::get('course/edit/{id}',[\App\Http\Controllers\Admin\CourseController::class,'maancourseedit'])->name('course.edit');
        //Route course update
        Route::match(['put', 'patch'],'course/update/{id}',[\App\Http\Controllers\Admin\CourseController::class,'maancourseupdate'])->name('course.update');
        //Route course delete
        Route::delete('course/destroy/{id}',[\App\Http\Controllers\Admin\CourseController::class,'maancoursedestroy'])->name('course.destroy');
        //Route  instructor
        Route::get('instructor',[\App\Http\Controllers\Admin\InstructorController::class,'maaninstructor'])->name('instructor');
        Route::post('instructor',[\App\Http\Controllers\Admin\InstructorController::class,'maaninstructorstore']);
        //Route instructor edit
        Route::get('instructor/edit/{id}',[\App\Http\Controllers\Admin\InstructorController::class,'maaninstructoredit'])->name('instructor.edit');
        //Route instructor update
        Route::match(['put', 'patch'],'instructor/update/{id}',[\App\Http\Controllers\Admin\InstructorController::class,'maaninstructorupdate'])->name('instructor.update');
        //Route instructor delete
        Route::delete('instructor/destroy/{id}',[\App\Http\Controllers\Admin\InstructorController::class,'maaninstructordestroy'])->name('instructor.destroy');

        //Route feedbacks
        Route::get('feedback',[FeedbackController::class,'maanfeedback'])->name('feedback');
        Route::post('feedback',[FeedbackController::class,'maanfeedbackstore']);
        Route::get('feedback/edit/{id}',[FeedbackController::class,'maanfeedbackedit'])->name('feedback.edit');
        Route::match(['put', 'patch'],'feedback/update/{id}',[FeedbackController::class,'maanfeedbackupdate'])->name('feedback.update');
        Route::delete('feedback/destroy/{id}',[FeedbackController::class,'maanfeedbackdestroy'])->name('feedback.destroy');
        //Route  gallery
        Route::get('gallery',[\App\Http\Controllers\Admin\GalleryController::class,'maangallery'])->name('gallery');
        Route::post('gallery',[\App\Http\Controllers\Admin\GalleryController::class,'maangallerystore']);
        //Route gallery edit
        Route::get('gallery/edit/{gallery}',[\App\Http\Controllers\Admin\GalleryController::class,'maangalleryedit'])->name('gallery.edit');
        //Route gallery update
        Route::match(['put', 'patch'],'gallery/update/{gallery}',[\App\Http\Controllers\Admin\GalleryController::class,'maangalleryupdate'])->name('gallery.update');
        //Route gallery delete
        Route::delete('gallery/destroy/{gallery}',[\App\Http\Controllers\Admin\GalleryController::class,'maangallerydestroy'])->name('gallery.destroy');
        //Route siteimage
        Route::get('siteimage',[SiteimageController::class,'maansiteimage'])->name('siteimage');
        Route::post('siteimage',[SiteimageController::class,'maansiteimagestore']);
        Route::get('siteimage/edit/{id}',[SiteimageController::class,'maansiteimageedit'])->name('siteimage.edit');
        Route::match(['put', 'patch'],'siteimage/update/{id}',[SiteimageController::class,'maansiteimageupdate'])->name('siteimage.update');
        Route::delete('siteimage/destroy/{id}',[SiteimageController::class,'maansiteimagedestroy'])->name('siteimage.destroy');
        //Route settings
        Route::get('/settings',[SettingsController::class,'maanSettingsIndex'])->name('settings.index');
        Route::post('/settings',[SettingsController::class,'maanSettingsStore'])->name('settings.store');
        Route::match(['put', 'patch'],'/settings/update/{settings}',[SettingsController::class,'maanSettingsUpdate'])->name('settings.update');
        Route::delete('/settings/destroy/{settings}',[SettingsController::class,'maanSettingsDestroy'])->name('settings.destroy');
    });

});
//route maan user
Route::prefix('maanuser')->name('maanuser.')->group(function (){

    Route::get('/',[\App\Http\Controllers\MaanuserController::class,'index'])->name('index')->middleware('auth:maanuser');
    Route::get('/course',[\App\Http\Controllers\MaanuserController::class,'maanusercourse'])->name('course')->middleware('auth:maanuser');
    Route::get('/instructor',[\App\Http\Controllers\MaanuserController::class,'maanuserinstructor'])->name('instructor')->middleware('auth:maanuser');
});

//Route documentation...
Route::get('/documentation/maanlms', [\App\Http\Controllers\DocumentationController::class, 'maandocumentation'])->name('documentation.maanlms');
