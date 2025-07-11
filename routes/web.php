<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCOntroller;
use App\Http\Controllers\PlantNest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PlantNest::class, 'index']);
Route::get('/flowering', [PlantNest::class, 'flowering']);
Route::get('/non_flowering', [PlantNest::class, 'non_flowering']);
Route::get('/outdoor', [PlantNest::class, 'outdoor']);
Route::get('/indoor', [PlantNest::class, 'indoor']);
Route::get('/succulents', [PlantNest::class, 'succulents']);
Route::get('/medicinal', [PlantNest::class, 'medicinal']);
Route::get('/gallery', [PlantNest::class, 'gallery']);
Route::get('/login', [PlantNest::class, 'login']);
Route::get('/register', [PlantNest::class, 'register']);
Route::get('/fetcgcategory', [PlantNest::class, 'viewcategory']);
Route::get('/accdelcate', [PlantNest::class, 'viewacccategory']);
Route::get('/owlcarousel', [PlantNest::class, 'carousel']);
Route::get('/deletecategory/{cateid}', [PlantNest::class, 'deleteCategory']);
Route::get('/productdelete/{productid}', [PlantNest::class, 'deleteProduct']);
Route::get('/accessdelete/{accid}', [PlantNest::class, 'deleteAccessory']);
Route::get('/deleteacc/{accid}', [PlantNest::class, 'deleteAcc']);



Route::get('/productupdate/{proid}',[PlantNest::class,('editdataProduct')]);
Route::post('/product/{proid}', [PlantNest::class,('edit')]);
Route::get('/accessupdate/{accid}',[PlantNest::class,('editdataAccessory')]);
Route::post('/accessory/{accid}', [PlantNest::class,('editAccess')]);
Route::get('/deleteuser/{userid}', [PlantNest::class, 'deleteuser']);





// All Admin Panel Pages Routing



Route::get('/categoryinsert', function () {
    return view('categoryinsert');
});
Route::get('/adminpanel', function () {
    return view('adminlogin');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/Searchitems', function () {
    return view('Searchitems');
});


// Route::get('/adminlayout', function () {
//     return view('layouts.adminlayout');
// });

Route::get('/addaccessoriescat', function () {
    return view('accessoriescategory');
});




Route::get('/addaccess',[PlantNest::class,('viewsub')]);


Route::post('/acc',[PlantNest::class,('insertsignup')]);
Route::post('/login',[PlantNest::class,('loginUser')]);
Route::post('/categoryinsert',[PlantNest::class,('addcategory')]);
Route::post('/insertedsub',[PlantNest::class,('addcategoryaccessories')]);
Route::get('/addproduct',[PlantNest::class,('productview_')]);
Route::get('/Searchpdt', [PlantNest::class, 'searchget'])->name('Searchpdt');
Route::Get("/Cart/{id}",[PlantNest::class,"addtocart"]);

Route::post('/inserted',[PlantNest::class,('insertproduct')]);
Route::get('/allproducts',[PlantNest::class,('productfetch_')]);
Route::get('/allaccessories',[PlantNest::class,('accessoriesfetch_')]);

Route::post('/loginAdmin',[PlantNest::class,('loginAdmin')]);
Route::get('/usersregistered',[PlantNest::class,('usersregistered')]);

Route::post('/insertedAccessories',[PlantNest::class,('insertAccessories')]);
Route::get('/accessoriespage',[PlantNest::class,('accessories')]);

