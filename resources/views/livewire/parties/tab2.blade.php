<div class="row">
    <div class="col-lg-12">
        <div class="ibox product-detail">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h2> Liste des About</h2>
                                <p>
                                    clicker sur le l'image pour voir
                                    en detail
                                </p>
                                <div class="clients-list">
                                    <ul class="nav nav-tabs">
                                        <span class="pull-right small text-muted">{{
                                            count($bonasavoir) }}
                                            Info(s)</span>
                                        <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>
                                                About</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="full-height-scroll">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <tbody>
                                                            @forelse($bonasavoir as $tem)
                                                            <tr>
                                                                <td class="client-avatar">
                                                                    <a data-toggle="tab"
                                                                        href="#portofolio-{{ $tem->id }}"
                                                                        class="client-link">
                                                                        <img alt="image"
                                                                            src="{{ asset('assets/img/default.png') }}">

                                                                </td>
                                                                <td>
                                                                    {{$tem->titre1}}
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {{$tem->maladie}}
                                                                    </a>
                                                                </td>
                                                                <td class="client-status">
                                                                    <a href="{{ $tem->id }}" id='deletePortofolio'
                                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delAbout')"><span
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
                                    @forelse($bonasavoir as $se)
                                    <div id="portofolio-{{ $se->id }}"
                                        class="tab-pane {{ $loop->first ? 'active' : '' }}">

                                        <div class="client-detail">
                                            <div class="full-height-scroll">
                                                <strong>Detail</strong>
                                                <hr>
                                                <form method="POST" class="form-group" data-parsley-validate id="formeditbon"
                                                onSubmit="event.preventDefault();add(this,'#tab-rubrique','editbon')">
                                                    @csrf
                                                    <div class="row">
                                                        <div>
                                                            <div class="col-lg-12 form-group ">
                                                            <input type="text" hidden value="{{ $se->id }}"
                                                                name="id" />
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand titre (Français)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='titre1_fr'
                                                                    value="{{ $se->getTranslation('titre1', 'fr') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand titre (Anglais)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='titre1_en'
                                                                    value="{{ $se->getTranslation('titre1', 'en') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Grand titre (Lingala)</label>
                                                                <input type="text" placeholder="Grand titre"
                                                                    class="form-control" name='titre1_ln'
                                                                    value="{{ $se->getTranslation('titre1', 'ln') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Maladie (Français)</label>
                                                                <input type="text" placeholder="Nom de la maladie"
                                                                    class="form-control" name='malade_fr'
                                                                    value="{{ $se->getTranslation('maladie', 'fr') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Maladie (Anglais)</label>
                                                                <input type="text" placeholder="Nom de la maladie"
                                                                    class="form-control" name='malade_en'
                                                                    value="{{ $se->getTranslation('maladie', 'en') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Maladie (Lingala)</label>
                                                                <input type="text" placeholder="Nom de la maladie"
                                                                    class="form-control" name='malade_ln'
                                                                    value="{{ $se->getTranslation('maladie', 'ln') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Sous titre (Français)</label>
                                                                <input type="text" placeholder="Sous titre"
                                                                    class="form-control" name='h1maladie_fr'
                                                                    value="{{ $se->getTranslation('h1maladie', 'fr') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Sous titre (Anglais)</label>
                                                                <input type="text" placeholder="Sous titre"
                                                                    class="form-control" name='h1maladie_en'
                                                                    value="{{ $se->getTranslation('h1maladie', 'en') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Sous titre (Lingala)</label>
                                                                <input type="text" placeholder="Sous titre"
                                                                    class="form-control" name='h1maladie_ln'
                                                                    value="{{ $se->getTranslation('h1maladie', 'ln') }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Description (Français)</label>
                                                                <textarea name="description_fr" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                    {{ $se->getTranslation('description', 'fr') }}
                                                            </textarea>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Description (Anglais)</label>
                                                                <textarea name="description_en" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                    {{ $se->getTranslation('description', 'en') }}
                                                            </textarea>
                                                            </div>
                                                            <div class="col-lg-12 form-group ">
                                                                <label>Description (Lingala)</label>
                                                                <textarea name="description_ln" class="summernote"
                                                                    rows="10" cols="110" required>
                                                                    {{ $se->getTranslation('description', 'ln') }}
                                                            </textarea>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                                            <div class="col-sm-offset-4 col-sm-5">
                                                                <button class="ladda-button btn btn-sm btn-primary"
                                                                    type="submit">
                                                                    <i class="fa fa-spinner fa-send"></i>
                                                                    Enregistrer</button>
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
