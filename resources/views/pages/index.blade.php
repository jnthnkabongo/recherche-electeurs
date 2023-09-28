@extends('layouts.entete-dash')

<div class="container mt-5">
    <div class="mt-5">

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold"></h1>

                <p class="col-md-8 fs-4">
                <form action="{{ route('recherche') }}" method="GET" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-group mt-3">
                            <label form="name">NUMERO NATIONAL</label>
                            <input type="number" class="form-control mt-3" name="numero_national" style="width:150px">
                            @error("numero_national")
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label form="name">NOM</label>
                            <input type="name" class="form-control mt-3" name="nom" >
                        </div>
                        <div class="form-group mt-3">
                            <label form="name">POSTNOM</label>
                            <input type="name" class="form-control mt-3" name="postnom" >

                        </div>
                        <div class="form-group mt-3">
                            <label form="name">PRENOM</label>
                            <input type="name" class="form-control mt-3" name="prenom">

                        </div>

                        <div class="form-group mt-3">
                            <button class="btn btn-primary">CHERCHER</button>
                        </div>
                </form>
                </p>

            </div>
        </div>
        <div class="">
            <table class="">
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">NUMERO NATIONAL</th>
                            <th scope="col">NOM</th>
                            <th scope="col">POSTNOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">SEXE</th>
                            <th scope="col">LIEU NAISSANCE</th>
                            <th scope="col">DATE DE NAISSANCE</th>
                            <th scope="col">NOM PERE</th>
                            <th scope="col">NOM MERE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($results && count($results) > 0 )
                            @foreach ($results as $duplicata )
                                <tr>
                                    <td>{{ $duplicata->id }}</td>
                                    <td>{{ $duplicata->numero_national }}</td>
                                    <td>{{ Str::upper($duplicata->nom) }}</td>
                                    <td>{{ Str::upper($duplicata->postnom) }}</td>
                                    <td>{{ Str::upper($duplicata->prenom) }}</td>
                                    <td>{{ Str::upper($duplicata->sexe) }}</td>
                                    <td>{{ Str::upper($duplicata->lieu_naissance) }}</td>
                                    <td>{{ $duplicata->date_naissance }}</td>
                                    <td>{{ Str::upper($duplicata->nom_pere) }}</td>
                                    <td>{{ Str::upper($duplicata->nom_mere) }}</td>

                                    <td>{{ Str::upper($duplicata->observation) }}</td>
                                    <td>{{ Str::upper($duplicata->demandeur) }}</td>
                                    <td>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                  </table>
            </table>
        </div>

    </div>
</div>

