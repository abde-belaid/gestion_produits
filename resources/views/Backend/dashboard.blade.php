{{-- @dd(session('produits')) --}}
@extends('Master.layouts')
@section('content')
    <div class="container d-flex justify-content-center m-5 p-5 flex-column">
        <a href="{{ route('ajouter') }}" class="btn btn-success  align-self-end m-2 fs-4">Ajouter <i
                class="fa fa-solid fa-plus fs-bold fs-4"></i></a>
        <table class="table table-stripped table-hover table-responsive table-bordered">
            <thead >
                <tr >
                    <th class="bg-primary text-light">Reference</th>
                    <th class="bg-primary text-light">Libellé</th>
                    <th class="bg-primary text-light">Prix</th>
                    <th class="bg-primary text-light">Quantité</th>
                    <th class="bg-primary text-light">Description</th>
                    <th class="bg-primary text-light">Type</th>
                    <th class="bg-primary text-light">Image</th>
                    <th class="bg-primary text-light">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->refpdt }}</td>
                        <td>{{ $produit->libpdt }}</td>
                        <td>{{ $produit->prix }} Dhs</td>
                        <td>{{ $produit->Qnt }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->type }}</td>
                       
                        {{-- si j'utilise les donnees de la fonction faker --}}
                        <td><img class="w-25 rounded-circle" src="{{ $produit->image }}" alt=""></td>
                       
                        {{-- si j'utilise les donnees reel --}}

                        {{-- <td><img class="w-25 rounded-circle" src="images/{{ $produit->image }}" alt=""></td> --}}

                        <td>
                            <a href="{{ route('detail', $produit->refpdt) }}" class="m-1 text-primary"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('delete', $produit->refpdt) }}" class="m-1 text-danger"><i
                                    class="fa-solid fa-square-xmark"></i></a>
                            <a href="" class="m-1 text-success"><i class="fa-solid fa-arrow-rotate-right"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $produits->links() }}
    </div>
@endsection
