<?php

use Illuminate\Support\Facades\Route;

Route::post('upload', \Creode\BulkUploadField\Http\Controllers\UploadController::class);
