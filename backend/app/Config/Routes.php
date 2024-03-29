<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('home');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('/', ['filter' => 'noauth'], function ($routes) {
    $routes->get('', 'Home::home');
    $routes->get('home', 'Home::home');
    $routes->get('price', 'Home::price');
    $routes->get('hired', 'Home::hired');
    $routes->post('hiredLogin', 'Home::hiredLogin');
    $routes->get('talent', 'Home::talent');
    $routes->post('talentLogin', 'Home::talentLogin');
    $routes->get('jobseeker', 'Home::jobseeker');
    $routes->post('jobseekerSave', 'Home::jobseekerSave');
    $routes->get('employer', 'Home::employer');
    $routes->post('employerSave', 'Home::employerSave');
});

$routes->group('/', ['filter' => 'auth'], function ($routes) {
    $routes->group('hired/', static function ($routes) {
        $routes->get('dashboard', 'Hired::dashboard');
        $routes->get('perAssessment', 'Hired::perAssessment');
        $routes->post('perAssessmentSubmit', 'Hired::perAssessmentSubmit');
        $routes->get('myaccount', 'Hired::myaccount');
        $routes->get('companies/(:any)', 'Hired::companies/$1');
        $routes->get('exploreCompanies/(:any)', 'Hired::exploreCompanies/$1');
        $routes->get('updatePerInfo', 'Hired::updatePerInfo');
        $routes->post('updatePerInfoSubmit', 'Hired::updatePerInfoSubmit');
        $routes->get('uploadResume', 'Hired::uploadResume');
        $routes->post('uploadResumeSubmit', 'Hired::uploadResumeSubmit');
        $routes->get('interviewPrep', 'Hired::interviewPrep');
        $routes->post('interviewPrepSubmit', 'Hired::interviewPrepSubmit');
        $routes->get('gptquestion', 'Hired::gptquestion');
        $routes->post('gptquestionSubmit', 'Hired::gptquestionSubmit');
        $routes->get('uploadVideo', 'Hired::uploadVideo');
        $routes->post('uploadVideoSubmit', 'Hired::uploadVideoSubmit');
        $routes->get('evaluationGen', 'Hired::evaluationGen');
        $routes->get('myProfile', 'Hired::myProfile');
        $routes->get('status', 'Hired::status');
        $routes->get('switch/(:any)', 'Hired::switch/$1');
        $routes->get('profile', 'Hired::profile');
        $routes->get('explore', 'Hired::explore');
        $routes->get('exploreDetails/(:any)', 'Hired::exploreDetails/$1');
        $routes->post('uploadVideoAns', 'Hired::uploadVideoAns');
    });
    $routes->group('talent/', static function ($routes) {
        $routes->get('dashboard', 'Talent::dashboard');
        $routes->get('status', 'Talent::status');
        $routes->get('profile', 'Talent::profile');
        $routes->post('companyInfoUpdate', 'Talent::companyInfoUpdate');
        $routes->post('companyPhotosUpdate', 'Talent::companyPhotosUpdate');
        $routes->post('companyVideoUpdate', 'Talent::companyVideoUpdate');
        $routes->post('companyGalleryUpdate', 'Talent::companyGalleryUpdate');
        $routes->get('removeGallery/(:any)', 'Talent::removeGallery/$1');
        $routes->get('cart', 'Talent::cart');
        $routes->get('removeCart/(:any)', 'Talent::removeCart/$1');
        $routes->post('addCart', 'Talent::addCart');
        $routes->post('ProcessPayAmount', 'Talent::ProcessPayAmount');
        $routes->get('vacancies', 'Talent::vacancies');
        $routes->post('vacanciespost', 'Talent::vacanciespost');
        $routes->post('vacanciesvideo', 'Talent::vacanciesvideo');
        $routes->get('explore', 'Talent::explore');
        $routes->get('myaccount', 'Talent::myaccount');
        $routes->get('hired_profile/(:any)', 'Talent::hired_profile/$1');
        $routes->post('bought_update', 'Talent::bought_update');
    });
});

$routes->get('logout', 'Home::logout');

// $routes->match(['get', 'post'], 'register', 'User::register', ['filter' => 'noauth']);
// $routes->match(['get', 'post'], 'login', 'User::login', ['filter' => 'noauth']);
// $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
// $routes->get('profile', 'User::profile', ['filter' => 'auth']);
// $routes->get('index', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
