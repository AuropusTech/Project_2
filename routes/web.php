<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\info;

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

Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/stafff', function () {
        return view('staff');
    });

    Route::get('/law', function () {
        return view('law');
    });

    Route::get('/info', function () {
        return view('info');
    });

    Route::get('/buynhire', function () {
        return view('buynhire');
    });

    Route::get('/download', function () {
        return view('download');
    });

    Route::get('/qna', function () {
        return view('qna');
    });


    Auth::routes();

    /*** D E F A U L T ****/
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirPage']);



    /*** U S E R - Staff Data ****/ 
    Route::get('/staff',  [App\Http\Controllers\HomeController::class, 'user'])->name('staff');
    Route::get('/staff-profile',  [App\Http\Controllers\StaffController::class, 'staffProfile'])->name('staff-profile');
    Route::get('/staff-profile-edit',  [App\Http\Controllers\StaffController::class, 'staffProfileEdit'])->name('staff-profile-edit');

    /*** A D M I N - Admin Data ****/
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('role');
    Route::get('/admin-profile',  [App\Http\Controllers\AdminController::class, 'adminProfile'])->name('admin-profile');
    Route::get('/admin-profile-edit',  [App\Http\Controllers\AdminController::class, 'adminProfileEdit'])->name('admin-profile-edit');


    Route::get('admin-information',  [App\Http\Controllers\InfoController::class, 'mainInfoPage'])->name('admin-information');
    Route::get('infoCreate',  [App\Http\Controllers\InfoController::class, 'infoCreatePage'])->name('infoCreate');
    Route::Post('infoCreatePost',  [App\Http\Controllers\InfoController::class, 'infoCreatePost'])->name('infoCreatePost'); 

    Route::get('infoDisplay',  [App\Http\Controllers\InfoController::class, 'infoDisplayPage'])->name('infoDisplay');
    Route::get('infoEdit',  [App\Http\Controllers\InfoController::class, 'infoEditPage'])->name('infoEdit'); 
    Route::get('infoDelete/{id}',  [App\Http\Controllers\InfoController::class, 'infoDelete'])->name('infoDelete');
    Route::get('infoEditDataPageID/{id}',  [App\Http\Controllers\InfoController::class, 'infoEditDataPageID'])->name('infoEditDataPageID');
    Route::post('infoUpdate/{id}',  [App\Http\Controllers\InfoController::class, 'infoUpdate'])->name('infoUpdate');




    //************************************************* Form Management Admin *************************************************//

    Route::get('form-list',  [App\Http\Controllers\FormController::class, 'formList'])->name('form-list'); 
    Route::get('form-check',  [App\Http\Controllers\FormController::class, 'formCheck'])->name('form-check'); 

    Route::get('form-updateStatusBuy/{id}',  [App\Http\Controllers\FormController::class, 'formUpdateStatusBuy'])->name('form-updateStatusBuy'); 
    Route::post('form-updatedStatusBuy/{id}',  [App\Http\Controllers\FormController::class, 'formUpdatedStatusBuy'])->name('updatedStatusBuy'); 

    Route::get('form-updateStatusHire/{id}',  [App\Http\Controllers\FormController::class, 'formUpdateStatusHire'])->name('form-updateStatusHire'); 
    Route::post('form-updatedStatusHire/{id}',  [App\Http\Controllers\FormController::class, 'formUpdatedStatusHire'])->name('updatedStatusHire'); 


    //************************************************* ADMIN User Management Bar Page *************************************************//

    Route::get('/admin-all-profile',  [App\Http\Controllers\AdminController::class, 'showAdminAllProfile'])->name('admin-all-profile');
    Route::get('deleteAdminAllProfile/{id}',  [App\Http\Controllers\AdminController::class, 'deleteAdminAllProfile'])->name('deleteAdminAllProfile');//id
    Route::get('/admin-all-profile-edit',  [App\Http\Controllers\AdminController::class, 'editAdminAllProfile'])->name('admin-all-profile-edit');
    Route::get('editAdminAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'editAdminAllProfileID'])->name('editAdminAllProfileID');//id
    Route::post('updateAdminAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'updateAdminAllProfileID'])->name('updateAdminAllProfileID');//id
    Route::get('/admin-add-new',  [App\Http\Controllers\AdminController::class, 'insertAdminAllProfile'])->name('admin-add-new');
    Route::post('createAdminAllProfile',  [App\Http\Controllers\AdminController::class, 'createAdminAllProfile'])->name('createAdminAllProfile');//new



    Route::get('/staff-all-profile',  [App\Http\Controllers\AdminController::class, 'showStaffAllProfile'])->name('staff-all-profile');
    Route::get('deleteStaffAllProfile/{id}',  [App\Http\Controllers\AdminController::class, 'deleteStaffAllProfile'])->name('deleteStaffAllProfile');//id

    Route::get('/staff-all-profile-edit',  [App\Http\Controllers\AdminController::class, 'editStaffAllProfile'])->name('staff-all-profile-edit');
    Route::get('editStaffAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'editStaffAllProfileID'])->name('editStaffAllProfileID');

    Route::post('updateStaffAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'updateStaffAllProfileID'])->name('updateStaffAllProfileID');//id
    Route::get('/staff-add-new',  [App\Http\Controllers\AdminController::class, 'insertStaffAllProfile'])->name('staff-add-new');
    Route::post('createStaffAllProfile',  [App\Http\Controllers\AdminController::class, 'createStaffAllProfile'])->name('createStaffAllProfile');//new



    

    Route::get('/executive-all-profile',  [App\Http\Controllers\AdminController::class, 'showExecutiveAllProfile'])->name('executive-all-profile');

    Route::get('/executive-all-profile-edit',  [App\Http\Controllers\AdminController::class, 'editExecutiveAllProfile'])->name('executive-all-profile-edit');
    Route::get('editExecutiveAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'editExecutiveAllProfileID'])->name('editExecutiveAllProfileID');
    Route::post('updateExecutiveAllProfileID/{id}',  [App\Http\Controllers\AdminController::class, 'updateExecutiveAllProfileID'])->name('updateExecutiveAllProfileID');//id

    Route::get('/executive-add-new',  [App\Http\Controllers\AdminController::class, 'insertExecutiveAllProfile'])->name('executive-add-new');
    Route::post('createExecutiveAllProfile',  [App\Http\Controllers\AdminController::class, 'createExecutiveAllProfile'])->name('createExecutiveAllProfile');//new




    //************************************************* ADMIN Data Management Bar Page *************************************************//

    Route::get('/factData',  [App\Http\Controllers\DataController::class, 'factDataPage'])->name('factData');
    Route::get('factDataInsert',  [App\Http\Controllers\DataController::class, 'factDataInsert'])->name('factDataInsert');
    Route::post('factDataCreate', [App\Http\Controllers\DataController::class, 'factDataCreate'])->name('factDataCreate');//
    Route::get('factDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'factDataDelete'])->name('factDataDelete');//
    Route::get('factDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'factDataEdit'])->name('factDataEdit');
    Route::post('factDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'factDataUpdate'])->name('factDataUpdate');//

    Route::get('/deptData',  [App\Http\Controllers\DataController::class, 'deptDataPage'])->name('deptData');
    Route::get('deptDataInsert',  [App\Http\Controllers\DataController::class, 'deptDataInsert'])->name('deptDataInsert');
    Route::post('deptDataCreate', [App\Http\Controllers\DataController::class, 'deptDataCreate'])->name('deptDataCreate');//
    Route::get('deptDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'deptDataDelete'])->name('deptDataDelete');//
    Route::get('deptDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'deptDataEdit'])->name('deptDataEdit'); //--id
    Route::post('deptDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'deptDataUpdate'])->name('deptDataUpdate');//

    Route::get('/budgetData',  [App\Http\Controllers\DataController::class, 'budgetDataPage'])->name('budgetData');
    Route::get('budgetDataInsert',  [App\Http\Controllers\DataController::class, 'budgetDataInsert'])->name('budgetDataInsert');
    Route::get('budgetDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'budgetDataEdit'])->name('budgetDataEdit'); //--id
    Route::post('budgetDataCreate', [App\Http\Controllers\DataController::class, 'budgetDataCreate'])->name('budgetDataCreate');//
    Route::get('budgetDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'budgetDataDelete'])->name('budgetDataDelete');//
    Route::post('budgetDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'budgetDataUpdate'])->name('budgetDataUpdate');//


    Route::get('/planBudgetData',  [App\Http\Controllers\DataController::class, 'planBudgetDataPage'])->name('planBudgetData');
    Route::get('planBudgetDataInsert',  [App\Http\Controllers\DataController::class, 'planBudgetDataInsert'])->name('planBudgetDataInsert');
    Route::get('planBudgetDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'planBudgetDataEdit'])->name('planBudgetDataEdit');
    Route::post('planBudgetDataCreate', [App\Http\Controllers\DataController::class, 'planBudgetDataCreate'])->name('planBudgetDataCreate');
    Route::get('planBudgetDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'planBudgetDataDelete'])->name('planBudgetDataDelete');
    Route::post('planBudgetDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'planBudgetDataUpdate'])->name('planBudgetDataUpdate');


    Route::get('/planData',  [App\Http\Controllers\DataController::class, 'planDataPage'])->name('planData');
    Route::get('planDataInsert',  [App\Http\Controllers\DataController::class, 'planDataInsert'])->name('planDataInsert');
    Route::get('planDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'planDataEdit'])->name('planDataEdit');
    Route::post('planDataCreate', [App\Http\Controllers\DataController::class, 'planDataCreate'])->name('planDataCreate');
    Route::get('planDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'planDataDelete'])->name('planDataDelete');
    Route::post('planDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'planDataUpdate'])->name('planDataUpdate');



    Route::get('/subPlanData',  [App\Http\Controllers\DataController::class, 'subPlanDataPage'])->name('subPlanData');
    Route::get('subPlanDataInsert',  [App\Http\Controllers\DataController::class, 'subPlanDataInsert'])->name('subPlanDataInsert');
    Route::get('subPlanDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'subPlanDataEdit'])->name('subPlanDataEdit');
    Route::post('subPlanDataCreate', [App\Http\Controllers\DataController::class, 'subPlanDataCreate'])->name('subPlanDataCreate');
    Route::get('subPlanDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'subPlanDataDelete'])->name('subPlanDataDelete');
    Route::post('subPlanDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'subPlanDataUpdate'])->name('subPlanDataUpdate');


    
    Route::get('/projectData',  [App\Http\Controllers\DataController::class, 'projectDataPage'])->name('projectData');
    Route::get('projectDataInsert',  [App\Http\Controllers\DataController::class, 'projectDataInsert'])->name('projectDataInsert');
    Route::get('projectDataEdit/{id}',  [App\Http\Controllers\DataController::class, 'projectDataEdit'])->name('projectDataEdit');
    Route::post('projectDataCreate', [App\Http\Controllers\DataController::class, 'projectDataCreate'])->name('projectDataCreate');
    Route::get('projectDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'projectDataDelete'])->name('projectDataDelete');
    Route::post('projectDataUpdate/{id}',  [App\Http\Controllers\DataController::class, 'projectDataUpdate'])->name('projectDataUpdate');


    Route::get('/statusData',  [App\Http\Controllers\DataController::class, 'statusDataPage'])->name('statusData');
    Route::get('statusDataInsert',  [App\Http\Controllers\DataController::class, 'statusDataInsert'])->name('statusDataInsert');
    Route::post('statusDataCreate', [App\Http\Controllers\DataController::class, 'statusDataCreate'])->name('statusDataCreate');
    Route::get('statusDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'statusDataDelete'])->name('statusDataDelete');

    Route::get('/positionData',  [App\Http\Controllers\DataController::class, 'positionDataPage'])->name('positionData');
    Route::get('positionDataInsert',  [App\Http\Controllers\DataController::class, 'positionDataInsert'])->name('positionDataInsert');
    Route::post('positionDataCreate', [App\Http\Controllers\DataController::class, 'positionDataCreate'])->name('positionDataCreate');
    Route::get('positionDataDelete/{id}',  [App\Http\Controllers\DataController::class, 'positionDataDelete'])->name('positionDataDelete');





    //************************************************* Auth Edit Data *************************************************//
    Route::post('authAdminUpdate',  [App\Http\Controllers\AdminController::class, 'authAdminUpdate'])->name('authAdminUpdate');
    Route::post('authStaffUpdate',  [App\Http\Controllers\AdminController::class, 'authStaffUpdate'])->name('authStaffUpdate');






    //************************************************* Form Management Staff *************************************************//

    Route::get('form_buy_requests',  [App\Http\Controllers\FormController::class, 'formBuyRequests'])->name('form_buy_requests'); 
    Route::post('buyFormCreate',  [App\Http\Controllers\FormController::class, 'buyFormCreate'])->name('buyFormCreate'); 
    



    Route::get('form_hire_requests',  [App\Http\Controllers\FormController::class, 'formHireRequests'])->name('form_hire_requests');
    Route::post('hireFormCreate',  [App\Http\Controllers\FormController::class, 'hireFormCreate'])->name('hireFormCreate'); 
    

    

    Route::get('staff-form-list',  [App\Http\Controllers\FormController::class, 'staffFormList'])->name('staff-form-list'); 
    Route::get('staff-form-check',  [App\Http\Controllers\FormController::class, 'staffFormCheck'])->name('staff-form-check'); 


    //************************************************* Form Pdf *************************************************//
    
    
    Route::get('buyPdfExport/{id}',  [App\Http\Controllers\PDFController::class, 'buyPdfExport'])->name('buyPdfExport'); /*** Get Buy PDF Page ****/
    Route::get('hirePdfExport/{id}',  [App\Http\Controllers\PDFController::class, 'hirePdfExport'])->name('hirePdfExport'); /*** Get Hire PDF Page ****/









    
    







});










