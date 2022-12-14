<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailController;
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
//----------------------------------Welcome-----------------------------
Route::get('/', function () {
    return view('welcome');
});
//----------------------------------Admin--------------------------------
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/tambah', [AdminController::class, 'tambah']);
Route::post('/admin/simpan', [AdminController::class, 'simpan']);
Route::get('/admin/hapus/{id}', [AdminController::class, 'hapus']);
Route::get('/admin/ubah/{id}', [AdminController::class, 'ubah']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
//----------------------------------Barang--------------------------------
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'tambah']);
Route::post('/barang/simpan', [BarangController::class, 'simpan']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus']);
Route::get('/barang/ubah/{id}', [BarangController::class, 'ubah']);
Route::post('/barang/update/{id}', [BarangController::class, 'update']);
//----------------------------------Jenis----------------------------------
Route::get('/jenis', [JenisController::class, 'index']);
Route::get('/jenis/tambah', [JenisController::class, 'tambah']);
Route::post('/jenis/simpan', [JenisController::class, 'simpan']);
Route::get('/jenis/hapus/{id}', [JenisController::class, 'hapus']);
Route::get('/jenis/ubah/{id}', [JenisController::class, 'ubah']);
Route::post('/jenis/update/{id}', [JenisController::class, 'update']);
//----------------------------------Supplier--------------------------------
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/tambah', [SupplierController::class, 'tambah']);
Route::post('/supplier/simpan', [SupplierController::class, 'simpan']);
Route::get('/supplier/hapus/{id}', [SupplierController::class, 'hapus']);
Route::get('/supplier/ubah/{id}', [SupplierController::class, 'ubah']);
Route::post('/supplier/update/{id}', [SupplierController::class, 'update']);
//----------------------------------Transaksi---------------------------------
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/tambah', [TransaksiController::class, 'tambah']);
Route::post('/transaksi/simpan', [TransaksiController::class, 'simpan']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'hapus']);
Route::get('/transaksi/ubah/{id}', [TransaksiController::class, 'ubah']);
Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksi', [TransaksiController::class, 'index']);

Route::get('/detail/detail/{id}', [DetailController::class, 'index']);
//----------------------------------End---------------------------------------