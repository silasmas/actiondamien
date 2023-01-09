    <div class="row">
        <div class="col-lg-12">
            <div class="ibox product-detail">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <h2> Liste des slides</h2>
                                    <p>
                                        clicker sur le l'image pour voir
                                        en detail
                                    </p>
                                    <div class="clients-list">
                                        <ul class="nav nav-tabs">
                                            <span class="pull-right small text-muted">{{
                                                count($slides) }}
                                                Slide(s)</span>
                                            <li class="active"><a data-toggle="tab" href="#tab-1"><i
                                                        class="fa fa-user"></i>
                                                    Slides</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-1" class="tab-pane active">
                                                <div class="full-height-scroll">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                @forelse($slides as $tem)
                                                                <tr>
                                                                    <td class="client-avatar">
                                                                        <a data-toggle="tab"
                                                                            href="#portofolio-{{ $tem->id }}"
                                                                            class="client-link">
                                                                            <img alt="image"
                                                                                src="{{ asset('storage/' . $tem->image) }}">

                                                                    </td>
                                                                    <td>
                                                                        {{$tem->h1}}
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        {{$tem->page}}
                                                                        </a>
                                                                    </td>
                                                                    <td class="contact-type">
                                                                        <i class="fa fa-clock-o">
                                                                        </i>
                                                                    </td>
                                                                    <td>{{$tem->created_at}}
                                                                    </td>
                                                                    <td class="client-status">
                                                                        <a href="{{ $tem->id }}" id='deletePortofolio'
                                                                            onclick="event.preventDefault();deleter({{ $tem->id }},'delSlide')"><span
                                                                                class="label label-danger"><i
                                                                                    class="fa fa-trash-o"></i></span></a>
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ibox ">
                                <div class="ibox-content">
                                    <div class="tab-content">
                                        @forelse($slides as $se)
                                        <div id="portofolio-{{ $se->id }}"
                                            class="tab-pane {{ $loop->first ? 'active' : '' }}">
                                            <div class="row m-b-lg">
                                                <div class="col-lg-12 text-center ">
                                                    <span>{{ $se->titre
                                                        }}
                                                    </span><br><br>
                                                    <div class="m-b-sm">
                                                        <img alt="image" class=""
                                                            src="{{ asset('storage/' . $se->image) }}"
                                                            height="200" width="350">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="client-detail">
                                                <div class="full-height-scroll">
                                                    <form role="form" id="formTemoignagePhoto" method="POST"
                                                        action="{{ route('editeImageSlide') }}" class='form-group'
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-md-12">
                                                            <input type="text" name='id' value="{{ $se->id }}"
                                                                class="form-control hidden">
                                                        </div>
                                                        <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                            <div class="col-md-12">
                                                                <label>Photo</label>
                                                                <div class=" fileinput fileinput-new input-group"
                                                                    data-provides="fileinput">
                                                                    <div class="form-control" data-trigger="fileinput">
                                                                        <i
                                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                        <span class="fileinput-filename"></span>
                                                                    </div>
                                                                    <span
                                                                        class="input-group-addon btn btn-default btn-file"><span
                                                                            class="fileinput-new">Selectioner
                                                                            une
                                                                            photo</span>
                                                                        <span
                                                                            class="fileinput-exists">Changer</span><input
                                                                            type="file" name="photo"></span>
                                                                    <a href="#"
                                                                        class="input-group-addon btn btn-default fileinput-exists"
                                                                        data-dismiss="fileinput">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                type="submit">
                                                                <strong>Modifiers</strong>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <strong>Detail</strong>
                                                    <form method="POST" class="form-group"
                                                        action="{{ route('editeSlide') }}" enctype="multipart/form-data"
                                                        data-parsley-validate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand
                                                                    titre
                                                                    (français)</label>
                                                                <input type="text" hidden value="{{ $se->id }}"
                                                                    name="id" />

                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='h1_fr'
                                                                    value="{{ $se->getTranslation('h1', 'fr') }}"
                                                                    required>

                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand
                                                                    titre
                                                                    (Anglais)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='h1_en'
                                                                    value="{{ $se->getTranslation('h1', 'en') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand titre (Lingala)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='h1_ln'
                                                                    value="{{ $se->getTranslation('h1', 'ln') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Text du button (français)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_fr'
                                                                    value="{{ $se->getTranslation('h1', 'fr') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Text du button (Anglais)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_en'
                                                                    value="{{ $se->getTranslation('h1', 'en') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Text du button (Lingala)</label>
                                                                <input type="text" placeholder="Text du button"
                                                                    class="form-control" name='textbtn_ln'
                                                                    value="{{ $se->getTranslation('h1', 'ln') }}"
                                                                    required>
                                                            </div>

                                                            <div class="col-lg-12 form-group">
                                                                <label>Page</label>
                                                                <select class=" form-control" name='page' required>
                                                                    <option value="vision">
                                                                        Notre vision
                                                                    </option>
                                                                    <option value="about">
                                                                        A propos
                                                                    </option>
                                                                    <option value="support_us">
                                                                        Nous soutenir
                                                                    </option>
                                                                    <option value="contact">
                                                                        Contact
                                                                    </option>
                                                                    <option value="news">
                                                                        Actualité
                                                                    </option>
                                                                    <option value="testimonials">
                                                                        Témoignage en vidéo
                                                                    </option>
                                                                    <option value="sensibilization">
                                                                        Sensibilité
                                                                    </option>
                                                                    <option value="projects">
                                                                        Projets
                                                                    </option>
                                                                    <option value="donate">
                                                                        Faire  un don
                                                                    </option>
                                                                    <option value="hosp_map">
                                                                        Cartographie
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 form-group">
                                                                <label>Publication
                                                                    (Français)</label>
                                                                <textarea name="extrait_fr" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                        {{ $se->getTranslation('extrait', 'fr') }}
                                                                    </textarea>
                                                            </div>
                                                            <div class="col-lg-12 form-group">
                                                                <label>Publication
                                                                    (Anglais)</label>
                                                                <textarea name="extrait_en" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                        {{ $se->getTranslation('extrait', 'en') }}
                                                                    </textarea>
                                                            </div>
                                                            <div class="col-lg-12 form-group">
                                                                <label>Publication
                                                                    (Lingala)</label>
                                                                <textarea name="extrait_ln" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                        {{ $se->getTranslation('extrait', 'ln') }}
                                                                    </textarea>
                                                            </div>
                                                            <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                                                <div class="col-sm-offset-4 col-sm-5">
                                                                    <button class="ladda-button btn btn-sm btn-primary"
                                                                        type="submit">
                                                                        <i
                                                                            class="fa fa-spinner fa-edite"></i>Modifier</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class='wrapper-content  animated fadeInRight'>
                                            <div class="row mt-5">
                                                <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                    <p class="center small text-center  badge badge-danger">
                                                        Aucun detail
                                                        disponible
                                                        pour
                                                        l'instant
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

