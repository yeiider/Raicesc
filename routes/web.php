<?php



Route::get('/','Index@index')->name('index');
Route::get('/home','Home@index')->name('home');
Route::get('/Servicio/Crear','Index@servicioCrear')->name('screar');
Route::get('/Servicio/{id}','Index@servicio')->name('servicio');
Route::get('/ServicioDrop/{id}','Index@servicioDrop')->name('serviciodrop');
Route::post('/Servicio/set','Index@setServicio')->name('set.servicio');
Route::post('/Servicio/create','Index@addServicio')->name('addSer');
Route::get('/Portafolio/Add','Index@addPortafolio')->name('add.portafolio');
Route::post('/Portafolio/Editar','Index@setPortafolio')->name('setportafolio');
Route::get('/Portafolio/{id}', 'Index@portafolioUp')->name('upportafolio');
Route::get('/PortafolioDrop/{id}', 'Index@portafolioDrop')->name('dorpPortafolio');

Route::post('/Portafolio/CreateP','Index@createPortafolio')->name('create.portafolio');

Route::get('/Historia','Index@historia')->name('historia');
Route::post('/Historia/create','Index@createHistory')->name('add.historia');
Route::get('/Historia/update/{id}','Index@updateHistory')->name('updatehistory');
Route::post('/Historia/set','Index@setHistory')->name('set.historia');
Route::get('/Historia/drop/{id}','Index@dropHistoria')->name('drophistory');

Route::post('/Config','Index@setConfig')->name('config');
Route::post('/Banner','Index@createBanner')->name('create.banner');
Route::get('Banner/edit/{id}','Index@setBanner')->name('set.banner');
Route::get('Banner/drop/{id}','Index@dropBanner')->name('drop.banner');
Route::get('/Login','Auth\LoginController@form')->name('login');
Route::post('/Login/eset','Auth\LoginController@login')->name('entrar');
Route::get('/Salir','Auth\LoginController@logaut')->name('salir');
Route::post('/sendMesage','EmailContacto@index')->name('send-email');
Route::get('/PQRSF','PQRSF@index')->name('pqrsf');
Route::get('/politica-de-tratamiento-de-datos','PQRSF@politicas')->name('politicas');
Route::post('/enviarPQRSF','PQRSF@sendPQRSF')->name('pqrsf2');
?>