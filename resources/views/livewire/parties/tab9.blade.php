<div class="row">
    <div class="col-sm-6">
        <div class="ibox">
            <div class="ibox-content">

                <h2> Liste des Zones </h2>
                <p>
                    clicker sur le l'image pour voir en detail et modifier
                </p>

                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table
                                        class="table table-striped table-hover">
                                        <tbody>
                                            @forelse ($zones as $tem)
                                            <tr>
                                                <td
                                                    class="client-avatar">
                                                    <a data-toggle="tab"
                                                        href="#portofolio-{{ $tem->id }}"
                                                        class="client-link">
                                                        <img alt="image"
                                                            src="{{ asset('assets/img/default.png') }}">

                                                </td>
                                                <td>{{ $tem->nom }}
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
                                                        onclick="event.preventDefault();deleter({{ $tem->id }},'delzone')"
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
                    @forelse($zones as $se)
                    <div id="portofolio-{{ $se->id }}"
                        class="tab-pane {{ $loop->first ? 'active' : '' }}">

                        <div class="client-detail">
                            <div class="full-height-scroll">
                                <strong>Detail</strong>
                                <hr>
                                <form method="POST" class="form-group" data-parsley-validate id="formZone"
                                onSubmit="event.preventDefault();add(this,'tab-zone','editZone')">
                                    @csrf
                                    <div class="row">
                                        <input type="text" name='id'
                                        value="{{ $se->id }}"
                                        class="form-control hidden">
                                        <div class="col-lg-12 form-group ">
                                            <label>Nom de la zone</label>
                                            <input type="text" placeholder="Le nom de la viéo"
                                                class="form-control"
                                                value="{{ $se->nom }}" name='lien' required>

                                        </div>
                                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                            <div class="col-sm-offset-4 col-sm-5">
                                                <button class="ladda-button btn btn-sm btn-primary"
                                                    type="submit">
                                                    <i class="fa fa-spinner fa-send"></i>  Modifier</button>
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
