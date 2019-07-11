<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadService;
class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        //var_dump($request->all());exit;
        $uploadService = new UploadService($file, config('admin.uploads'));

        try {
            $result = $uploadService->upload();

            return response()->json($result);

//            if($result['status'] == 0){
//                return response()->json($result);
//            }

//            if(FileModel::create($result['data'])){
//                return response()->json($result);
//            } else {
//                throw new Exception("文件记录失败...");
//            }
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
