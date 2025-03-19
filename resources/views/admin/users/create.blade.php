@extends('admin.Layout.app')
@section('title','Ajouter un Utilisateur')
@section('mini title','Ajouter un Utilisateur')
@section('adminContent')
<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" class="w-full flex flex-col justify-center items-center">
    @csrf
    <table class="r-gap-3">
        <tr>
            <td class="text-end"><label>Nom :</label></td>
            <td><input type="text" name="nom" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Prenom :</label></td>
            <td><input type="text" name="prenom" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Adresse :</label></td>
            <td><input type="text" name="adresse" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Ville :</label></td>
            <td><input type="text" name="ville" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Email :</label></td>
            <td><input type="text" name="email" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Telephone :</label></td>
            <td><input type="text" name="tel" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Password :</label></td>
            <td><input type="text" name="password" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td class="text-end"><label>Confirm Password :</label></td>
            <td><input type="text" name="password_confirmation" class="border rounded m-2"></td>
        </tr>
        <tr>
            <td colspan="2"  class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded cursor-pointer">Ajouter</button>
                <a href="{{route('users.index')}}"><button type="button" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded cursor-pointer ">Annuler</button></a>
            </td>
        </tr>
    </table>
</form>
@endsection