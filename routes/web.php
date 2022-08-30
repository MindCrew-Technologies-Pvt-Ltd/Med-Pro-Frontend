<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PhysicianController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Routes for Physician */
Route::any('/', function () {
    return view('physician.register');
});

// pharmacist route
route::any('/pharmacist_Login',[PharmacistController::class, 'PharmacistLogin']);
Route::any('/pharmacist_Login/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharmacistlogin');
});

route::any('/pharmacist_register',[PharmacistController::class, 'pharmacistregister']);

Route::any('/pharmacist_register/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharmacistregister');
});

route::any('/pharmacist_forgot_password',[PharmacistController::class, 'pharmasictforgotpassword']);
Route::any('/pharmacist_forgot_password/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharmasictforgotpassword');
});



route::any('/pharmacist_forgot_password02',[PharmacistController::class, 'pharmasictforgotpassword02']);
Route::any('/pharmacist_forgot_password02/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharmasictforgotpassword02');
});

route::any('/pharmacist_prescription',[PharmacistController::class, 'pharmacist_prescription']);
Route::any('/pharmacist_prescription/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharmacist_prescription');
});

route::any('/pharmacist_reset_password/{id}',[PharmacistController::class, 'reset_password']);
Route::any('/pharmacist_reset_password/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.reset_password');
});

route::any('/pharmacist_reset_success',[PharmacistController::class, 'reset_success']);
Route::any('/pharmacist_reset_success/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.reset_success');
});

route::any('/pharmacist_dashboard',[PharmacistController::class, 'dashboard']);
Route::any('/pharmacist_dashboard/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.index');
});

route::any('/pharmacist_management',[PharmacistController::class, 'pharmacistManagement']);


route::any('/view_prescription/{id}',[PharmacistController::class, 'viewPrescription'])->name('view_prescription');
Route::any('/view_prescription/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.viewprescription');
});

route::any('/accept_prescription/{id}',[PharmacistController::class, 'acceptPrescription'])->name('accept');
Route::any('/accept_prescription/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.acceptprescription');
});

route::any('/show_prescription/{id}',[PharmacistController::class, 'showPrescription'])->name('show');
Route::any('/show_prescription/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.showprescription');
});


route::any('/landing',[PharmacistController::class, 'landing']);

route::get('/pharmacist_profile/{id}', [PharmacistController::class, 'viewPharmProfile'])->name('pharmprofile');
Route::any('/pharmacist_profile/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
   Session::put('locale', $lang);
    return view('pharmacist.pharm_profile');
});


route::any('/pharmacist_edit_profile/{id}', [PharmacistController::class, 'editPharmProfile'])->name('edit.pharmprofile');
Route::any('/pharmacist_edit_profile/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('pharmacist.pharm_edit_profile');
});
// pharmacist route

// physician route start
route::any('/login',[PhysicianController::class, 'login']);
Route::any('/login/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.login');
});

route::any('/forgot_password',[PhysicianController::class, 'forgotpassword']);
Route::any('/forgot_password/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.forgot_password1');
});

route::any('/forgot_password2',[PhysicianController::class, 'forgotpassword2']);
Route::any('/forgot_password2/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.forgot_password2');
});

route::any('/register',[PhysicianController::class, 'register']);
Route::any('/register/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.register');
});

route::any('/reset_password/{id}',[PhysicianController::class,'password_reset']);
Route::any('/reset_password/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.reset_password');
});

route::any('/reset_success',[PhysicianController::class, 'reset_success']);
Route::any('/reset_success/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.reset_success');
});

route::any('/dashboard',[PhysicianController::class, 'dashboard']);
Route::any('/dashboard/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.index');
});

// route::any('/index', [UserController::class, 'register']);

route::any('/patient_management',[PhysicianController::class,'patient_management']);
Route::any('/patient_management/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.patientmgmt');
});

route::any('/add_patient',[PhysicianController::class,'add_patient']);
Route::any('/add_patient/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.addpatient');
});

route::any('/prescription_management',[PhysicianController::class,'prescription_management']);
Route::any('/prescription_management/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.prescriptionmgmt');
});
route::any('/add_prescription',[PhysicianController::class,'add_prescription']);
Route::any('/add_prescription/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.addprescription');
});

route::any('/Pharmacy_management',[PhysicianController::class,'Pharmacy_management']);
Route::any('/Pharmacy_management/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.Pharmacy_management');
});

route::get('/physician_profile/{id}', [PhysicianController::class, 'profileView'])->name('profile');
Route::any('/physician_profile/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.physician_profile');
});

route::any('/physician_edit_profile/{id}', [PhysicianController::class, 'profileEdit'])->name('edit.profile');
Route::any('/physician_edit_profile/{id}/{lang}', function ($id,$lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('physician.physician_edit_profile');
});

route::any('/gmapapi',[PhysicianController::class, 'gmapapi']);
// route::any('/gmapapi',[PhysicianController::class, 'gmapapi']);
// route::any('/physician_management',[PhysicianController::class,'physician_management']);




/*functionalities for Admin Dashboard*/
  route::any('/admin_login',[AdminController::class, 'login']);
Route::any('/admin_login/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('admin.adminlogin');
});
  route::any('/admindashboard', [AdminController::class, 'admin_physician_mgmt']);
Route::any('/admindashboard/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('admin.physicianmgmt');
});

  route::any('/admin_pharmacist_mgmt',[AdminController::class,'admin_pharmacist_mgmt']);
  Route::any('/admin_pharmacist_mgmt/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
    return view('admin.pharmacistmgmt');
});

  route::any('/admin_physician_mgmt',[AdminController::class,'admin_physician_mgmt']);
Route::any('/admin_physician_mgmt/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
  return view('admin.physicianmgmt');
});

  route::any('/admin_patient_mgmt',[AdminController::class,'admin_patient_mgmt']);
  Route::any('/admin_patient_mgmt/{lang}', function ($lang) {
  App::setLocale($lang);
  Session::put('locale', $lang);
  return view('admin.patientmgmt');
});

// route::any('/forgot_password',[PhysicianController::class, 'forgotpassword']);
// route::any('/forgot_password2',[PhysicianController::class, 'forgotpassword2']);
// route::any('/register',[PhysicianController::class, 'register']);
// route::any('/reset_password/{id}',[PhysicianController::class,'password_reset']);
// route::any('/reset_success',[PhysicianController::class, 'reset_success']);
// route::any('/dashboard',[PhysicianController::class, 'dashboard']);


// route::get('/about', [UserController::class, 'about']);
// route::get('/accordion', [UserController::class, 'accordion']);
// route::get('/alerts', [UserController::class, 'alerts']);
// route::get('/avatarradius', [UserController::class, 'avatarradius']);
// route::get('/avatarround', [UserController::class, 'avatarround']);
// route::get('/avatarsquare', [UserController::class, 'avatarsquare']);
// route::get('/badge', [UserController::class, 'badge']);
// route::get('/blog', [UserController::class, 'blog']);
// route::get('/breadcrumbs', [UserController::class, 'breadcrumbs']);
// route::get('/buttons', [UserController::class, 'buttons']);
// route::get('/calendar', [UserController::class, 'calendar']);
// route::get('/calendar2', [UserController::class, 'calendar2']);
// route::get('/cards', [UserController::class, 'cards']);
// route::get('/carousel', [UserController::class, 'carousel']);
// route::get('/cart', [UserController::class, 'cart']);
// route::get('/chart', [UserController::class, 'chart']);
// route::get('/chartchartist', [UserController::class, 'chartchartist']);
// route::get('/chartdonut', [UserController::class, 'chartdonut']);
// route::get('/chartechart', [UserController::class, 'chartechart']);
// route::get('/chartflot', [UserController::class, 'chartflot']);
// route::get('/chartline', [UserController::class, 'chartline']);
// route::get('/chartmorris', [UserController::class, 'chartmorris']);
// route::get('/chartnvd3', [UserController::class, 'chartnvd3']);
// route::get('/chartpie', [UserController::class, 'chartpie']);
// route::get('/charts', [UserController::class, 'charts']);
// route::get('/chat', [UserController::class, 'chat']);
// route::get('/colors', [UserController::class, 'colors']);
// route::get('/construction', [UserController::class, 'construction']);
// route::get('/counters', [UserController::class, 'counters']);
// route::get('/cryptocurrencies', [UserController::class, 'cryptocurrencies']);
// route::get('/datatable', [UserController::class, 'datatable']);
// route::get('/dropdown', [UserController::class, 'dropdown']);
// route::get('/editprofile', [UserController::class, 'editprofile']);
// route::get('/email', [UserController::class, 'email']);
// route::get('/emailview', [UserController::class, 'emailview']);
// route::get('/emailservices', [UserController::class, 'emailservices']);
// route::get('/empty', [UserController::class, 'empty']);
// route::get('/faq', [UserController::class, 'faq']);
// route::get('/footers', [UserController::class, 'footers']);
// // route::get('/forgotpassword', [UserController::class, 'forgotpassword']);
// route::get('/form', [UserController::class, 'form']);
// route::get('/formelements', [UserController::class, 'formelements']);
// route::get('/formwizard', [UserController::class, 'formwizard']);
// route::get('/gallery', [UserController::class, 'gallery']);
// route::get('/headers', [UserController::class, 'headers']);
// route::get('/icons01', [UserController::class, 'icons01']);
// route::get('/icons02', [UserController::class, 'icons02']);
// route::get('/icons03', [UserController::class, 'icons03']);
// route::get('/icons04', [UserController::class, 'icons04']);
// route::get('/icons05', [UserController::class, 'icons05']);
// route::get('/icons06', [UserController::class, 'icons06']);
// route::get('/icons07', [UserController::class, 'icons07']);
// route::get('/icons08', [UserController::class, 'icons08']);
// route::get('/icons09', [UserController::class, 'icons09']);
// route::get('/icons10', [UserController::class, 'icons10']);
// route::get('/index2', [UserController::class, 'index2']);
// route::get('/index3', [UserController::class, 'index3']);
// route::get('/index4', [UserController::class, 'index4']);
// route::get('/index5', [UserController::class, 'index5']);
// route::get('/invoice', [UserController::class, 'invoice']);
// route::get('/jumbotron', [UserController::class, 'jumbotron']);
// route::get('/list', [UserController::class, 'list']);
// route::get('/loaders', [UserController::class, 'loaders']);
// route::get('/lockscreen', [UserController::class, 'lockscreen']);
// // route::get('/login', [UserController::class, 'login']);
// route::get('/maps', [UserController::class, 'maps']);
// route::get('/mediaobject', [UserController::class, 'mediaobject']);
// route::get('/modal', [UserController::class, 'modal']);
// route::get('/navigation', [UserController::class, 'navigation']);
// route::get('/notify', [UserController::class, 'notify']);
// route::get('/pagination', [UserController::class, 'pagination']);
// route::get('/panels', [UserController::class, 'panels']);
// route::get('/pricing', [UserController::class, 'pricing']);
// route::get('/profile', [UserController::class, 'profile']);
// route::get('/progress', [UserController::class, 'progress']);
// route::get('/rangeslider', [UserController::class, 'rangeslider']);
// route::get('/rating', [UserController::class, 'rating']);
// // route::get('/register', [UserController::class, 'register']);
// route::get('/scroll', [UserController::class, 'scroll']);
// route::get('/search', [UserController::class, 'search']);
// route::get('/services', [UserController::class, 'services']);
// route::get('/shop', [UserController::class, 'shop']);
// route::get('/shopdescription', [UserController::class, 'shopdescription']);
// route::get('/sweetalert', [UserController::class, 'sweetalert']);
// route::get('/tables', [UserController::class, 'tables']);
// route::get('/tabs', [UserController::class, 'tabs']);
// route::get('/tags', [UserController::class, 'tags']);
// route::get('/terms', [UserController::class, 'terms']);
// route::get('/thumbnails', [UserController::class, 'thumbnails']);
// route::get('/timeline', [UserController::class, 'timeline']);
// route::get('/tooltipandpopover', [UserController::class, 'tooltipandpopover']);
// route::get('/typography', [UserController::class, 'typography']);
// route::get('/userslist', [UserController::class, 'userslist']);
// route::get('/widgets', [UserController::class, 'widgets']);
// route::get('/error400', [UserController::class, 'error400']);
// route::get('/error401', [UserController::class, 'error401']);
// route::get('/error403', [UserController::class, 'error403']);
// route::get('/error404', [UserController::class, 'error404']);
// route::get('/error500', [UserController::class, 'error500']);
// route::get('/error503', [UserController::class, 'error503']);
// route::get('/verticalmenu', [UserController::class, 'verticalmenu']);
// route::get('/horizontalmenu', [UserController::class, 'horizontalmenu']);
