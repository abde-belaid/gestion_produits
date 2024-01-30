@extends('Master.layouts')
@section('content')
    <div class="container">


        <div class="row m-5 ">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 border border-2 border-info p-2 rounded-2">

                <div class="row p-2">
                    <div class="d-flex justify-content-center m-3">


                        <h5 class="text-primary text-decoration-underline">les informations de produit : <strong
                                class="text-success">{{ $produit->refpdt }}</strong> </h5>
                    </div>
                    <div class="col-md-6 d-flex my-1">
                        {{-- si j'utilise les donnees reel --}}

                        {{-- <img class="w-100 h-100 rounded-5 align-self-center" src="../images/{{ $produit->image }}" alt=""> --}}
                        
                        {{-- si j'utilise les donnees de la fonction faker --}}

                        <img class="w-100 h-100 rounded-5 align-self-center" src="{{ $produit->image }}" alt="">
                    </div>

                    <div class=" col-md-6 d-flex">
                        <table class="table table-bordered w-100 align-self-center h-100 m-1">
                            <tr>
                                <td><strong>Reference : </strong></td>
                                <td><strong>{{ $produit->refpdt }}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Libellé Produit : </strong></td>
                                <td><strong>{{ $produit->libpdt }}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Prix Produit : </strong></td>
                                <td><strong>{{ $produit->prix }}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Quantité Produit : </strong></td>
                                <td><strong>{{ $produit->Qnt }}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Description : </strong></td>
                                <td><strong>{{ $produit->description }}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Type Produit : </strong></td>
                                <td><strong>{{ $produit->type }}</strong></td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center m-3">

                        <a href="{{ route('dash') }}" class="btn btn-primary w-75">Retour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>

    </div>
@endsection
