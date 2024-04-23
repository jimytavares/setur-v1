@extends('admin.globals.header-admin')

@section('title', 'SETUR - ADMIN')

@section('content2')

    <!-- Titulo -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <img src="{{URL::asset('img/logo-gov.png')}}" style="width:55px; margin-left:-11px;"/>
                </div>
                <div>Edição de Notícias
                    <div class="page-title-subheading">Página para editar notócoas já publicada no - site da <b>setur.rn.gov.br</b>.</div>
                    <div class="page-title-subheading"><a href="/list-noticias"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar Página</a></div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="ml-auto badge">Sites:</div>
                <div class="ml-auto badge badge-secondary">SETUR - RN</div>
                <div class="d-inline-block dropdown">
                    <!--<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Memorandos
                    </button>-->
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Todos:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Novos:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Gravados:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">3</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>  

    <!-- BOX: Noticia & Preview -->
    <div class="tab-content">

        <!-- BOX: Noticia -->
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">

                    <h5 class="card-title" style="color:#3f6ad8;">Escrever Notícia:</h5><br/>
                    
                    <form role="form" method="POST" action="/list-noticias/update/{{$tb_noticias->id}}" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                        
                        {{-- /titulo --}}
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Titulo<small style="color:red;">*</small>:</label>
                            <div class="col-sm-10">
                                <input type="text" name="titulo" class="form-control is-valid" id="validationServer01" style="background-color:transparent; border: 1px solid #cccccc;" value="{{$tb_noticias->titulo}}" required>
                                <small id="emailHelp" class="form-text text-muted">*campo obrigatorio.</small>
                            </div>
                        </div>
                        
                        {{-- /descricao --}}
                        <div class="position-relative row form-group">
                            <label class="col-sm-2 col-form-label"  for="exampleInputEmail1">Descrição Breve<small style="color:red;font-weight:bold;">*</small></label>
                            <div class="col-sm-10">
                                <input type="text" name="descricao" value="{{$tb_noticias->descricao}}" class="form-control is-valid" id="validationServer01" style="border: 1px solid #cccccc;" required>
                                <small id="emailHelp" class="form-text text-muted">*campo obrigatorio.</small>
                            </div>
                        </div>

                        {{-- /texto --}}
                        <div class="position-relative row form-group" style="margin-top:10px;">
                            <label class="col-sm-2 col-form-label" for="exampleInputEmail1">
                                Texto<small style="color:red;font-weight:bold;">*</small>
                            </label>
                            <div class="col-sm-10">
                                <textarea type="text" name="texto" value="{{$tb_noticias->texto}}" class="form-control" id="open-source-plugins" style="height:200px;" aria-describedby=""></textarea>
                                  <script>
                                    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

                                    tinymce.init({
                                      selector: 'textarea#open-source-plugins',
                                      plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                                      imagetools_cors_hosts: ['picsum.photos'],
                                      menubar: 'file edit view insert format tools table help',
                                      toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | preview print insertfile link | outdent indent |  numlist bullist | forecolor backcolor removeformat',
                                      toolbar_sticky: true,
                                      autosave_ask_before_unload: true,
                                      autosave_interval: '30s',
                                      autosave_prefix: '{path}{query}-{id}-',
                                      autosave_restore_when_empty: false,
                                      autosave_retention: '2m',
                                      image_advtab: true,
                                      link_list: [
                                        { title: 'My page 1', value: 'https://www.tiny.cloud' },
                                        { title: 'My page 2', value: 'http://www.moxiecode.com' }
                                      ],
                                      image_list: [
                                        { title: 'My page 1', value: 'https://www.tiny.cloud' },
                                        { title: 'My page 2', value: 'http://www.moxiecode.com' }
                                      ],
                                      image_class_list: [
                                        { title: 'None', value: '' },
                                        { title: 'Some class', value: 'class-name' }
                                      ],
                                      importcss_append: true,
                                      file_picker_callback: function (callback, value, meta) {
                                        /* Provide file and text for the link dialog */
                                        if (meta.filetype === 'file') {
                                          callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                                        }

                                        /* Provide image and alt text for the image dialog */
                                        if (meta.filetype === 'image') {
                                          callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                                        }

                                        /* Provide alternative source and posted for the media dialog */
                                        if (meta.filetype === 'media') {
                                          callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                                        }
                                      },
                                      templates: [
                                            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                                        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                                        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
                                      ],
                                      template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                                      template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                                      height: 600,
                                      image_caption: true,
                                      quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                                      noneditable_noneditable_class: 'mceNonEditable',
                                      toolbar_mode: 'sliding',
                                      contextmenu: 'link image imagetools table',
                                      skin: useDarkMode ? 'oxide-dark' : 'oxide',
                                      content_css: useDarkMode ? 'dark' : 'default',
                                      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                                     });
                                  </script>
                                <small id="emailHelp" class="form-text text-muted">*campo obrigatorio.</small>
                            </div>
                        </div>
                        <br/>

                        {{-- /img --}}
                        <div class="position-relative row form-group">
                            <div class="col">
                                <label class=""><i class="fas fa-images"></i> <B>IMAGENS</B>:</label>
                            </div>
                            <div class="col-sm-10">
                                
                                {{-- ultima.img --}}
                                <div class="row">
                                    <div class="col-4">
                                        <label class="" for="exampleFormControlFile1"><B>ÚLTIMA IMAGEM</B>:</label>
                                    </div>
                                    <div class="col">
                                        <label class="" for="exampleFormControlFile1"><B>NOVA IMAGEM</B>:</label>
                                    </div>
                                </div>
                                
                                {{-- nova.img --}}
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ URL::asset('img/noticias/' . $tb_noticias->fotos) }}" style="width:100%; margin-top:10px; box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;"/>
                                        
                                    </div>
                                    <div class="col">
                                        <BR/>
                                        <input name="fotos" type="file" />
                                    </div>
                                </div>
                                
                            </div>
                        </div> <br/><br/>
                        
                        {{-- /data --}}
                        <div class="position-relative row form-group">
                            <label class="col-sm-2 col-form-label"><i class="fas fa-calendar-alt"></i> <b>DATA</b> (Automático):</label>
                            <div class="col-sm-10">
                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" style="margin-top:7px;" required>
                                <br/>
                                <small style="color:gray;">*Informe a data de publicação da notícia.</small>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" style="margin-top:30px;"><i class="fas fa-file-import"></i> Publicar</button> <br/>

                    </form>
                    
                </div>
            </div>
        </div>

    </div>

@endsection