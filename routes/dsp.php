<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dsp\AuthController;
use App\Http\Controllers\Dsp\MailController;
use App\Http\Controllers\Dsp\Admin\PatientsController;
use App\Http\Controllers\Dsp\Admin\QuestionsController;
use App\Http\Controllers\Dsp\Admin\SurveysController;
use App\Http\Controllers\Dsp\Admin\TagsController;
use App\Http\Controllers\Dsp\Admin\FilesController;
use App\Http\Controllers\Dsp\TestsController;

Route::prefix('/dellasanta')->group(function () {

    Route::post('/login', [AuthController::class, 'login']);
    Route::delete('/logout', [AuthController::class, 'logout']);

    Route::middleware('auth:dsp')->group(function () {
        Route::resource('/patients', PatientsController::class);
        Route::resource('/questions', QuestionsController::class);
        Route::resource('/surveys', SurveysController::class);
        Route::resource('/tags', TagsController::class);

        Route::get('/surveys/{id}/results', [SurveysController::class, 'calculateResults'])->name('survey.results');

        Route::prefix('/file')->controller(FilesController::class)->group(function () {
            Route::get('/{id}', 'download');
            Route::post('/', 'upload');
            Route::delete('/{id}', 'destroy');
        });

        Route::post('/email/test-link', [MailController::class, 'sendEmailWithTestLink']);
    });

    Route::prefix('/tests')->middleware('dsp.patient')->controller(TestsController::class)->name('tests.')->group(function () {
        Route::get('/{token}', 'show')->name('show');
        Route::put('/{id}', 'update')->name('update');
        Route::put('/patient/{id}', 'updatePatientInfo')->name('patient');
    });

    Route::post('email/support', [MailController::class, 'contactSupport']);
});
