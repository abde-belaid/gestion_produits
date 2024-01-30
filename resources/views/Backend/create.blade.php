@extends('Master.layouts')
@section('content')
    <div class="conatiner d-flex justify-content-center m-2 flex-column">
        <fieldset class="w-75 align-self-center border border-3 rounded-3 p-3 login border-warning">

            <a href="{{ route('dash') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i></a>
            <legend class="text-decoration-underline text-warning text-center mb-5">Nouveau Produit</legend>
            <div class="row">
                <div class="col-md-5">
                    <img src="https://cdn.pixabay.com/photo/2012/04/16/11/34/shopping-35594_1280.png" class="w-100"
                        alt="">
                </div>
                <div class="col-md-1">
                    <div class="col-md-1">
                        <span class="vertical-line2 w-100"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <form action="{{ route('add') }}" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="m-1"><input type="text" class="form-control" name="reference"
                                placeholder="Reference" value="{{old('reference')}}">
                        </div>
                        <span class="text-danger">
                            @error('reference')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-1"><input value="{{old('libelle')}}" type="text" class="form-control" name="libelle" placeholder="Libellé">
                        </div>
                        <span class="text-danger">
                            @error('libelle')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="m-1"><input value="{{old('prix')}}" type="number" class="form-control" name="prix" placeholder="Prix">
                        </div>
                        <span class="text-danger">
                            @error('prix')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-1"><input value="{{old('quantite')}}" type="number" class="form-control" name="quantite"
                                placeholder="Quantite">
                        </div>
                        <span class="text-danger">
                            @error('quantite')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-1">
                            <textarea class="textarea"  class="" name="description" placeholder="description" id="" cols="50"
                                rows="5">{{old('description')}}</textarea>
                        </div>
                        <span class="text-danger">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-1">
                            <select class="form-select"  name="type" id="">
                                <option value="">..... selectionner le type .....</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="text-danger">
                            @error('type')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-1">
                            <input type="file" class="form-control bg-info" name="image">
                        </div>
                        <span class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="m-2">

                            <button class="btn btn-success w-50 fs-5">Ajouter</button>
                        </div>
                    </form>
                </div>

            </div>
        </fieldset>

    </div>
@endsection
