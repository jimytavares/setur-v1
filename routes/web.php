<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProfileController::class, 'index']);
Route::get('/institucional',[ProfileController::class, 'institucional']);
Route::get('/gestao',[ProfileController::class, 'gestao']);
Route::get('/setoresedepartamentos',[ProfileController::class, 'setoresedepartamentos']);
Route::get('/conetur',[ProfileController::class, 'conetur']);
Route::get('/turismonorn',[ProfileController::class, 'turismonorn']);
Route::get('/capacitacoes',[ProfileController::class, 'capacitacoes']);
Route::get('/inspire-se',[ProfileController::class, 'inspirese']);
Route::get('/turismocidadao',[ProfileController::class, 'turismocidadao']);
Route::get('/planoseprojetos',[ProfileController::class, 'planoseprojetos']);
Route::get('/erropesquisar',[ProfileController::class, 'erropesquisar']);
Route::get('/noticias',[ProfileController::class, 'noticias']);
Route::get('/noticia/{id}',[ProfileController::class, 'noticia']);
Route::get('/noticia-search',[ProfileController::class, 'noticiaSearch']);

Route::get('/faleconosco',[ProfileController::class, 'faleconosco']);
Route::post('/insertFaleConosco',[ProfileController::class, 'insertFaleConosco']);
Route::get('/buscarsite',[ProfileController::class, 'buscarsite']);

/* polos */
Route::get('/poloagrestetrairi2',[ProfileController::class, 'poloagrestetrairi2']);
Route::get('/polocabugicentral',[ProfileController::class, 'polocabugicentral']);
Route::get('/polocostabranca',[ProfileController::class, 'polocostabranca']);
Route::get('/polocostadasdunas',[ProfileController::class, 'polocostadasdunas']);
Route::get('/polosertaoparaomar',[ProfileController::class, 'polosertaoparaomar']);
Route::get('/polopotengi',[ProfileController::class, 'polopotengi']);
Route::get('/polorotadofrio',[ProfileController::class, 'polorotadofrio']);
Route::get('/poloserido',[ProfileController::class, 'poloserido']);
Route::get('/poloserrano',[ProfileController::class, 'poloserrano']);
Route::get('/poloserradoagrestepotiguar',[ProfileController::class, 'poloserradoagrestepotiguar']);
Route::get('/polovalemar',[ProfileController::class, 'polovalemar']);

/* Atas */
Route::get('/atas-conetur',[ProfileController::class, 'atasConetur'])->name('atasConetur');
Route::get('/atas-regioes',[ProfileController::class, 'atasRegioes'])->name('atasRegioes');

Route::get('/poloagrestetrairiAta',[ProfileController::class, 'poloagrestetrairiAta']);
Route::get('/cabugicentralAta',[ProfileController::class, 'cabugicentralAta']);
Route::get('/costabrancaAta',[ProfileController::class, 'costabrancaAta']);
Route::get('/costadasdunasAta',[ProfileController::class, 'costadasdunasAta']);
Route::get('/dosertaoparaomarAta',[ProfileController::class, 'dosertaoparaomarAta']);
Route::get('/potengiAta',[ProfileController::class, 'potengiAta']);
Route::get('/rotadofrioAta',[ProfileController::class, 'rotadofrioAta']);
Route::get('/seridoAta',[ProfileController::class, 'seridoAta']);
Route::get('/serranoAta',[ProfileController::class, 'serranoAta']);
Route::get('/serradoagrestepotiguarAta',[ProfileController::class, 'serradoagrestepotiguarAta']);
Route::get('/valemarAta',[ProfileController::class, 'valemarAta']);

/* Blog */
Route::get('/conecte-se',[ProfileController::class, 'conectese'])->name('conectese');
Route::get('/like/{id}',[ProfileController::class, 'like'])->name('like');

/* Blog */
Route::get('/transparencia',[ProfileController::class, 'transparencia'])->name('transparencia');

/*
Route::get('/dashboard', function () { return view('admin.index'); })->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/index', [AdminController::class, 'index'])->name('index');
    
    Route::get('/form-noticias',[AdminController::class, 'formNoticias'])->name('formNoticias');
    Route::get('/form-blog',[AdminController::class, 'formBlog'])->name('formBlog');
    Route::get('/list-noticias',[AdminController::class, 'listNoticias'])->name('listNoticias');
    Route::get('/formulario-de-cargos',[AdminController::class, 'formCargos'])->name('formCargos');
    Route::get('/listagem-de-cargos',[AdminController::class, 'listCargos'])->name('listCargos');
    Route::get('/caixa-de-entrada',[AdminController::class, 'caixadeentrada']);
    Route::get('/list-noticias/edit/{id}', [AdminController::class, 'noticias_edit']);
    Route::get('/form-noticias-galeria',[AdminController::class, 'formNoticiasGaleria']);
    Route::get('/list-cargos-edit/edit/{id}', [AdminController::class, 'cargosEdit'])->name('cargosEdit');

    Route::post('/insertNoticia',[AdminController::class, 'insertNoticia']);
    Route::post('/insertBlog',[AdminController::class, 'insertBlog'])->name('insertBlog');
    Route::post('/insertCargo',[AdminController::class, 'insertCargo'])->name('insertCargo');
    
    Route::put('/form-noticias-galeria/update/{id}',[AdminController::class, 'insertNoticiaGaleria']);
    Route::put('/list-noticias/update/{id}', [AdminController::class, 'noticias_updated']);
    Route::put('/list-cargos/update/{id}', [AdminController::class, 'updateCargos'])->name('updateCargos');
    
    Route::delete('/noticiasdestroy/{id}', [AdminController::class, 'noticiasdestroy']);
    Route::delete('/noticiasdestroyedit/{id}', [AdminController::class, 'noticiasdestroyedit']);
    Route::delete('/cargosDestroy/{id}', [AdminController::class, 'cargosDestroy']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
