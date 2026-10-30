<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    abort(500, 'Intentional failure for smoke test rollback');
});
