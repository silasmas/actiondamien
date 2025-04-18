@extends('layouts.adminTemplate', ['titre' => 'Gestion newsletter'])
@section('autres_style')
    <link href="{{ asset('assets/admin/css/dataTables/datatables.min.cs') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOM</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($newsletter as $i)
                                <tr class="gradeX">
                                    <td>{{ $loop->index }}</td>
                                    <td>{{ $i->nom }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td class="center">{{ \Carbon\Carbon::parse($i->created_at)->isoFormat('LLL') }}</td>

                                @empty
                            @endforelse


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>NOM</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('autres-script')
    <script src="{{ asset('assets/admin/js/dataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                language: {
                    processing: "Traitement en cours...",
                    search: "Rechercher&nbsp;:",
                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                },
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'NewsLetter'
                    },
                    {
                        extend: 'pdf',
                        title: 'NewsLetter'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });


        });
    </script>
@endsection
