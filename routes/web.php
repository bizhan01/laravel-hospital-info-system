<?php

Route::get('/', 'HomeController@home',)->name('home');


Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::post('/hospitalSearch', 'HomeController@hospitalSearch')->name('hospitalSearch');

Route::get('/hospitalIndex/{user_id}', 'HomeController@hospitalIndex')->name('hospitalIndex');
Route::get('/hospitalAbout/{user_id}', 'HomeController@hospitalAbout')->name('hospitalAbout');
Route::get('/hospitalService/{user_id}', 'HomeController@hospitalService')->name('hospitalService');
Route::get('/hospitalServiceInfo/{id}', 'HomeController@hospitalServiceInfo')->name('hospitalServiceInfo');
Route::get('/hospitalNews/{user_id}', 'HomeController@hospitalNews')->name('hospitalNews');
Route::get('/hospitalAdvs/{user_id}', 'HomeController@hospitalAdvs')->name('hospitalAdvs');
Route::get('/hospitalContactUs/{user_id}', 'HomeController@hospitalContactUs')->name('hospitalContactUs');



// CRUD Users Routes
Route::get('/delete/{id}','UserOperationController@destroy');
Route::post('/updateUserStatus/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');
Route::get('/beautySalonList','UserOperationController@beautySalonList')->name('beautySalonList');
Route::get('/storeList','UserOperationController@storeList')->name('storeList');




Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::post('/userRegister', 'UserController@userRegister')->name('userRegister');

Route::get('/addStaff', 'StaffsController@addStaff')->name('addStaff');
Route::post('/saveStaff', 'StaffsController@saveStaff')->name('saveStaff');
Route::get('/staffsInfo', 'StaffsController@staffsInfo')->name('staffsInfo');
Route::get('/staffMoreInfo/{staffId}', 'StaffsController@staffMoreInfo')->name('staffMoreInfo');
Route::get('/editStaff/{staffId}', 'StaffsController@editStaff')->name('editStaff');
Route::post('/updateStaff', 'StaffsController@updateStaff')->name('updateStaff');
Route::get('/deleteStaff/{staffId}', 'StaffsController@deleteStaff')->name('deleteStaff');

// patient
Route::get('/addPatient', 'PatientsController@addPatient')->name('addPatient');
Route::post('/savePatient', 'PatientsController@savePatient')->name('savePatient');
Route::get('/deletePatient/{patientId}', 'PatientsController@deletePatient')->name('deletePatient');
Route::get('/editPatient/{patientId}', 'PatientsController@editPatient')->name('editPatient');
Route::post('/updatePatient', 'PatientsController@updatePatient')->name('updatePatient');
Route::get('/patientsInfo', 'PatientsController@patientsInfo')->name('patientsInfo');
Route::get('/patientMoreInfo/{patientId}', 'PatientsController@patientMoreInfo')->name('patientMoreInfo');
// end patient


// Service Section Routes
Route::get('/addService', "ServicesController@addService")->name('addService');
Route::post('/saveService', "ServicesController@saveService")->name('saveService');
Route::get('/viewServices', 'ServicesController@viewServices')->name('viewServices');
Route::get('/serviceMoreInfo/{serviceId}', 'ServicesController@serviceMoreInfo')->name('serviceMoreInfo');
Route::get('/editService/{serviceId}', 'ServicesController@editService')->name('editService');
Route::post('/updateService', 'ServicesController@updateService')->name('updateService');
Route::get('/deleteService/{serviceid}', 'ServicesController@deleteService')->name('deleteService');


// Service Sections Routes
Route::get('/addServiceSection', 'ServiceSectionsController@addServiceSection')->name('addServiceSection');
Route::post('/saveServiceSection', 'ServiceSectionsController@saveServiceSection')->name('saveServiceSection');
Route::get('/viewServiceSection', 'ServiceSectionsController@viewServiceSection')->name('viewServiceSection');
Route::get('/serviceSectionMoreInfo/{serviceId}', 'ServiceSectionsController@serviceSectionMoreInfo')->name('serviceSectionMoreInfo');
Route::get('/editServiceSection/{serviceId}', 'ServiceSectionsController@editServiceSection')->name('editServiceSection');
Route::post('/updateServiceSection', 'ServiceSectionsController@updateServiceSection')->name('updateServiceSection');
Route::get('/deleteServiceSection/{serviceid}', 'ServiceSectionsController@deleteServiceSection')->name('deleteServiceSection');



// News Section Routes
Route::get('/addNews', 'NewsController@addNews')->name('addNews');
Route::post('/saveNews', 'NewsController@saveNews')->name('saveNews');
Route::get('/viewNews', 'NewsController@viewNews')->name('viewNews');
Route::get('/newDetails/{newsId}', 'NewsController@newDetails')->name('newDetails');
Route::get('/editNews/{newsId}', 'NewsController@editNews')->name('editNews');
Route::post('/updateNews', 'NewsController@updateNews')->name('updateNews');
Route::get('/deleteNews/{newsId}', 'NewsController@deleteNews')->name('deleteNews');


// Confirme News
Route::get('/newsList','NewsController@newsList')->name('newsList');
Route::get('/unBlockNews/{newsId}','NewsController@unBlock');
Route::get('/confirmedNews', 'NewsController@confirmedNews')->name('confirmedNews');
Route::get('/blockNews/{newsId}','NewsController@show');





// Advertisements Section Routes
Route::get('/addAdvertise', 'AdvertisementsController@addAdvertise')->name('addAdvertise');
Route::post('/saveAdvertisement', 'AdvertisementsController@saveAdvertisement')->name('saveAdvertisement');
Route::get('/viewAdvertise', 'AdvertisementsController@viewAdvertise')->name('viewAdvertise');
Route::get('/advertiseDetails/{id}', 'AdvertisementsController@advertiseDetails')->name('advertiseDetails');
Route::get('/deleteAvertise/{id}', 'AdvertisementsController@deleteAvertise')->name('deleteAvertise');
Route::get('/editAdvertise/{id}', 'AdvertisementsController@editAdvertise')->name('editAdvertise');
Route::post('/updateAdvertise', 'AdvertisementsController@updateAdvertise')->name('updateAdvertise');


// Confirme Advertisements
Route::get('/advertisementList','AdvertisementsController@advertisementList')->name('advertisementList');
Route::get('/unBlockAdvertisement/{newsId}','AdvertisementsController@unBlock');
Route::get('/confirmedAdvertisement', 'AdvertisementsController@confirmedAdvertisement')->name('confirmedAdvertisement');
Route::get('/blockAdvertisement/{newsId}','AdvertisementsController@show');


Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/saveSocial', 'ProfileController@saveSocial')->name('saveSocial');


// addmin.
Route::get('/adminDashboard', 'HomeController@adminDashboard')->name('adminDashboard');
Route::get('/viewHospitals', 'HomeController@viewHospitals')->name('viewHospitals');
Route::get('/hospitalDetails/{id}', 'HomeController@hospitalDetails')->name('hospitalDetails');
Route::get('/hospitalAccept/{id}', 'HomeController@hospitalAccept')->name('hospitalAccept');
Route::get('/hospitalReject/{id}', 'HomeController@hospitalReject')->name('hospitalReject');
Route::get('/hospitalReject/{id}', 'HomeController@hospitalReject')->name('hospitalReject');
Route::get('/userDelete/{id}', 'HomeController@userDelete')->name('userDelete');

Route::post('/hospitalSearchFromFirstPage', 'HomeController@hospitalSearchFromFirstPage')->name('hospitalSearchFromFirstPage');
Route::post('/doctorSearchFromFirstPage', 'HomeController@doctorSearchFromFirstPage')->name('doctorSearchFromFirstPage');
Route::post('/serviceSearchFromFirstPage', 'HomeController@serviceSearchFromFirstPage')->name('serviceSearchFromFirstPage');




// Comment & Rating Section Routes
Route::get('/comments', 'CommentController@index')->name('comments');
Route::post('/addComment', 'CommentController@store')->name('addComment');
Route::get('/deleteComment/{id}','CommentController@destroy')->name('deleteComment/{id}');
Route::get('/editComment/{id}','CommentController@show')->name('editComment/{id}');
Route::post('/updateComment/{id}','CommentController@edit')->name('updateComment/{id}');



// Contact Controller
Route::post('/sendMessage', 'SendMessageController@store')->name('sendMessage');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/deleteContact/{id}','ContactController@destroy')->name('deleteContact/{id}');
