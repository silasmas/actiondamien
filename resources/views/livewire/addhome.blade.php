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
                        <li class=""><a data-toggle="tab" href="#tab-home">Accueil</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-new">Actualité</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-temoignage">Témoignages</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-carte">cartographie</a></li>
                        <li class="{{ isset($pub) ? 'active' : '' }}"><a data-toggle="tab"
                                href="#tab-projet">Projet</a></li>
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
                        <div id="tab-home" class="tab-pane">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tabCat">
                                        <div class="ibox-title">
                                            <h5>
                                                Ce formulaire vous permet de d'ajouter ou de modifier les informations dans la page d'accueil, chaque partie représente une rubrique du site
                                            </h5>
                                        </div>
                                        <div class="ibox-content" id="tab-rubrique">
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class="tabs-container">
                                                    <ul class="nav nav-tabs">
                                                        @forelse ($rubriques as $r)
                                                        <li class="{{ $loop->first?"active":"" }}"><a data-toggle="tab" href="#tab{{$loop->index }}">{{ $r->rubrique }}</a></li>
                                                        @empty
                                                        @endforelse
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="tab0" class="tab-pane active">
                                                            <div class="panel-body">
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
                                                        <div id="tab1" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class=" col-lg-12 col-sm-12">
                                                                    <form method="POST" class="form-group" data-parsley-validate id="formbon" >
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                                <label>Rubrique</label>
                                                                                <select class=" form-control" name="pageId" required>
                                                                                    <option value="" disabled selected></option>
                                                                                    @forelse ($rubriques as $r)
                                                                                        <option value="{{ $r->id }}">{{ $r->rubrique." ( Page :".$r->page.")" }}</option>
                                                                                    @empty

                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <input type="text" hidden value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                name="idslide"  />
                                                                            <div id="">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Grand titre (Français)</label>
                                                                                    <input type="text" placeholder="Grand titre"
                                                                                        class="form-control" name='titre1_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Grand titre (Anglais)</label>
                                                                                    <input type="text" placeholder="Grand titre"
                                                                                        class="form-control" name='titre1_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Grand titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Grand titre"
                                                                                        class="form-control" name='titre1_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Maladie (Français)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='malade_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Maladie (Anglais)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='malade_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Maladie (Lingala)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='malade_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Sous titre (Français)</label>
                                                                                    <input type="text" placeholder="Sous titre"
                                                                                        class="form-control" name='h1maladie_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Sous titre (Anglais)</label>
                                                                                    <input type="text" placeholder="Sous titre"
                                                                                        class="form-control" name='h1maladie_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Sous titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Sous titre"
                                                                                        class="form-control" name='h1maladie_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
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
                                                        <div id="tab2" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class=" col-lg-12 col-sm-12">
                                                                    <h1>Statistique</h1>
                                                                    <form method="POST" class="form-group" data-parsley-validate id="formStat" >
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                                <label>Rubrique</label>
                                                                                <select class=" form-control" name="pageIdst" required>
                                                                                    <option value="" disabled selected></option>
                                                                                    @forelse ($rubriques as $r)
                                                                                        <option value="{{ $r->id }}">{{ $r->rubrique}}</option>
                                                                                    @empty

                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <input type="text" hidden value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                name="idslide"  />
                                                                            <div id="">
                                                                                <div class="col-lg-2 form-group ">
                                                                                    <label>Nombre</label>
                                                                                    <input type="number" placeholder="Sous Titre"
                                                                                        class="form-control" name='nbr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-3 form-group ">
                                                                                    <label>Sous Titre (Français)</label>
                                                                                    <input type="text" placeholder="Grand titre"
                                                                                        class="form-control" name='stitre_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-3 form-group ">
                                                                                    <label>Sous Titre (Anglais)</label>
                                                                                    <input type="text" placeholder="Sous Titre"
                                                                                        class="form-control" name='stitre_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-3 form-group ">
                                                                                    <label>Sous Titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Sous Titre"
                                                                                        class="form-control" name='stitre_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
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
                                                                <div class=" col-lg-12 col-sm-12">
                                                                    <h1>Maladie</h1>
                                                                    <form method="POST" class="form-group" data-parsley-validate id="formStat2" >
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                                <label>Rubrique</label>
                                                                                <select class=" form-control" name="page_id" required>
                                                                                    @forelse ($rubriques as $r)
                                                                                        <option value="{{ $r->id }}">{{ $r->rubrique}}</option>
                                                                                    @empty

                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <input type="text" hidden value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                name="idslide"  />
                                                                            <div id="">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nom de la maladie (Français)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='maladie_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nom de la maladie (Anglais)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='maladie_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nom de la maladie (Lingala)</label>
                                                                                    <input type="text" placeholder="Nom de la maladie"
                                                                                        class="form-control" name='maladie_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nombre des pays attiend (Français)</label>
                                                                                    <input type="text" placeholder="Nombre des pays attiend"
                                                                                        class="form-control" name='nbrpays_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nombre des pays attiend (Anglais)</label>
                                                                                    <input type="text" placeholder="Nombre des pays attiend"
                                                                                        class="form-control" name='nbrpays_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Nombre des pays attiend (Lingala)</label>
                                                                                    <input type="text" placeholder="Nombre des pays attiend"
                                                                                        class="form-control" name='nbrpays_ln'
                                                                                        value="" required>
                                                                                </div>
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
                                                        <div id="tab3" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class=" col-lg-12 col-sm-12">
                                                                        <form method="POST" class="form-group"
                                                                        action="{{isset($exp)?route('Updatslide'):route('add.hopital') }}" enctype="multipart/form-data" data-parsley-validate>
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class=" col-sm-6 col-lg-12 form-group">
                                                                                    <label>Rubrique</label>
                                                                                    <select class=" form-control" name="pageId" required>
                                                                                        <option value="" disabled selected></option>
                                                                                        @forelse ($rubriques as $r)
                                                                                            <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                                        @empty

                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (français)</label>
                                                                                    <input type="text" hidden
                                                                                        value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                        name="idslide"  />
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_fr'
                                                                                        value="" required>

                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Anglais)</label>
                                                                                    <input type="text" placeholder=" Titre"
                                                                                        class="form-control" name='h1_en'  required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_ln'   required>
                                                                                </div>
                                                                                <div class="col-sm-12 form-group">
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
                                                                                            <input type="file" name="cover"  required></span>
                                                                                        <a href="#"
                                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                     required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
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
                                                        <div id="tab4" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class=" col-lg-12 col-sm-12">
                                                                        <form method="POST" class="form-group"
                                                                        action="{{isset($exp)?route('Updatslide'):route('add.support') }}" enctype="multipart/form-data" data-parsley-validate>
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class=" col-sm-6 col-lg-12 form-group">
                                                                                    <label>Rubrique</label>
                                                                                    <select class=" form-control" name="pageId" required>
                                                                                        <option value="" disabled selected></option>
                                                                                        @forelse ($rubriques as $r)
                                                                                            <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                                        @empty

                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (français)</label>
                                                                                    <input type="text" hidden
                                                                                        value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                        name="idslide"  />
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_fr'
                                                                                        value="" required>

                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Anglais)</label>
                                                                                    <input type="text" placeholder=" Titre"
                                                                                        class="form-control" name='h1_en'  required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_ln'   required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (français)</label>
                                                                                    <input type="text" placeholder="Texte du numéro"
                                                                                        class="form-control" name='txtNumber_fr'
                                                                                        value="" required>

                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (Anglais)</label>
                                                                                    <input type="text" placeholder=" Texte du numéro"
                                                                                        class="form-control" name='txtNumber_en'  required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (Lingala)</label>
                                                                                    <input type="text" placeholder="Texte du numéro"
                                                                                        class="form-control" name='txtNumber_ln'   required>
                                                                                </div>
                                                                                <div class="col-lg-6 form-group ">
                                                                                    <label>Téléphone</label>
                                                                                    <input type="text" placeholder="Téléphone"
                                                                                        class="form-control" name='telephone'   required>
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
                                                                                            <input type="file" name="cover"  required></span>
                                                                                        <a href="#"
                                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                     required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
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
                                                        <div id="tab5" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class=" col-lg-12 col-sm-12">
                                                                        <form method="POST" class="form-group"
                                                                        action="{{route('add.support') }}" enctype="multipart/form-data" data-parsley-validate>
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class=" col-sm-6 col-lg-12 form-group">
                                                                                    <label>Rubrique</label>
                                                                                    <select class=" form-control" name="pageId" required>
                                                                                        <option value="" disabled selected></option>
                                                                                        @forelse ($rubriques as $r)
                                                                                            <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                                        @empty

                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (français)</label>
                                                                                    <input type="text" hidden
                                                                                        value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                        name="idslide"  />
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_fr'
                                                                                        value="" required>

                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Anglais)</label>
                                                                                    <input type="text" placeholder=" Titre"
                                                                                        class="form-control" name='h1_en'  required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Titre"
                                                                                        class="form-control" name='h1_ln'   required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (français)</label>
                                                                                    <input type="text" placeholder="Texte du numéro"
                                                                                        class="form-control" name='txtNumber_fr'
                                                                                        value="" required>

                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (Anglais)</label>
                                                                                    <input type="text" placeholder=" Texte du numéro"
                                                                                        class="form-control" name='txtNumber_en'  required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Texte du numéro (Lingala)</label>
                                                                                    <input type="text" placeholder="Texte du numéro"
                                                                                        class="form-control" name='txtNumber_ln'   required>
                                                                                </div>
                                                                                <div class="col-lg-6 form-group ">
                                                                                    <label>Téléphone</label>
                                                                                    <input type="text" placeholder="Téléphone"
                                                                                        class="form-control" name='telephone'   required>
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
                                                                                            <input type="file" name="cover"  required></span>
                                                                                        <a href="#"
                                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                     required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class=" col-sm-4 col-lg-12 form-group">
                                                                                    <label>Publication (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-new" class="tab-pane">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tabCat">
                                        <div class="ibox-title">
                                            <h5>
                                                {{ isset($categorie) ? 'Ce formulaire vous permet de modifier une actualité' : 'Ce formulaire vous permet de crée une actualité' }}
                                            </h5>
                                        </div>
                                        <div class="ibox-content" id="tab-rubrique">
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class=" col-lg-12 col-sm-12">
                                                    <form method="POST" class="form-group"
                                                    action="{{isset($exp)?route('Updatslide'):route('add.news') }}" enctype="multipart/form-data" data-parsley-validate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-6 col-lg-6 form-group">
                                                                <label>Rubrique</label>
                                                                <select class=" form-control" name="pageId" required>
                                                                    <option value="" disabled selected></option>
                                                                    @forelse ($news as $r)
                                                                        <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                            <div class=" col-sm-6 col-lg-6 form-group">
                                                                <label>Année</label>
                                                                <input type="text"  class="form-control"
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="annee"  required/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (français)</label>
                                                                <input type="text" hidden
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="idslide"  />
                                                                <input type="text" placeholder="Titre"
                                                                    class="form-control" name='h1_fr'
                                                                    value="" required>

                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (Anglais)</label>
                                                                <input type="text" placeholder=" Titre"
                                                                    class="form-control" name='h1_en'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (Lingala)</label>
                                                                <input type="text" placeholder="Titre"
                                                                    class="form-control" name='h1_ln'   required>
                                                            </div>
                                                            <div class="col-lg-6 form-group ">
                                                                <label>Vidéo</label>
                                                                <input type="text" placeholder="Vidéo"
                                                                    class="form-control" name='video'>
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
                                                                        <input type="file" name="cover"  required></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Français)</label>
                                                                <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                 required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Anglais)</label>
                                                                <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Publication (Lingala)</label>
                                                                <textarea name="description_ln" class="summernote" rows="10" cols="110"
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
                        <div id="tab-carte" class="tab-pane {{ isset($pub) ? 'active' : '' }}">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tab-zone">
                                        <div class="ibox-title">
                                            <h5>
                                                Ce formulaire vous permet de d'ajouter ou de modifier les informations dans la page d'accueil, chaque partie représente une rubrique du site
                                            </h5>
                                        </div>
                                        <div class="ibox-content" >
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class="tabs-container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#tabb0">Zone</a></li>
                                                        <li class=""><a data-toggle="tab" href="#tabb1">Air</a></li>
                                                        <li class=""><a data-toggle="tab" href="#tabb2">Centre</a></li>

                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="tabb0" class="tab-pane active">
                                                            <div class="panel-body">
                                                                <div class='row'>
                                                                        <div class=" col-lg-12 col-sm-12">
                                                                            <form method="POST" class="form-group" data-parsley-validate id="formZone" onSubmit="event.preventDefault();add(this,'tab-zone','addzone')">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 form-group ">
                                                                                        <label>Nom de la zone</label>
                                                                                        <input type="text" hidden
                                                                                            value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                            name="idslide"  />

                                                                                        <input type="text" placeholder="Le nom de zone"
                                                                                            class="form-control" name='zoneName'
                                                                                            value="" required>

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
                                                        <div id="tabb1" class="tab-pane">
                                                            <div class="panel-body">
                                                                <div class='row'>
                                                                        <div class=" col-lg-12 col-sm-12">
                                                                            <form method="POST" class="form-group" data-parsley-validate id="formZone" onSubmit="event.preventDefault();add(this,'tab-zone','addAir')">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 form-group ">
                                                                                        <label>Nom de la zone</label>
                                                                                        <select class=" form-control" name="zoneId" required>
                                                                                            <option value="" disabled selected>Selectionez une zone</option>
                                                                                            @forelse ($zone as $r)
                                                                                                <option value="{{ $r->id }}">{{ $r->nom }}</option>
                                                                                            @empty

                                                                                            @endforelse
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-6 form-group ">
                                                                                        <label>Nom du air</label>
                                                                                        <input type="text" placeholder="Le nom du air"
                                                                                            class="form-control" name='airName'
                                                                                            value="" required>
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
                                                        <div id="tabb2" class="tab-pane ">
                                                            <div class="panel-body">
                                                                <div class=" col-lg-12 col-sm-12">
                                                                    <form method="POST" class="form-group" data-parsley-validate id="formbon"
                                                                    onSubmit="event.preventDefault();add(this,'tab-zone','addcentre')">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                                <label>Air de santé</label>
                                                                                <select class=" form-control" name="airId" required>
                                                                                    <option value="" disabled selected>Selectionez une Air de santé</option>
                                                                                    @forelse ($air as $r)
                                                                                        <option value="{{ $r->id }}">{{ $r->nom }}</option>
                                                                                    @empty

                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <input type="text" hidden value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                                name="idslide"  />
                                                                            <div id="">
                                                                                <div class="col-lg-6 form-group ">
                                                                                    <label>Nom du centre</label>
                                                                                    <input type="text" placeholder="Nom du centre"
                                                                                        class="form-control" name='centreName'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-6 form-group">
                                                                                    <label>Téléphone</label>
                                                                                    <input type="text" placeholder="téléphone"
                                                                                        class="form-control" name='phone'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Adresse du centre</label>
                                                                                    <textarea name="adresse" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-temoignage" class="tab-pane {{ isset($pub) ? 'active' : '' }}">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tab-zone">
                                        <div class="ibox-title">
                                            <h5>
                                                Ce formulaire vous permet de d'ajouter les témoignages en vidéo et la sensibilisation.
                                            </h5>
                                        </div>
                                        <div class="ibox-content" >
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class="tabs-container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#tabb0">Vidéo</a></li>
                                                        <li class=""><a data-toggle="tab" href="#tabb11">Sensibilisation</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="tabb0" class="tab-pane active">
                                                            <div class="panel-body">
                                                                <div class='row'>
                                                                        <div class=" col-lg-12 col-sm-12">
                                                                            <form method="POST" class="form-group" data-parsley-validate id="formZone" 
                                                                            onSubmit="event.preventDefault();add(this,'tab-zone','addVideo')">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class=" col-sm-6 col-lg-6 form-group">
                                                                                        <label>Rubrique</label>
                                                                                        <select class=" form-control" name="pageId" required>
                                                                                            <option value="" disabled selected></option>
                                                                                            @forelse ($video as $r)
                                                                                                <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                                            @empty
                        
                                                                                            @endforelse
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-6 form-group ">
                                                                                        <label>Lien de la vidéo</label>
                                                                                        <input type="text" placeholder="Le nom de la viéo"
                                                                                            class="form-control" name='lien' required>
                                                                                    </div>
                                                                                    <div class="col-lg-12 form-group ">
                                                                                        <label>Description (Français)</label>
                                                                                        <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                        required>
                                                                                    </textarea>
                                                                                    </div>
                                                                                    <div class="col-lg-12 form-group ">
                                                                                        <label>Description (Anglais)</label>
                                                                                        <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                        required>
                                                                                    </textarea>
                                                                                    </div>
                                                                                    <div class="col-lg-12 form-group ">
                                                                                        <label>Description (Lingala)</label>
                                                                                        <textarea name="description_ln" class="summernote" rows="10" cols="110"
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
                                                        <div id="tabb11" class="tab-pane">
                                                            <div class="panel-body">
                                                                <div class=" col-lg-12 col-sm-12">
                                                                    <form method="POST" action="{{ route('addSensibilisation') }}" 
                                                                    class="form-group" data-parsley-validate id="formbon" enctype="multipart/form-data" >
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                                <label>Page</label>
                                                                                <select class=" form-control" name="page_id" required>
                                                                                    <option value="" disabled selected>Selectionez la page</option>
                                                                                    @forelse ($sensibilisation as $r)
                                                                                        <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                                    @empty

                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div id="">
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Français)</label>
                                                                                    <input type="text" placeholder="Titre de la sensibilisation"
                                                                                        class="form-control" name='titre_fr'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Anglais)</label>
                                                                                    <input type="text" placeholder="Titre de la sensibilisation"
                                                                                        class="form-control" name='titre_en'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-lg-4 form-group ">
                                                                                    <label>Titre (Lingala)</label>
                                                                                    <input type="text" placeholder="Titre de la sensibilisation"
                                                                                        class="form-control" name='titre_ln'
                                                                                        value="" required>
                                                                                </div>
                                                                                <div class="col-sm-12 form-group">
                                                                                    <label>Photo</label>
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
                                                                                            <input type="file" name="photo"  required></span>
                                                                                        <a href="#"
                                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Français)</label>
                                                                                    <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Anglais)</label>
                                                                                    <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
                                                                                <div class="col-lg-12 form-group ">
                                                                                    <label>Description (Lingala)</label>
                                                                                    <textarea name="description_ln" class="summernote" rows="10" cols="110"
                                                                                    required>
                                                                                </textarea>
                                                                                </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-projet" class="tab-pane {{ isset($pub) ? 'active' : '' }}">
                            <div class="panel-body">
                                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                                    <div class="ibox" id="tabCat">
                                        <div class="ibox-title">
                                            <h5>
                                                {{ isset($categorie) ? 'Ce formulaire vous permet de modifier un projet' : 'Ce formulaire vous permet de crée un projet' }}
                                            </h5>
                                        </div>
                                        <div class="ibox-content" id="tab-rubrique">
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                                <div class="sk-cube2"></div>
                                            </div>
                                            <div class='row'>
                                                <div class=" col-lg-12 col-sm-12">
                                                    <form method="POST" class="form-group"
                                                    action="{{route('projets') }}" enctype="multipart/form-data" data-parsley-validate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-6 col-lg-12 form-group">
                                                                <label>Rubrique</label>
                                                                <select class=" form-control" name="pageId" required>
                                                                    <option value="" disabled selected></option>
                                                                    @forelse ($projets as $r)
                                                                        <option value="{{ $r->id }}">{{ $r->rubrique }}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (français)</label>
                                                                <input type="text" hidden
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="idslide"  />
                                                                <input type="text" placeholder="Titre"
                                                                    class="form-control" name='h1_fr'
                                                                    value="" required>

                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (Anglais)</label>
                                                                <input type="text" placeholder=" Titre"
                                                                    class="form-control" name='h1_en'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Titre (Lingala)</label>
                                                                <input type="text" placeholder="Titre"
                                                                    class="form-control" name='h1_ln'   required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Libelle (français)</label>
                                                                <input type="text" hidden
                                                                    value="{{ isset($categorie) ? $categorie->id : '' }}"
                                                                    name="idslide"  />
                                                                <input type="text" placeholder="Libelle"
                                                                    class="form-control" name='intituler_fr'
                                                                    value="" required>

                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Libelle (Anglais)</label>
                                                                <input type="text" placeho  lder=" Libelle"
                                                                    class="form-control" name='intituler_en'  required>
                                                            </div>
                                                            <div class="col-lg-4 form-group ">
                                                                <label>Libelle (Lingala)</label>
                                                                <input type="text" placeholder="Libelle"
                                                                    class="form-control" name='intituler_ln'   required>
                                                            </div>
                                                            <div class="col-sm-12 form-group">
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
                                                                        <input type="file" name="cover"  required></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Detail (Français)</label>
                                                                <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                                 required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Detail (Anglais)</label>
                                                                <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                                required>
                                                            </textarea>
                                                            </div>
                                                            <div class=" col-sm-4 col-lg-12 form-group">
                                                                <label>Detail (Lingala)</label>
                                                                <textarea name="description_ln" class="summernote" rows="10" cols="110"
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
