<?php

namespace App\Http\Controllers;

use App\Souvenir;
use App\Supplier;
use App\Http\Controllers\AuthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    public function index()
    {

        AuthController::IsAdmin();
        $suppliers = Supplier::all();
        return view('Suppliers.index', compact('suppliers'));
    }

    public function Create()
    {
        AuthController::IsAdmin();
        return view('Suppliers.Create');
    }

    public function CreatePost(Request $request)
    {

        AuthController::IsAdmin();
        $validator = Validator::make($request->all(), [
            'EmailAddress' => 'required|email|max:100',
            'Address' => 'max:100',
            'MobilePhoneNumber' => 'required|max:30',
            'LastName' => 'required|max:50',
            'FirstName' => 'required|max:50',
             'HomePhoneNumber' => 'max:30',
         'WorkPhoneNumber' => 'max:30'
        ]);


        if ($validator->fails()) {
            return redirect('Suppliers/Create')
                ->withErrors($validator)
                ->withInput();
        }
        $supplier = new Supplier([
            'EmailAddress' => $_POST['EmailAddress'], 'Address' => $_POST['Address']
            , 'MobilePhoneNumber' => $_POST['MobilePhoneNumber'], 'LastName' => $_POST['LastName'], 'FirstName' => $_POST['FirstName'],
            'HomePhoneNumber' => $_POST['HomePhoneNumber'], 'WorkPhoneNumber' => $_POST['WorkPhoneNumber']
        ]);
        $supplier->save();
        return redirect('Suppliers');
    }

    public function Details($id)
    {
        AuthController::IsAdmin();
        $supplier = DB::table('suppliers')->where('id', $id)->first();
        $souvenirs = Souvenir::all()->where('supplier_id', $id);
        //   $supplier=Supplier:: ->where('id',$id) ->first();
//dd($supplier);

        return view('Suppliers.Details', compact('supplier','souvenirs'));
    }
}
