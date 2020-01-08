@extends('layouts.app')
@section('content')
<div class="container produits">
    <div class="row">
        @include('inc.leftPicture')
        <div class="col-md-8">
            <form method="POST" action="{{Route('marche.store') }}" enctype="multipart/form-data" onSubmit="clearField()";>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" name="title" class="form-control" id="inputTitre" aria-describedby="titreHelp" placeholder="moto">
                    <small id="titreHelp" class="form-text text-muted">ici vous precisez le nom de l'article que vous voulez vendre</small>
                </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 form-group">
                            <label for="inputQuantite">Quantite</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputQuantite" placeholder="3">
                            <small id="titreHelp" class="form-text text-muted">ici vous precisez la quantite de l'article</small>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 form-group">
                            <label for="inputPrix">Prix (Unitaire) FCFA</label>
                            <input type="number" name="prix" class="form-control" id="exampleInputPrix" placeholder="50000">
                            <small id="inputPrix" class="form-text text-muted">ici vous precisez le prix de l'article</small>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="noir, 300*600 px,... ">
                    <small id="emailHelp" class="form-text text-muted">decrivez birèvement votre artice couleur, type, taille...</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="Ousmane">
                    <small id="emailHelp" class="form-text text-muted">Donnez votre nom</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Numero 1</label>
                    <input type="number" name="number1" class="form-control" id="exampleInputPassword1" placeholder="Numero 1">
                    <small id="emailHelp" class="form-text text-muted">votre numéro de téléphone</small>
                </div>
                <div class="form-group mb-5">
                    <input type="file" name="images" class="" id="">
                </div>
                <div class="form-group">
                    <div class="clearfix" style="">
                        <button type="submit" class="btn btn-sm btn-success">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    function clearField() {
        if(document.getElementById) {
            document.chatform.message.value = "";
        }
    }
</script>
