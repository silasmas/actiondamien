<div class="row">
    <div class="col-sm-6">
        <div class="ibox">
            <div class="ibox-content">

                <h2> Liste des statistique</h2>
                <p>
                    clicker sur le titre pour voir en detail
                </p>

                <div class="clients-list">
                    <ul class="nav nav-tabs">
                        <span class="pull-right small text-muted">{{count($stat)+count($stat2) }}
                            Info(s)</span>
                        <li class="active"><a data-toggle="tab"
                                href="#tab-1m"><i
                                    class="fa fa-user"></i>
                                Statistique</a></li>
                        <li><a data-toggle="tab"
                                href="#tab-2m"><i
                                    class="fa fa-user"></i>
                                Maladie</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1m" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table
                                        class="table table-striped table-hover">
                                        <tbody>
                                            @forelse ($stat as $tem)
                                            <tr>
                                                <td
                                                    class="client-avatar">
                                                    <a data-toggle="tab"
                                                        href="#portofolio-{{$tem->id}}"
                                                        class="client-link">
                                                        <img alt="image"
                                                            src="{{ asset('assets/img/default.png') }}">

                                                </td>
                                                <td><a data-toggle="tab"
                                                    href="#portofolio-{{ $tem->id }}"
                                                    class="client-link">
                                                    {{ $tem->titre2 }}
                                                    </a> </td>
                                                <td>{{ $tem->nbr }}
                                                    </a> </td>
                                                <td
                                                    class="contact-type">
                                                    <i
                                                        class="fa fa-clock-o">
                                                    </i>
                                                </td>
                                                <td>{{$tem->created_at  }}
                                                </td>
                                                <td
                                                    class="client-status">
                                                    <a href="{{ $tem->id }}"
                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delState')"><span
                                                        id='deletePortofolio'><span
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
                        <div id="tab-2m" class="tab-pane">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table
                                        class="table table-striped table-hover">
                                        <tbody>
                                            @forelse ($stat2 as $tem)
                                            <tr>
                                                <td
                                                    class="client-avatar">
                                                    <a data-toggle="tab"
                                                        href="#maladie-{{ $tem->id }}"
                                                        class="client-link">
                                                        <img alt="image"
                                                            src="{{ asset('assets/img/default.png') }}">

                                                </td>
                                                <td><a data-toggle="tab"
                                                    href="#maladie-{{ $tem->id }}"
                                                    class="client-link">
                                                    {{ $tem->maladie }}
                                                    </a> </td>
                                                <td>{{ $tem->nbrpays }}
                                                    </a> </td>
                                                <td
                                                    class="contact-type">
                                                    <i
                                                        class="fa fa-clock-o">
                                                    </i>
                                                </td>
                                                <td>{{$tem->created_at  }}
                                                </td>
                                                <td
                                                    class="client-status">
                                                    <a href="{{ $tem->id }}"
                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delMaladie')"
                                                        id='deletePortofolio'><span
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

                    @forelse($stat as $se)
                    <div id="portofolio-{{$se->id}}"
                        class="tab-pane ">
                        <div class="client-detail">
                            <div class="full-height-scroll">
                                <strong>Detail</strong>
                                <hr>
                                <form method="POST" class="form-group"
                                onSubmit="event.preventDefault();add(this,'#tab-rubrique','editStat')"
                                    data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <input type="text" hidden value="{{$se->id }}"
                                            name="id"  />
                                        <div >
                                            <div class="col-lg-12 form-group ">
                                                <label>Nombre</label>
                                                <input type="number" placeholder="Sous Titre"
                                                    class="form-control" name='nbr'
                                                    value="{{ $se->nbr }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Sous Titre (Français)</label>
                                                <input type="text" placeholder="Grand titre"
                                                    class="form-control" name='stitre_fr'
                                                    value="{{ $se->getTranslation('titre2', 'fr') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Sous Titre (Anglais)</label>
                                                <input type="text" placeholder="Sous Titre"
                                                    class="form-control" name='stitre_en'
                                                    value="{{ $se->getTranslation('titre2', 'fr') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Sous Titre (Lingala)</label>
                                                <input type="text" placeholder="Sous Titre"
                                                    class="form-control" name='stitre_ln'
                                                    value="{{ $se->getTranslation('titre2', 'fr') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Description (Français)</label>
                                                <textarea name="description_fr" class="summernote" rows="10" cols="110"
                                                required>
                                                {{ $se->getTranslation('description', 'fr') }}
                                            </textarea>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Description (Anglais)</label>
                                                <textarea name="description_en" class="summernote" rows="10" cols="110"
                                                required>
                                                {{ $se->getTranslation('description', 'fr') }}
                                            </textarea>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Description (Lingala)</label>
                                                <textarea name="description_ln" class="summernote" rows="10" cols="110"
                                                required>
                                                {{ $se->getTranslation('description', 'fr') }}
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
                    @empty
                    <div
                        class='wrapper-content  animated fadeInRight'>
                        <div class="row mt-5">
                            <div
                                class='col-lg-6 col-md-push-1 col-sm-12'>
                                <p
                                    class="center small text-center  badge badge-danger">
                                    Aucun detail disponible pour
                                    l'instant
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforelse
                    @forelse($stat2 as $se)
                    <div id="maladie-{{$se->id}}" class="tab-pane">
                        <div class="client-detail">
                            <div class="full-height-scroll">
                                <strong>Detail</strong>
                                <hr>
                                <form method="POST" class="form-group"
                                onSubmit="event.preventDefault();add(this,'#tab-rubrique','editMaladie')"
                                    data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <input type="text" hidden value="{{$se->id}}"
                                            name="id"  />
                                        <div id="">
                                            <div class="col-lg-12 form-group ">
                                                <label>Nom de la maladie (Français)</label>
                                                <input type="text" placeholder="Nom de la maladie"
                                                    class="form-control" name='maladie_fr'
                                                    value="{{ $se->getTranslation('maladie', 'fr') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Nom de la maladie (Anglais)</label>
                                                <input type="text" placeholder="Nom de la maladie"
                                                    class="form-control" name='maladie_en'
                                                    value="{{ $se->getTranslation('maladie', 'en') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Nom de la maladie (Lingala)</label>
                                                <input type="text" placeholder="Nom de la maladie"
                                                    class="form-control" name='maladie_ln'
                                                    value="{{ $se->getTranslation('maladie', 'ln') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Nombre des pays attiend (Français)</label>
                                                <input type="text" placeholder="Nombre des pays attiend"
                                                    class="form-control" name='nbrpays_fr'
                                                    value="{{ $se->getTranslation('nbrpays', 'fr') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Nombre des pays attiend (Anglais)</label>
                                                <input type="text" placeholder="Nombre des pays attiend"
                                                    class="form-control" name='nbrpays_en'
                                                    value="{{ $se->getTranslation('nbrpays', 'en') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Nombre des pays attiend (Lingala)</label>
                                                <input type="text" placeholder="Nombre des pays attiend"
                                                    class="form-control" name='nbrpays_ln'
                                                    value="{{ $se->getTranslation('nbrpays', 'ln') }}" required>
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
                    @empty
                    <div
                        class='wrapper-content  animated fadeInRight'>
                        <div class="row mt-5">
                            <div
                                class='col-lg-6 col-md-push-1 col-sm-12'>
                                <p
                                    class="center small text-center  badge badge-danger">
                                    Aucun detail disponible pour
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
