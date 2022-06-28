@extends('base')

@section('pageHeader')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h3 class="page-title mt-3">Ajouter utilisateur</h3>
        </div>
    </div>
</div>
@endsection

@section('contenu')
<div class="card flex-fill">
    <div class="card-header">
        <h4 class="card-title">Basic Form</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-6 col-form-label">Nom</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-6 col-form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-lg-2 col-form-label">Mot de passe</label>
                <div class="col-lg-10">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection
