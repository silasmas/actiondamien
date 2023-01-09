<div class="row">
    <div class="col-sm-6">
        <div class="ibox">
            <div class="ibox-content">
                <h2> Liste des Centres de santé </h2>
                <p>
                    clicker sur le l'image pour voir en detail et modifier
                </p>

                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Centre</th>
                                                <th>Phone</th>
                                                <th>Air</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($centres as $tem)
                                            <tr>
                                                <td class="client-avatar">
                                                    <a data-toggle="tab" href="#portofolios-{{ $tem->id }}"
                                                        class="client-link">
                                                        <img alt="image" src="{{ asset('assets/img/default.png') }}">

                                                </td>
                                                <td><a data-toggle="tab" href="#portofolios-{{ $tem->id }}"
                                                        class="client-link">
                                                        {{ $tem->nom }}
                                                    </a> </td>
                                                <td>{{ $tem->phone }}
                                                    </a> </td>
                                                <td>{{ $tem->air->nom }}
                                                    </a> </td>
                                                <td class="client-status">
                                                    <a href="{{ $tem->id }}"
                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delCentre')"
                                                        id='deletePortofolio'><span class="label label-danger"><i
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
                    @forelse($centres as $se)
                    <div id="portofolios-{{ $se->id }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">

                        <div class="client-detail">
                            <div class="full-height-scroll">
                                <strong>Detail</strong>
                                <hr>
                                <form method="POST" class="form-group" data-parsley-validate id="formbon"
                                    onSubmit="event.preventDefault();add(this,'tab-zone','addcentre')">
                                    @csrf
                                    <div class="row">
                                        <div class=" col-sm-6 col-lg-12 form-group">
                                            <label>Air de santé</label>
                                            <select class=" form-control" name="airId" required>
                                                <option value="" disabled selected>Selectionez une Air de santé
                                                </option>
                                                @forelse ($airs as $r)
                                                <option value="{{ $r->id }}" {{ $r->id==$se->air_id?"selected":"" }}>{{
                                                    $r->nom }}</option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="text" hidden value="{{ $se->id}}" name="id" />
                                        <div id="">
                                            <div class="col-lg-6 form-group ">
                                                <label>Nom du centre</label>
                                                <input type="text" placeholder="Nom du centre" class="form-control"
                                                    name='centreName' value="{{ $se->nom}}" required>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Téléphone</label>
                                                <input type="text" placeholder="téléphone" class="form-control"
                                                    name='phone' value="{{ $se->phone}}" required>
                                            </div>
                                            <div class="col-lg-12 form-group ">
                                                <label>Adresse du centre</label>
                                                <textarea name="adresse" class="summernote" rows="10" cols="110"
                                                    required>
                                                                                    {{ $se->adresse}}
                                                                                </textarea>
                                            </div>
                                        </div>


                                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                            <div class="col-sm-offset-4 col-sm-5">
                                                <button class="ladda-button btn btn-sm btn-primary" type="submit">
                                                    <i class="fa fa-spinner fa-send"></i> Enregistrer</button>
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