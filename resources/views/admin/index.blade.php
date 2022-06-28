@extends('base')

@section('pageHeader')
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <div class="mt-5">
                <h4 class="card-title float-left mt-2">Tous les utilisateur</h4>
                <a href="{{ route('addUser') }}" class="btn btn-primary float-right veiwbutton">Ajouter un utilisateur</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contenu')
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body booking_card">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="datatable table table-stripped table table-hover table-center mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        {{-- <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 79.1833px;" aria-sort="ascending" aria-label="Booking ID: activate to sort column descending">Booking ID</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80.5667px;" aria-label="Room Type: activate to sort column ascending">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 58.05px;" aria-label="Date: activate to sort column ascending">Nom</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.4833px;" aria-label="Time: activate to sort column ascending">email</th>
                                        <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 55.0333px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-right">
                                            <a  href="{{ route('editUser', ['user' => $user->id]) }}"> <i class="fas fa-pencil-alt m-r-5"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form action="" method="post">
                                                @csrf
                                                <a  href="{{ route('listUser', ['user' => $user->id]) }}" onclick="setUser('{{$user->id}}', '{{$user->name}}');" data-toggle="modal" data-target="#delete_asset" style="color: red";> <i class="fas fa-trash-alt m-r-5"> </i> </a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body text-center"> <img src="{{ asset('img/sent.png') }}" alt="" width="50" height="46">
                                        <p class="delete_class">Etes-vous sûrs de vouloir supprimer <strong id="userName"> </strong>?</p>
                                        <div class="m-t-20">
                                            <form action="" method="post">
                                                @csrf
                                                <a href="#" class="btn btn-white" data-dismiss="modal">Annuler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="hidden" name="userId" id="userId">
                                                <button class="btn btn-danger">Supprimer</button>
                                            </form>
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
@endsection

@section('scripts')
    <script>
        function setUser(id, name){
            $("#userName").html(name);
            $("#userId").val(id);
        }
    </script>
@endsection
