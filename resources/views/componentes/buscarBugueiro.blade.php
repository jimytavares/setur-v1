<form action="{{ route('buscarBugueiro') }}" class="domain-form" method="GET" enctype="multipart/form-data">
@csrf
    <div class="d-md-flex"> 
        <input type="text" name="nome_credencial" class="form-control px-4" placeholder="Informe o nome do bugueiro para realizar a busca"> 
        <button type="submit" class="search-domain btn btn-info px-3" style="background-color:#e3650e; border:none; color:white;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
    </div>
</form>