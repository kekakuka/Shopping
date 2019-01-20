<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Souvenir;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use MongoDB\BSON\Timestamp;

class SouvenirController extends Controller
{
    public function index()
    {
        AuthController::IsAdmin();
        if (isset($_GET['searchName'])) $searchName = $_GET['searchName'];
        else  $searchName = '';
        $searchedName = $searchName;
        $souvenirs = DB::table('souvenirs')->where('souvenirs.Name', 'LIKE', '%' . $searchName . '%')
            ->join('suppliers', 'supplier_id', '=', 'suppliers.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('souvenirs.*', 'categories.Name as categoryName', 'suppliers.FirstName', 'suppliers.LastName')
            ->get();


        return view('Souvenirs.index', compact('souvenirs', 'searchedName'));
    }

    public function Create()
    {
        AuthController::IsAdmin();
        $categories = Category::all();
        $suppliers=Supplier::all();
        return view('Souvenirs.Create',compact('categories', 'suppliers'));
    }

    public function CreatePost(Request $request)
    {


        AuthController::IsAdmin();
        $time=time();

        $validator = Validator::make($request->all(), [
            'Description' => 'max:100',
            'Name' => 'required|max:50',
            'supplier_id'=>'required',
            'Price'=> 'required|numeric|max:999999|min:1'
        ]);


        if ($validator->fails()) {

            return redirect('Souvenirs/Create')
                ->withErrors($validator)
                ->withInput();
        }

        if ($_FILES['_files']['error'] > 0)
        {
            echo 'Error: ' . $_FILES['_files']['error'] . '<br />';
        }
        elseif (isset($_FILES['_files']))
        {
            move_uploaded_file($_FILES['_files']['tmp_name'], 'public/images/SouvenirImages/' . $time. $_FILES['_files']['name']); //Save the file as the supplied name
        }

        $souvenir = new Souvenir([
            'Description' => $_POST['Description']
            , 'Name' => $_POST['Name']
            , 'supplier_id'=>(int)($_POST['supplier_id'])
            , 'category_id'=>(int)($_POST['category_id'])
            , 'Price'=>$_POST['Price']
            , 'PathOfFile'=>'/public/images/SouvenirImages/' . $time. $_FILES['_files']['name']
        ]);


        $souvenir->save();
        return redirect('Souvenirs');
    }

    public function Delete($id)
    {
        AuthController::IsAdmin();
        $souvenir = Souvenir::find($id);



        return view('Souvenirs.Delete', compact('souvenir'));
    }

    public function DeletePost($id)
    {

        $orders=Order::all();
        foreach ($orders as $order){
            foreach ($order->order_souvenirs as $order_souvenir){

                if($order_souvenir->souvenir_id==$id){
                    $errorDelete='The souvenir is in some orders.Please delete these orders first';
                    $souvenir = Souvenir::find($id);
                    return   view('Souvenirs.Delete', compact('souvenir','errorDelete'));
                }

            }

        }

       Souvenir::destroy($id);

        return redirect()->route('SouvenirIndex');
    }
    public function Details($id)
    {
        AuthController::IsAdmin();
        $souvenir = DB::table('souvenirs')->where('souvenirs.id', $id)
            ->join('suppliers', 'supplier_id', '=', 'suppliers.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('souvenirs.*', 'categories.Name as categoryName', 'suppliers.FirstName', 'suppliers.LastName')
            ->first();



        return view('Souvenirs.Details', compact('souvenir'));
    }
}
