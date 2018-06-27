<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;


class PhonebookController extends Controller
{

    public function getIndex()
    {
        $records = [];
        $records = Phonebook::all()->toArray();

        return view('phonebook/index', compact('records'));
    }


    public function getAdd()
    {
        return view('phonebook/add');
    }

    public function postAdd(Request $request)
    {
        $fio = $request->fio;
        $phone = $request->phone;

        if (!empty($fio) && !empty($phone)) {
            $phonebook = new Phonebook;
            $phonebook->fio = $fio;
            $phonebook->phone = $phone;
            $phonebook->save();
        }

        return redirect('/');
    }

    public function getEdit($id = 0)
    {
        $record = Phonebook::find((int)$id)->toArray();

        return view('phonebook/edit', compact('record'));
    }

    public function postEdit(Request $request)
    {
        $id = (int)$request->id;
        $fio = $request->fio;
        $phone = $request->phone;

        if (!empty($id) && !empty($fio) && !empty($phone)) {

            $phonebook = Phonebook::find($id);
            $phonebook->fio = $fio;
            $phonebook->phone = $phone;
            $phonebook->save();
        }

        return redirect('/');
    }


}
