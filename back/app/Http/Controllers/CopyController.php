<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCopiesBook;
use App\Services\CopyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyController extends Controller{
    public function create(CreateCopiesBook $request, $id){
        $copyService = new CopyService();

        return $copyService->createCopy($request->all(), $id);
    }
    public function list(){
        $copyService = new CopyService();

        return $copyService->listCopies();
    }
    public function update(Request $request, $id){
        $copyService = new CopyService();

        return $copyService->updateCopy($request->all(), $id);

    }
    public function remove($id){
        $copyService = new CopyService();

        return $copyService->removeCopy($id);
    }
}
