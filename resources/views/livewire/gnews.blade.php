<div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @if (session()->has('message'))
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-{{ session()->get('type') }} alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{ session()->get('message') }}
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="panel-body">
                        <div class="ibox" id="tabCat">
                            <div class="ibox-title">
                                <h5>
                                    Cette page vous permet de géré les informations, les modifiers ou les supprimer
                                </h5>
                            </div>
                            <div class="ibox-content" id="tab-rubrique">
                                <div class='row'>
                                    <div class="tabs-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab"
                                                    href="#tab0">Actualités</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab0" class="tab-pane active">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox product-detail">
                                                                <div class="ibox-content">
                                                                    <div class="row">
                                                                        @include("livewire.parties.tab6")
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
                </div>
            </div>
        </div>
    </div>
</div>
