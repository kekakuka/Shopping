<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class MemberSouvenirsController extends Controller
{
    public function index(Request $request)
    {
        $route = \Route::current();
        $selectedCateId = $route->parameter('id') ?: '0';
        $pageIndex = $route->parameter('pageIndex') ?: '1';

        $categories = Category::all();
        $souvenirs = DB::table('souvenirs')
            ->join('suppliers', 'supplier_id', '=', 'suppliers.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('souvenirs.*', 'categories.Name as categoryName', 'suppliers.FirstName', 'suppliers.LastName')
            ->get();
        if ($selectedCateId != '0') {
            $souvenirs = $souvenirs->where('category_id', '=', $selectedCateId);
        }
        $searchName='';
        $searchMaxPrice='';
        $searchMinPrice='';
        if (isset($_GET['searchName'])&&($_GET['searchName']!='')) {
            $searchName = $_GET['searchName'];
            $newSouvenirs=new Collection();
            foreach ($souvenirs as $souvenir) {
                if (stripos($souvenir->Name,$searchName)){
                    $newSouvenirs->push($souvenir);
                }
            }
            $souvenirs=$newSouvenirs;

        }
        if (isset($_GET['searchMinPrice'])&&($_GET['searchMinPrice']!='')) {
            $searchMinPrice = $_GET['searchMinPrice'];
            $newSouvenirs=new Collection();
            foreach ($souvenirs as $souvenir) {
                if ($souvenir->Price>$searchMinPrice){
                    $newSouvenirs->push($souvenir);
                }
            }
            $souvenirs=$newSouvenirs;
        }
        if (isset($_GET['searchMaxPrice'])&&($_GET['searchMaxPrice']!='')) {
            $searchMaxPrice = $_GET['searchMaxPrice'];
            $newSouvenirs=new Collection();
            foreach ($souvenirs as $souvenir) {
                if ($souvenir->Price<$searchMaxPrice){
                    $newSouvenirs->push($souvenir);
                }
            }
            $souvenirs=$newSouvenirs;
        }

        $souvenirs = new PageData($souvenirs, $pageIndex, 6);

        $data = [
            'categories' => $categories,
            'souvenirs' => $souvenirs,
            'selectedCateId' => $selectedCateId,
            'selectedRow' => '',
            'count' => 0,
            'pageIndex' => $pageIndex,
            'prevDisabled' => !$souvenirs->HasPreviousPage() ? 'disabled' : '',
            'nextDisabled' => !$souvenirs->HasMorePage() ? 'disabled' : '',
            'pageDisabled' => '',
            'searchName'=>$searchName,
         'searchMinPrice'=>$searchMinPrice,
         'searchMaxPrice'=>$searchMaxPrice

        ];

        return view('MemberSouvenirs.index', compact('data'));
    }

    public function Details($id)
    {
        $souvenir = DB::table('souvenirs')->where('souvenirs.id', $id)
            ->join('suppliers', 'supplier_id', '=', 'suppliers.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('souvenirs.*', 'categories.Name as categoryName', 'suppliers.FirstName', 'suppliers.LastName')
            ->first();
        return view('MemberSouvenirs.Details', compact('souvenir'));
    }

}

