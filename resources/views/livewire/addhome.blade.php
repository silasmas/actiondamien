<div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @if (session()->has('message'))
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-{{session()->get('type') }} alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-rubrique">Ajouter une rubrique</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-sessions">Ajouter un
                                slide</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-sessions">Ajouter autres rubrique</a></li>
                        <li class="{{ isset($pub) ? 'active' : '' }}"><a data-toggle="tab"
                                href="#tab-smalGroupe">Publication</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-rubrique" class="tab-pane active">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tabCat">  
                                        <div class="ibox-title">
                                            <h5>
                                                {{ isset($categorie) ? 'Ce formulaire vous permet de modifier une ribrique' : 'Ce formulaire vous permet de crée une ribrique' }}
                                            </h5>
                                        </div>
                                        <div class="ibox-content" id="tab-rubrique">
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class=" col-lg-12 col-sm-12">
                                                    <form method="POST" class="form-group" data-parsley-validate
                                                    id="formRubrique" >
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Rubrique</label>
                                                                <input type="text" hidden
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="idslide"  />
                                                                    
                                                                <input type="text" placeholder="La rubrique"
                                                                    class="form-control" name='rubrique'
                                                                    value="" required>

                                                            </div>
                                                            <div class=" col-sm-6 col-lg-6 form-group">
                                                                <label>Page</label>
                                                                <select class=" form-control" name="page" required>
                                                                    <option value="home">Accueil</option>
                                                                    <option value="vision">Notre vision</option>
                                                                    <option value="about">A propos</option>
                                                                    <option value="support_us">Nous soutenir</option>
                                                                    <option value="contact">Contact</option>
                                                                    <option value="news">Actualité</option>
                                                                    <option value="testimonials">Témoignage en vidéo
                                                                    </option>
                                                                    <option value="sensibilization">Sensibilité
                                                                    </option>
                                                                    <option value="projects">Projets</option>
                                                                    <option value="donate">Faire un don</option>
                                                                    <option value="hosp_map">Cartographie</option>
                                                                </select>
                                                            </div>
                                                                                                                       
                                                            <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                                                <div class="col-sm-offset-4 col-sm-5">
                                                                    <button class="ladda-button btn btn-sm btn-primary"
                                                                        type="submit">
                                                                        <i class="fa fa-spinner fa-send"></i>  Enregistrer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-sessions" class="tab-pane">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tabCat">  
                                        <div class="ibox-title">
                                            <h5>
                                                {{ isset($categorie) ? 'Ce formulaire vous permet de modifier un slide' : 'Ce formulaire vous permet de crée un slide' }}
                                            </h5>
                                        </div>
                                        <div class="ibox-content " wire:loading.class='sk-loading'>
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class=" col-lg-12 col-sm-12">
                                                    <form method="POST" class="form-group" 
                                                    action="{{isset($exp)?route('Updatslide'):route('add.slide') }}" enctype="multipart/form-data" data-parsley-validate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Grand titre (français)</label>
                                                                <input type="text" hidden
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="idslide"  />
                                                                    
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='h1_fr'
                                                                    value="" required>

                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Grand titre (Anglais)</label>
                                                                <input type="text" placeholder=" Grand titre"
                                                                    class="form-control" name='h1_en'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Grand titre (Lingala)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='h1_ln'   required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Text du button (français)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_fr'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Text du button (Anglais)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_en'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Text du button (Lingala)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_ln'   required>
                                                            </div>

                                                            <div class=" col-sm-6 col-lg-6 form-group">
                                                                <label>Page</label>
                                                                <select class=" form-control" name='page' required>
                                                                    <option value="vision">Notre vision</option>
                                                                    <option value="about">A propos</option>
                                                                    <option value="support_us">Nous soutenir</option>
                                                                    <option value="contact">Contact</option>
                                                                    <option value="news">Actualité</option>
                                                                    <option value="testimonials">Témoignage en vidéo
                                                                    </option>
                                                                    <option value="sensibilization">Sensibilité
                                                                    </option>
                                                                    <option value="projects">Projets</option>
                                                                    <option value="donate">Faire un don</option>
                                                                    <option value="hosp_map">Cartographie</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6 form-group">
                                                                <label>Image</label>
                                                                <div class=" fileinput fileinput-new input-group"
                                                                    data-provides="fileinput">
                                                                    <div class="form-control"
                                                                        data-trigger="fileinput">
                                                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                        <span class="fileinput-filename"></span>
                                                                    </div>
                                                                    <span
                                                                        class="input-group-addon btn btn-default btn-file"><span
                                                                            class="fileinput-new">cover</span>
                                                                        <span class="fileinput-exists">Changer</span>
                                                                        <input type="file" name="image"  required></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Français)</label>
                                                                <textarea name="extrait_fr" class="summernote" rows="10" cols="110"
                                                                 required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Anglais)</label>
                                                                <textarea name="extrait_en" class="summernote" rows="10" cols="110"
                                                                required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Lingala)</label>
                                                                <textarea name="extrait_ln" class="summernote" rows="10" cols="110"
                                                                required>
                                                            </textarea>
                                                            </div>                                                            
                                                            <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                                                <div class="col-sm-offset-4 col-sm-5">
                                                                    <button class="ladda-button btn btn-sm btn-primary"
                                                                        type="submit">
                                                                        <i class="fa fa-spinner fa-send"></i>  Enregistrer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-smalGroupe" class="tab-pane {{ isset($pub) ? 'active' : '' }}">
                            <div class="panel-body">
                                <div class=" col-lg-12 col-sm-12">
                                    <div class="ibox" id="tab-smlGroup">
                                        <div class="ibox-title">
                                            <h5>Ce formulaire vous permet de poster une publication</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <div class='row'>
                                                <div class="col-lg-12 col-sm-12">
                                                    <form method="POST" action="{{ isset($pub) ? '' : '' }}"
                                                        class='form-group' enctype="multipart/form-data"
                                                        data-parsley-validate>
                                                        @csrf
                                                        <div class="row">
                                                            {{-- <div class="col-sm-12  form-group hidden"> --}}
                                                            <input type="text" hidden class="form-control hidden"
                                                                value="{{ isset($pub) ? $pub->id : '' }}"
                                                                name="id" />
                                                            {{-- </div> --}}
                                                            <div class="col-sm-6  form-group ">
                                                                <label>Titre (Francais)</label>
                                                                <input type="text" placeholder="Le titre"
                                                                    value="{{ isset($pub) ? $pub->titre : '' }}"
                                                                    class="form-control" name='titre' required
                                                                    aria-required="true" data-parsley-minlength="2"
                                                                    data-parsley-trigger="change">
                                                            </div>
                                                            <div class="col-sm-6  form-group ">
                                                                <label>Titre (Anglais)</label>
                                                                <input type="text" placeholder="Le titre"
                                                                    value="{{ isset($pub) ? $pub->getTranslation('titre', 'en') : '' }}"
                                                                    class="form-control" name='titre_en' required
                                                                    aria-required="true" data-parsley-minlength="2"
                                                                    data-parsley-trigger="change">
                                                            </div>
                                                            <div class="col-sm-6  form-group ">
                                                                <label>Sous-titre (Français)</label>
                                                                <input type="text" placeholder="Le sous titre"
                                                                    value="{{ isset($pub) ? $pub->soustitre : '' }}"
                                                                    class="form-control" name='soustitre'>
                                                            </div>
                                                            <div class="col-sm-6  form-group ">
                                                                <label>Sous-titre (Anglais)</label>
                                                                <input type="text" placeholder="Le sous titre"
                                                                    value="{{ isset($pub) ? $pub->getTranslation('soustitre', 'en') : '' }}"
                                                                    class="form-control" name='soustitre_en'>
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <label>Avocat</label>
                                                                <select class="select2_demo_4 form-control"
                                                                    id="" required
                                                                    {{ isset($pub) ? '' : 'required aria-required="true" data-parsley-trigger="change"' }}
                                                                    name="avocat_id">
                                                                    <option value="" disabled
                                                                        {{ isset($pub) ? '' : 'selected' }}></option>
                                                                    {{-- @forelse ($avocat as $se)
                                                                    <option value="{{ $se->id }}" value="{{
                                                                    isset($pub)?$se->id==$pub->id?'selected':'':''}}" {{ isset($pub)?$se->id==$pub->id?'selected':'':''}}>
                                                                        {{ $se->prenom.'-'.$se->nom }}</option>
                                                                    @empty
                                                                    <option value="">Acun avocat enregistrer</option>
                                                                    @endforelse --}}
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <label>Catégorie</label>
                                                                <select class="select2_cat form-control"
                                                                    id=""
                                                                    {{ isset($pub) ? '' : 'aria-required="true" data-parsley-trigger="change"' }}
                                                                    name="categorie_id">
                                                                    <option value="" disabled selected></option>

                                                                    {{-- @forelse($cat as $se)
                                                                    <option value="{{ $se->id }}" value="{{ isset($pub)?$se->id==$pub->id?'selected':'':''}}" {{ isset($pub)?$se->id==$pub->id?'selected':'':''}}>{{ $se->nom }}</option>
                                                                    @empty
                                                                    <option value="">Acune catégorie enregistrer</option>
                                                                    @endforelse --}}
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-12 form-group">
                                                                <label>PDF</label>
                                                                <div class=" fileinput fileinput-new input-group"
                                                                    data-provides="fileinput">
                                                                    <div class="form-control"
                                                                        data-trigger="fileinput">
                                                                        <i
                                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                        <span class="fileinput-filename"></span>
                                                                    </div>
                                                                    <span
                                                                        class="input-group-addon btn btn-default btn-file"><span
                                                                            class="fileinput-new">PDF</span>
                                                                        <span class="fileinput-exists">Changer</span>
                                                                        <input type="file" name="pubpdf"></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 form-group">
                                                                <label>Cover</label>
                                                                <div class=" fileinput fileinput-new input-group"
                                                                    data-provides="fileinput">
                                                                    <div class="form-control"
                                                                        data-trigger="fileinput">
                                                                        <i
                                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                        <span class="fileinput-filename"></span>
                                                                    </div>
                                                                    <span
                                                                        class="input-group-addon btn btn-default btn-file"><span
                                                                            class="fileinput-new">cover</span>
                                                                        <span class="fileinput-exists">Changer</span>
                                                                        <input type="file" name="cover"
                                                                            {{ isset($pub) ? '' : 'aria-required="true" data-parsley-trigger="change"' }}></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <div class=" col-sm-12 col-lg-12 form-group">
                                                                <label>Publication (Français)</label>
                                                                <textarea name="contenu" class="summernote" rows="12" id='' data-parsley-trigger="change" required
                                                                    aria-required="true">
                                                                    {{ isset($pub) ? $pub->contenu : '' }}
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-12 col-lg-12 form-group">
                                                                <label>Publication (Anglais)</label>
                                                                <textarea name="contenu_en" class="summernote" rows="12" id='' data-parsley-trigger="change" required
                                                                    aria-required="true">
                                                                    {{ isset($pub) ? $pub->getTranslation('contenu', 'en') : '' }}
                                                            </textarea>
                                                            </div>
                                                            <div class="col-sm-offset-3  col-sm-9 form-group">
                                                                <div class="col-sm-offset-4 col-sm-5">
                                                                    <button class="btn btn-sm btn-primary"
                                                                        type="submit">
                                                                        {{ isset($pub) ? 'Modifier' : 'Enregistrer' }}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>