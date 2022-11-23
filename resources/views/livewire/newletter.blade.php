<div>
    @if (session()->has('message'))
        <div class="col-md-12">
            <div class="alert alert-{{ session()->get('type') }} alert-dismissable">
                {{-- <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> --}}
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
    <form action="" id="newsletter">
        {{-- <h1 class="text-danger">{{ $email }}</h1> --}}
        <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="Votre E-mail"
                wire:model.defer="email">
            <button type="submit"class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2"
                wire:click.prevent="addnewsLetter()" title="{{ __('miscellaneous.register') }}"
                wire:loading.class='disabled'><i
                    class="fa fa-paper-plane"></i></button>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </form>
</div>
