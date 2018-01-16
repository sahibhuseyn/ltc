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



// ================================= CLIENT ===============================================================

Route::group(['middleware' => 'language', 'web'], function () {

    Route::get('/', 'Client\MainController@index')->name('index');
    Route::get('/contacts', 'Client\ContactController@contacts')->name('contacts');
    Route::post('/contacts', 'Client\ContactController@postContacts');
    Route::get('/about', 'Client\AboutController@about')->name('about');
    Route::get('/gallery', 'Client\GalleryController@gallery')->name('gallery');
    Route::get('/events', 'Client\EventController@eventList')->name('event');
    Route::get('/prices', 'Client\PriceController@priceList')->name('price');

    Route::group(['prefix' => 'courses'], function () {
        Route::get('/', 'Client\CourseController@courseList')->name('course_list');
        Route::get('/{slug}', 'Client\CourseController@courseSingle')->name('course_single');
    });

    Route::group(['prefix' => 'teachers'], function () {
        Route::get('/', 'Client\TeacherController@teacherList')->name('teacher_list');
        Route::get('/{slug}', 'Client\TeacherController@teacherSingle')->name('teacher_single');
    });

    Route::group(['prefix' => 'posts'], function (){
        Route::get('/', 'Client\PostController@postList')->name('post_list');
        Route::get('/{slug}', 'Client\PostController@postSingle')->name('post_single');
    });

});

// ================================= END CLIENT ==============================================================

// ================================= ADMIN ===============================================================

Route::group(['middleware' => ['admin', 'web', 'sharedData'], 'prefix' => 'dash'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_index');

    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', 'Admin\LanguageController@show')->name('admin_languages');
        Route::post('/add', 'Admin\LanguageController@add')->name('admin_languages_add');
        Route::post('/update', 'Admin\LanguageController@update')->name('admin_languages_update');
        Route::get('/delete/{language}', 'admin\LanguageController@delete')->name('admin_languages_delete');
    });

    Route::group(['prefix' => 'translations'], function () {
        Route::get('/{file_name}', 'Admin\TranslationController@listKeys')->name('admin_translations');
        Route::post('/{file_name}/{key}/add', 'Admin\TranslationController@add')->name('admin_translations_add');
        Route::post('/{file_name}/{key}/update', 'Admin\TranslationController@update')->name('admin_translations_update');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/{language_code}', 'Admin\CategoryController@show')->name('admin_categories');
        Route::post('/{language_id}/add', 'Admin\CategoryController@add')->name('admin_categories_add');
        Route::post('/{category}/update', 'Admin\CategoryController@update')->name('admin_categories_update');
        Route::post('/{category}/del ete', 'Admin\CategoryController@delete')->name('admin_categories_delete');
    });

    Route::group(['prefix' => 'types'], function () {
        Route::get('/{language_code}', 'Admin\TypeController@listTypes')->name('admin_types');
        Route::post('/{language_id}/add', 'Admin\TypeController@add')->name('admin_types_add');
        Route::post('/{type}/update', 'Admin\TypeController@update')->name('admin_types_update');
        Route::post('/{type}/delete', 'Admin\TypeController@delete')->name('admin_types_delete');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/{language_code}', 'Admin\SliderController@listSlides')->name('admin_slider');
        Route::post('/{language_id}/add', 'Admin\SliderController@add')->name('admin_slider_add');
        Route::post('/{slider}/update', 'Admin\SliderController@update')->name('admin_slider_update');
        Route::post('/{slider}/delete', 'Admin\SliderController@delete')->name('admin_slider_delete');
    });

    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/{language_code}', 'Admin\GalleryController@listGalleries')->name('admin_gallery');
        Route::post('/{language_id}/add', 'Admin\GalleryController@add')->name('admin_gallery_add');
        Route::post('/{gallery}/update', 'Admin\GalleryController@update')->name('admin_gallery_update');
        Route::post('/{gallery}/delete', 'Admin\GalleryController@delete')->name('admin_gallery_delete');
    });

    Route::group(['prefix' => 'jobs'], function () {
        Route::get('/{language_code}', 'Admin\JobController@listJobs')->name('admin_jobs');
        Route::get('/{job}/edit', 'Admin\JobController@edit')->name('admin_jobs_edit');
        Route::post('/{language_id}/add', 'Admin\JobController@add')->name('admin_jobs_add');
        Route::post('/{job}/update', 'Admin\JobController@update')->name('admin_jobs_update');
        Route::post('/{job}/delete', 'Admin\JobController@delete')->name('admin_jobs_delete');
    });

    Route::group(['prefix' => 'teachers'], function () {
        Route::get('/{language_code}', 'Admin\TeacherController@show')->name('admin_teachers');
        Route::post('/{language_id}/add', 'Admin\TeacherController@add')->name('admin_teachers_add');
        Route::post('/{teacher}/update', 'Admin\TeacherController@update')->name('admin_teachers_update');
        Route::post('/{teacher}/delete', 'Admin\TeacherController@delete')->name('admin_teachers_delete');
    });

    Route::group(['prefix' => 'testimonials'], function () {
        Route::get('/{language_code}', 'Admin\TestimonialController@show')->name('admin_testimonials');
        Route::post('/{language_id}/add', 'Admin\TestimonialController@add')->name('admin_testimonials_add');
        Route::post('/{testimonial}/update', 'Admin\TestimonialController@update')->name('admin_testimonials_update');
        Route::post('/{testimonial}/delete', 'Admin\TestimonialController@delete')->name('admin_testimonials_delete');
    });

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/{language_code}', 'Admin\PostController@show')->name('admin_posts');
        Route::post('/{language_id}/add', 'Admin\PostController@add')->name('admin_posts_add');
        Route::get('/{post}/edit', 'Admin\PostController@edit')->name('admin_posts_edit');
        Route::post('/{post}/update', 'Admin\PostController@update')->name('admin_posts_update');
        Route::post('/{post}/delete', 'Admin\PostController@delete')->name('admin_posts_delete');
    });

    Route::group(['prefix' => 'courses'], function () {
        Route::get('/{language_code}', 'Admin\CourseController@show')->name('admin_courses');
        Route::post('/{language_id}/add', 'Admin\CourseController@add')->name('admin_courses_add');
        Route::get('/{course}/{code}/edit', 'Admin\CourseController@edit')->name('admin_courses_edit');
        Route::post('/{course}/update', 'Admin\CourseController@update')->name('admin_courses_update');
        Route::post('/{course}/delete', 'Admin\CourseController@delete')->name('admin_courses_delete');
    });

    Route::group(['prefix' => 'study'], function () {
        Route::get('/{language_code}', 'Admin\StudyController@show')->name('admin_study');
        Route::post('/{language_id}/add', 'Admin\StudyController@add')->name('admin_study_add');
        Route::get('/{study}/{code}/edit', 'Admin\StudyController@edit')->name('admin_study_edit');
        Route::post('/{study}/update', 'Admin\StudyController@update')->name('admin_study_update');
        Route::post('/{study}/delete', 'Admin\StudyController@delete')->name('admin_study_delete');
    });
});

// ================================= END ADMIN ==============================================================

Auth::routes();
