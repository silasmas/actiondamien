@extends('layouts.adminTemplate', ['titre' => 'Carthographie'])
@section('autres_style')
<link href="{{asset('assets/admin/css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/chosen/bootstrap-chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/js/parsley/parsley.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap-markdown/bootstrap-markdown.min.css') }}">
<link href="{{ asset('assets/admin/css/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/slick/slick-theme.css') }}" rel="stylesheet">
@endsection

@section('content')
    @livewire('gcarte')
@endsection
@section('autres-script')
<script src="{{ asset('assets/admin/js/bootstrap-markdown/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap-markdown/markdown.js') }}"></script>
<script src="{{ asset('assets/admin/js/datapicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/admin/js/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('assets/admin/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jasny/jasny-bootstrap.min.js') }}"></script>


<script src="{{ asset('assets/admin/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/admin/js/parsley/i18n/fr.js') }}"></script>

<script src="{{ asset('assets/admin/js/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/slick/slick.min.js') }}"></script>
<script>
    $(document).ready(function () {
    $('.summernote').summernote();
    $('.product-images').slick({
            dots: true
        });
    });

    function load(id) {
        $(id).children('.ibox-content').toggleClass('sk-loading');
    }

    function add(form, idLoad, url) {
        var f = form;
        var loade = idLoad;
        var u = url;
        load(loade);
        $.ajax({
            url: u,
            method: "post",
            data: $(f).serialize(),
            success: function (data) {
                load(loade);
                if (!data.reponse) {
                    swal({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    swal({
                        title: data.msg,
                        icon: 'success'
                    })
                }

            },
        });

    }

</script>
@endsection
