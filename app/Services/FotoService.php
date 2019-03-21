<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Produto;

class FotoService{

    public function isValidPhoto($foto){
        $photoSize = $foto->getClientSize();
        $photoType = $foto->getMimeType();

        return ($photoType == 'image/jpeg' || $photoType == 'image/png') && $photoSize < 204800;
    }

    public function storePhoto($foto){
        
        $name = uniqid(date('HisYmd'));
        $extension = $foto->extension();
        $encodedName = "{$name}.{$extension}";

        $foto->storeAs('products',$encodedName);
        return $encodedName;        
    }

    public function deletePhoto($productId){
        $produto = Produto::find($productId);
        if($produto != null && $produto->caminhoFoto != null){
            $caminhoFoto = $produto->caminhoFoto;
            Storage::delete('products/'.$caminhoFoto);
        }
    }

    public function updatePhoto($productId,$foto){
        
    }

}