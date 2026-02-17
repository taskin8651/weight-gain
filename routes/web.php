<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Frontend\AppointmentController;


Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    
    Route::resource('programs', App\Http\Controllers\Admin\ProgramController::class);
    Route::resource('diet-plans', App\Http\Controllers\Admin\DietPlanController::class);
    Route::resource('transformations', App\Http\Controllers\Admin\TransformationController::class);

     Route::resource('appointments', App\Http\Controllers\Admin\AppointmentController::class)
        ->only(['index','destroy']);

    Route::patch('appointments/{appointment}/approve',
        [App\Http\Controllers\Admin\AppointmentController::class,'approve'])
        ->name('appointments.approve');

    Route::patch('appointments/{appointment}/reject',
        [App\Http\Controllers\Admin\AppointmentController::class,'reject'])
        ->name('appointments.reject');

        Route::post('/appointment-book',
    [App\Http\Controllers\User\AppointmentController::class,'store'])
    ->name('user.appointment.store');

     Route::resource('services',
        App\Http\Controllers\Admin\ServiceController::class);


Route::get('settings', [App\Http\Controllers\Admin\SettingController::class,'index'])
        ->name('settings.index');

    Route::post('settings', [App\Http\Controllers\Admin\SettingController::class,'update'])
        ->name('settings.update');
          Route::resource('testimonials',
        App\Http\Controllers\Admin\TestimonialController::class);

         Route::resource('hero-sections',
        App\Http\Controllers\Admin\HeroSectionController::class);

        Route::resource('abouts',
    App\Http\Controllers\Admin\AboutController::class);

Route::resource('brands',
    App\Http\Controllers\Admin\BrandController::class);

     Route::resource('hero-sections',
        App\Http\Controllers\Admin\HeroSectionController::class);

        Route::resource('contacts',
    App\Http\Controllers\Admin\ContactController::class)
    ->only(['index','show','destroy']);


});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});




Route::get('/', [FrontendController::class, 'home'])
    ->name('home');

    
Route::get('/programs', [FrontendController::class, 'programs'])->name('programs.page');
Route::get('/about', [FrontendController::class, 'about'])->name('about.page');
Route::get('/services', [FrontendController::class, 'services'])->name('services.page');
Route::get('/service/{id}', [FrontendController::class, 'serviceDetail'])
    ->name('service.detail');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact.page');

Route::post('/contact', [FrontendController::class, 'storeContact'])
    ->name('contact.store');

Route::get('/appointment', [AppointmentController::class,'create'])
    ->name('appointment.page');

Route::post('/appointment', [AppointmentController::class,'store'])
    ->name('appointment.store');

/* Optional: Program Detail Page */
Route::get('/program/{id}', [FrontendController::class, 'programDetail'])
    ->name('program.detail');

    Route::get('/diet-plans', [FrontendController::class,'diet'])
    ->name('diet.page');

Route::get('/diet-plans/{id}', [FrontendController::class,'dietDetail'])
    ->name('diet.detail');

    Route::get('/transformations',
    [FrontendController::class,'transformations'])
    ->name('transformations.page');

Route::get('/transformations/{id}',
    [FrontendController::class,'transformationDetail'])
    ->name('transformations.detail');
