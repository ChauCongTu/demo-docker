<?php

use Illuminate\Support\Facades\Route;
use Nhoncq\Auth\TimezonesController;

Route::get('time/{timezone}', [\nhoncq\authentication\controller\TimezonesController::class, 'index']);
