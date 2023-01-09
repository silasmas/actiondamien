<div>
    <div class="tabs-container">
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
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tabb0">Vidéo</a></li>
            <li class=""><a data-toggle="tab" href="#tabb11">Sensibilisation</a></li>
        </ul>
        <div class="tab-content">
            <div id="tabb0" class="tab-pane active">
                <div class="panel-body">
                    @include("livewire.parties.tab7")
                </div>
            </div>
            <div id="tabb11" class="tab-pane">
                <div class="panel-body">
                    @include("livewire.parties.tab8")
                </div>
            </div>
        </div>
    </div>
</div>
