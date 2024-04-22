<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tb_noticias;
use App\Models\tb_fale_conosco;
use App\Models\users;
use App\Models\cargos;
use App\Models\blog;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    private function getUserInfo(){
        
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $getUserData = users::find($id_user_sse);

        return [
            'user_id' => $getUserData->id,
            'user_name' => $getUserData->name,
            'user_email' => $getUserData->email,
            'user_cargo' => $getUserData->cargo,
            'user_matricula' => $getUserData->matricula,
            'user_nivel' => $getUserData->nivel,
        ];
    }
    
    public function index() {
        
        $getUserData = $this->getUserInfo();
        
        $countNews = DB::table('tb_noticias')->count();
        $countUsers = DB::table('users')->count();
        $countContato = DB::table('tb_fale_conosco')->count();
        
        $user_id = session()->get('nome');
        
        return view('admin.index', compact(["countNews", "countUsers", "countContato", "getUserData"]));
    }
    
    public function formCargos(){
        
        $getUserData = $this->getUserInfo();
        
       return view('admin.pages.form-cargos', compact(["getUserData"])); 
    }
    
    public function listCargos(){
        
        $getUserData = $this->getUserInfo();
        
        $slc_cargos = cargos::orderBy('id', 'asc')->get();
        
       return view('admin.pages.listagem-de-cargos', compact(["getUserData", "slc_cargos"])); 
    }
    
    public function cargosEdit($id){
        
        $getUserData = $this->getUserInfo();
        
        $slc_cargos = cargos::findOrFail($id);
        
       return view('admin.pages.list-cargos-edit', compact(["getUserData", "slc_cargos"])); 
        
    }
    
    public function updateCargos(request $request){
        
        $ano_atual = date('Y');
        
        $update_nome = $request->nome;
        $update_cargo = $request->cargo;
        $update_email = $request->email;
        $update_descricao = $request->descricao;
        
        cargos::findOrFail($request->id)->update(['nome' => $update_nome, 'cargo' => $update_cargo, 'email' => $update_email, 'descricao' => $update_descricao]);
        return redirect()->route('listCargos');
    }
    
    public function formNoticias() {
        
        $getUserData = $this->getUserInfo();
        
        return view('admin.pages.form-noticias', compact(["getUserData"]));
    }
    
    public function formBlog() {
        
        $getUserData = $this->getUserInfo();
        
        return view('admin.pages.form-blog', compact(["getUserData"]));
    }
    
    public function formNoticiasGaleria() {
        
        $tb_noticias = tb_noticias::all();
        
        return view('admin.pages.form-noticias-galeria', ["tb_noticias" => $tb_noticias]);
    }
    
    public function listNoticias() {
        
        $getUserData = $this->getUserInfo();
        
        $tb_noticias = tb_noticias::all();
        
        return view('admin.pages.list-noticias', compact(["tb_noticias", "getUserData"]));
    }
    
    public function insertNoticia(request $request){
        $raffledb = new tb_noticias;

        $raffledb->titulo = $request->titulo;
        $raffledb->descricao = $request->descricao;
        $raffledb->texto = $request->texto;
        $raffledb->datta = $request->datta;

        if($request->hasfile('fotos') && $request->file('fotos'))
        {
            $requestImage = $request->fotos;
            $extension = $requestImage->getClientOriginalExtension();
            $ImageName = time().'.'.$extension;
            $requestImage->move(public_path('img/noticias'), $ImageName);
            $raffledb->fotos = $ImageName;
        }

        $raffledb->save();
        return redirect('/form-noticias');
    }
    
    public function insertBlog(request $request){
        
        $session_user = auth()->user();
        $user_id = $session_user->id;
        
        $raffledb = new blog;

        $raffledb->titulo = $request->titulo;
        $raffledb->descricao = $request->descricao;
        $raffledb->texto = $request->texto;
        $raffledb->usuario = $request->usuario;
        $raffledb->categoria = $request->categoria;
        $raffledb->tag = $request->tag;
        $raffledb->status = $request->status;
        $raffledb->autor = $request->autor;
        $raffledb->datta = $request->datta;
        $raffledb->usuario = $user_id;

        $arquivo = $request->file('imagem');
        
       if(isset($arquivo) || !empty($arquivo)){
            
            $nomeArquivo = pathinfo($arquivo->getClientOriginalName(), PATHINFO_FILENAME);
            $extensao = $arquivo->getClientOriginalExtension();
            $nomeArquivoArmazenado = time().'.'.$extensao;
            $arquivo->storeAs('public/conectse/blog', $nomeArquivoArmazenado);
            $raffledb->imagem = $nomeArquivoArmazenado;
            
        } else {
            return response()->json(['error' => 'O arquivo enviado não é válido.']);
        } 
        
//        if($request->hasfile('imagem') && $request->file('imagem'))
//        {
//            $requestImage = $request->imagem;
//            $extension = $requestImage->getClientOriginalExtension();
//            $ImageName = time().'.'.$extension;
//            $requestImage->move(public_path('img/conectse/blog'), $ImageName);
//            $raffledb->imagem = $ImageName;
//        }

        $raffledb->save();
        return redirect('/form-blog?sucessoBlog');
    }
    
    public function insertCargo(request $request){
        $post_cargo = new cargos;

        $post_cargo->nome = $request->nome;
        $post_cargo->cargo = $request->cargo;
        $post_cargo->email = $request->email;
        $post_cargo->descricao = $request->descricao;

        $post_cargo->save();
        
        return redirect()->route('formCargos');
    }
    
    public function insertNoticiaGaleria(request $request){
        /*$raffledb = new tb_noticias;
        
        if($request->hasfile('galeria01') && $request->file('galeria01'))
        {
            $requestImage = $request->galeria01;
            $extension = $requestImage->getClientOriginalExtension();
            $ImageName = time().'.'.$extension;
            $requestImage->move(public_path('img/noticias-galeria'), $ImageName);
            tb_noticias::findOrFail($raffledb->id)->update($raffledb->galeria01 = $ImageName);
        }

        return redirect('/form-noticias-galeria');*/
    }
    
    public function noticiasdestroy($id){
        
        tb_noticias::findOrFail($id)->delete();
        return redirect('/list-noticias');
    }
    
    public function cargosDestroy($id){
        
        cargos::findOrFail($id)->delete();
        return redirect('/listagem-de-cargos');
    }
    
    public function noticias_edit($id){
        $tb_noticias = tb_noticias::findOrFail($id);
        
        return view('admin.pages.edit-noticias', ["tb_noticias" => $tb_noticias]);
    }
    
    public function noticias_updated(Request $request){
        
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('img/noticias');
            return $path;
        }
        
        tb_noticias::findOrFail($request->id)->update(['titulo' => $request->titulo, 'descricao' => $request->descricao, 'texto' => $request->texto, 'fotos' => $path, 'datta' => $request->datta]);
        return redirect('/list-noticias')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
    }
    
    public function caixadeentrada() {
        $tb_fale_conosco = tb_fale_conosco::all();
        
        return view('admin.pages.caixa-de-entrada', ["tb_fale_conosco" => $tb_fale_conosco]);
    }
    
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
}
