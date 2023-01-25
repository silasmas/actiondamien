<div class="row">
    <div class="col-sm-6">
        <div class="ibox">
            <div class="ibox-content">

                <h2> Liste de témoignages en sensibilisation</h2>
                <p>
                    clicker sur le l'image ou le titre pour voir en detail et modifier
                </p>

                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table
                                        class="table table-striped table-hover">
                                        <tbody>
                                            @forelse ($sensible as $tem)
                                            <tr>
                                                <td
                                                    class="client-avatar">
                                                    <a data-toggle="tab"
                                                        href="#portofolio-{{ $tem->id }}"
                                                        class="client-link">
                                                        <img alt="image"
                                                            src="{{ asset('storage/' . $tem->photo) }}">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a data-toggle="tab"
                                                    href="#portofolio-{{ $tem->id }}"
                                                    class="client-link">
                                                    {{ $tem->titre }}
                                                    </a>
                                                </td>

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
                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delSens')"
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
                    @forelse($sensible as $se)
                    <div id="portofolio-{{ $se->id }}"
                        class="tab-pane {{ $loop->first ? 'active' : '' }}">
                        <div class="row m-b-lg">
                            <div class="col-lg-12 text-center "><br>
                                <div class="m-b-sm">
                                    <img alt="image" class=""
                                        src="{{ asset('storage/' . $se->photo) }}"
                                        height="200" width="350">
                                </div>
                            </div>
                        </div>
                        <div class="client-detail">
                            <div class="full-height-scroll">
                                <form role="form"
                                id="formTemoignagePhoto"
                                method="POST"
                                action="{{ route('editeImageSens') }}"
                                class='form-group'
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <input type="text" name='id'
                                        value="{{ $se->id }}"
                                        class="form-control hidden">
                                </div>
                                <div class="col-md-12 mt-10"
                                    style="margin-top: 30px;">
                                    <div class="col-md-12">
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
                                    <button
                                        class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                        type="submit">
                                        <strong>Modifiers</strong>
                                    </button>
                                </div>
                            </form>
                                <strong>Detail</strong>
                                <hr>
                                <form method="POST"
                                class="form-group" data-parsley-validate id="formbon" enctype="multipart/form-data"
                                onSubmit="event.preventDefault();add(this,'#tab-rubrique','editTem')">
                                    @csrf
                                    <div class="row">
                                        <div id="">
                                            <div
                                            class=" col-sm-6 col-lg-6 form-group">
                                            <input type="text"
                                                name='id'
                                                value="{{ $se->id }}"
                                                class="form-control hidden">

                                        </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Titre (Français)</label>
                                                <input type="text" placeholder="Titre de la sensibilisation"
                                                    class="form-control" name='titre_fr'
                                                    value="{{$se->getTranslation('titre', 'fr')}}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Titre (Anglais)</label>
                                                <input type="text" placeholder="Titre de la sensibilisation"
                                                    class="form-control" name='titre_en'
                                                    value="{{ $se->getTranslation('titre', 'en') }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Titre (Lingala)</label>
                                                <input type="text" placeholder="Titre de la sensibilisation"
                                                    class="form-control" name='titre_ln'
                                                    value="{{ $se->getTranslation('titre', 'ln') }}" required>
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
                                                {{ $se->getTranslation('description', 'en') }}
                                            </textarea>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Description (Lingala)</label>
                                                <textarea name="description_ln" class="summernote" rows="10" cols="110"
                                                required>
                                                {{ $se->getTranslation('description', 'ln') }}
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
                </div>
            </div>
        </div>
    </div>
</div>
