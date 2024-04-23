<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\tb_noticias;
use App\Models\tb_fale_conosco;
use App\Models\users;
use App\Models\cargos;
use App\Models\blog;
use App\Models\blog_publi;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
    public function index() {
        
        $tb_noticias = tb_noticias::all();
        $nome = "jimy";
        
        return view('welcome', ["tb_noticias" => $tb_noticias, "nome" => $nome]);
    }

    public function institucional() {
        $namepage = "Institucional";
        
        return view('pages.institucional', ["namepage" => $namepage]);
    }
    
    public function transparencia() {
        $namepage = "Transparência";
        
        return view('pages.transparencia', ["namepage" => $namepage]);
    }
    
    public function conectese() {
        $namepage = "conectse";
        
        $slc_igrtrairi = blog::where('usuario', 6)->orderBy('id', 'desc')->get();
        
        $slc_igrvalemar = blog::where('usuario', 4)->orderBy('created_at', 'desc')->get();
        $slc_igrrotadofrio = blog::where('usuario', 8)->orderBy('created_at', 'desc')->get();
        $slc_igrcostabranca = blog::where('usuario', 9)->orderBy('created_at', 'desc')->get();
        $slc_igrcostadasdunas = blog::where('usuario', 10)->orderBy('created_at', 'desc')->get();
        $slc_igrserradoagreste = blog::where('usuario', 11)->orderBy('created_at', 'desc')->get();
        $slc_poloserido = blog::where('usuario', 12)->orderBy('created_at', 'desc')->get();
        $slc_poloturisticodooestepotiguar = blog::where('usuario', 13)->orderBy('created_at', 'desc')->get();
        $slc_regiaodosertaoparaomar = blog::where('usuario', 14)->orderBy('created_at', 'desc')->get();
        $slc_associacaoturisticacabugi = blog::where('usuario', 15)->orderBy('created_at', 'desc')->get();
        $slc_associacaoturisticacaminhosdopotengi = blog::where('usuario', 16)->orderBy('created_at', 'desc')->get();
        $slc_publi = blog_publi::orderBy('created_at', 'desc')->get();
        
        return view('pages.conectese', compact(['namepage', 'slc_publi', 'slc_igrtrairi', 'slc_igrvalemar', 'slc_igrrotadofrio',  'slc_igrcostabranca',  'slc_igrcostadasdunas',  'slc_igrserradoagreste',  'slc_poloserido',  'slc_poloturisticodooestepotiguar',  'slc_regiaodosertaoparaomar',  'slc_associacaoturisticacabugi',  'slc_associacaoturisticacaminhosdopotengi']));
    }
    
    public function like(Request $request, $id){
                               
        blog::findOrFail($request->id)->increment('curtidas', 1);

        return redirect()->route('conectse', ['sucesso']);
    }
    
    public function noticias() {
        
        $noticiasPaginados = tb_noticias::orderBy('created_at', 'desc')->paginate(10);
        
        return view('pages.noticias', ['noticias' => $noticiasPaginados]);
    }
    
    public function noticia($id) {
        $tb_noticias = tb_noticias::findOrFail($id);
        $tb_newright = tb_noticias::all();
        
        return view('pages.noticia', ["id" => $id, "tb_noticias" => $tb_noticias, "tb_newright" => $tb_newright]);
    }
    
    public function noticiaSearch() {

        $search_noticia = request('search_noticia');
        
        if($search_noticia){
            $noticias = tb_noticias::where('texto', 'like', '%'.$search_noticia.'%')->get();
        }else{
            $noticias = tb_noticias::all();
        }
        
        return view('pages.noticia-search', ["search_noticia" => $search_noticia, "noticias" => $noticias]);
    }
    
    public function gestao() {
        return view('pages.gestao');
    }
    
    public function setoresedepartamentos() {
        
        $slc_cargos = cargos::orderBy('id', 'asc')->get();
        
        return view('pages.setoresedepartamentos', compact(["slc_cargos"]));
    }
    
    public function faleconosco() {
        return view('pages.faleconosco');
    }
    
    public function insertFaleConosco(request $request){
        $raffledb = new tb_fale_conosco;

        $raffledb->nome = $request->nome;
        $raffledb->email = $request->email;
        $raffledb->telefone = $request->telefone;
        $raffledb->datta = $request->datta;
        $raffledb->texto = $request->texto;

        $raffledb->save();
        return redirect('/faleconosco');
    }
    
    public function buscarsite(request $request){
        $buscar = $request->buscar;

        switch($buscar)
        {
            case 'turismo cidadao':
            case 'Turismo Cidadão':
            case 'Turismo Cidadao':
            case 'TurismoCidadão':
            case 'TurismoCidadao':
            case 'turismocidadão':
                return redirect('/turismocidadao');
            break;  
                
            case 'institucional':
            case 'Institucional':
                return redirect('/institucional');
            break; 
                
            case 'A Gestão':
            case 'A Gestao':
            case 'Gestao':
            case 'Gestão':
                return redirect('/gestao');
            break; 
                
            case 'fale conosco':
            case 'Fale Conosco':
            case 'FaleConosco':
            case 'faleconosco':
                return redirect('/faleconosco');
            break; 
                
            case 'conetur':
            case 'Conetur':
                return redirect('/institucional');
            break; 
                
            case 'Planos e Projetos':
            case 'planos e projetos':
            case 'PlanoseProjetos':
            case 'planoseprojetos':
                return redirect('/planoseprojetos');
            break; 
                
            case 'Boletim de inteligencia':
            case 'boletim de inteligencia':
            case 'Boletim de inteligência':
            case 'boletim de inteligência':
                return redirect('https://emprotur.setur.rn.gov.br/.pages/dados-pesquisa.php');
            break;
                
            case 'noticias':
            case 'Noticias':
            case 'notícias':
            case 'Notícias':
                return redirect('/noticias');
            break;
                
            default:
                return redirect('/erropesquisar');
            break;
        }
    }
    
    public function conetur() {
        return view('pages.conetur');
    }
    
    public function erropesquisar(){
        
        return view('pages.erropesquisar');
    }
    
    public function turismonorn() {
        return view('pages.turismonorn');
    }
    
    public function capacitacoes() {
        return view('pages.capacitacoes');
    }
    
    public function inspirese() {
        return view('pages.inspirese');
    }
    
    public function turismocidadao() {
        return view('pages.turismocidadao');
    }
    
    public function planoseprojetos() {
        return view('pages.planoseprojetos');
    }
    
    public function poloagrestetrairi() {
        return view('pages.poloagrestetrairi');
    }
    
    public function poloagrestetrairi2() {
        return view('pages.poloagrestetrairi2');
    }
    
    public function polocabugicentral() {
        return view('pages.polocabugicentral');
    }
    
    public function polocostabranca() {
        return view('pages.polocostabranca');
    }
    
    public function polocostadasdunas() {
        return view('pages.polocostadasdunas');
    }
    
    public function polosertaoparaomar() {
        return view('pages.polosertaoparaomar');
    }
    
    public function polopotengi() {
        return view('pages.polopotengi');
    }
    
    public function polorotadofrio() {
        return view('pages.polorotadofrio');
    }
    
    public function poloserido() {
        return view('pages.poloserido');
    }
    
    public function poloserrano() {
        return view('pages.poloserrano');
    }
    
    public function poloserradoagrestepotiguar() {
        return view('pages.poloserradoagrestepotiguar');
    }
    
    public function polovalemar() {
        return view('pages.polovalemar');
    }
    
    /* atas - polos */
    
    public function poloagrestetrairiAta() {
        return view('pages.atas.poloagrestetrairiAta');
    }
    
    public function cabugicentralAta() {
        return view('pages.atas.cabugicentralAta');
    }
    
    public function costabrancaAta() {
        return view('pages.atas.costabrancaAta');
    }
    
    public function costadasdunasAta() {
        return view('pages.atas.costadasdunasAta');
    }
    
    public function dosertaoparaomarAta() {
        return view('pages.atas.dosertaoparaomarAta');
    }
    
    public function potengiAta() {
        return view('pages.atas.potengiAta');
    }
    
    public function rotadofrioAta() {
        return view('pages.atas.rotadofrioAta');
    }
    
    public function seridoAta() {
        return view('pages.atas.seridoAta');
    }
    
    public function serranoAta() {
        return view('pages.atas.serranoAta');
    }
    
    public function serradoagrestepotiguarAta() {
        return view('pages.atas.serradoagrestepotiguarAta');
    }
    
    public function valemarAta() {
        return view('pages.atas.valemarAta');
    }
    
    /* area admin */
    
    
}
