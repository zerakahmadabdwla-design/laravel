

<?php

use/app/http/controllers/testcontrol
route::get('/home',[testcontrol::class,'method']);



Route::get('/home/{id}', function ($id) {
    return $id;
});



