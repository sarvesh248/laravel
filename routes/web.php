<?php

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{id}/update', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{id}/delete', [StudentController::class, 'destroy'])->name('students.delete');
Route::get('/about', function () {
    return "This is About Page - Laravel Git Practice";
});
Route::get('/about', function () {
    return "About Page from feature branch";
});

