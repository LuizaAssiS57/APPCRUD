<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

Route::Resource("publication", PublicationController::class);