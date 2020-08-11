<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        /**
         *Routes Details Plans
         */
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');
        Route::delete('plans/{url}/details/{idPlan}', 'DetailPlanController@destroy')->name('details.plan.destroy');
        Route::get('plans/{url}/details/{idPlan}', 'DetailPlanController@show')->name('details.plan.show');
        Route::get('plans/{url}/details/{idPlan}/edit', 'DetailPlanController@edit')->name('details.plan.edit');
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
        Route::put('plans/{url}/details/{idPlan}', 'DetailPlanController@update')->name('details.plan.update');
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');


        /**
         * Route Plans
         */
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
        Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
        Route::post('plans', 'PlanController@store')->name('plans.store');

        /**
         * Home Dashboard*
         */
        Route::get('/', 'PlanController@show')->name('admin.index');

    });


Route::get('/', function () {
    return view('welcome');
});
