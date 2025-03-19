@extends('admin.Layout.app')
@section('title','Modifier un sous Famille')
@section('mini title','Modifier un sous Famille')
@section('adminContent')
<form action="{{ route('sous-familles.update',$sousFamille) }}" method="post" enctype="multipart/form-data" class="w-full flex flex-col justify-center items-center">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label for="libelle">libelle :</label></td>
            <td><input type="text" name="libelle" class="border rounded m-2" value="{{$sousFamille->libelle}}"></td>
        </tr>
        <tr>
            <td><label for="famille_id">famille :</label></td>
            <td>
                <select name="famille_id" class="mx-2 w-[calc(100%-calc(0.2rem*5))] border border-1 rounded outline-none">
                    @php
                        $familles = \App\Models\Famille::all();
                        foreach($familles as $famille){
                            echo "<option value=\"$famille->id\" " . ($famille->id == $sousFamille->famille_id ? 'selected' : '') . ">$famille->libelle</option>";
                        }
    
                    @endphp
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="image">image :</label></td>
            <td>
                <div class='relative'>
                    <input type="file" name='image' id="file-upload-button" class="absolute inset-0 opacity-0" onchange="previewImage()"/>
                    <button for="file-upload-button" class="px-2 py-2 bg-blue-500 w-[calc(100%-calc(0.2rem*5))] text-white font-semibold rounded hover:bg-blue-600 cursor-pointer m-2">
                        Ajouter un Image
                    </button>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan='2' class='py-2'>
                <div class="flex justify-center">
                    <img id="image-preview" src="{{ asset($sousFamille->image) }}" alt="Image preview" class="max-w-[200px] rounded-lg shadow-lg" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-center pt-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded cursor-pointer">Modifier</button>
                <a href="{{route('sous-familles.index')}}"><button type="button" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded cursor-pointer ">Annuler</button></a>
            </td>
        </tr>
    </table>
</form>
<script>
    function previewImage() {
        const fileInput = document.getElementById('file-upload-button');
        const imagePreview = document.getElementById('image-preview');
        
        const file = fileInput.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.src = e.target.result;  // Set the src of the image preview
            };
            
            reader.readAsDataURL(file);  // Read the file as a data URL
        }
    }
</script>
@endsection