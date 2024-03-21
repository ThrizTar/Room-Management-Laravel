<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    // create index
    public function index(){
        $data['roomtypes'] = Roomtype::orderBy('Information_No')->paginate(10);
        return view('roomtypes.indexroomtype', $data);
    }

    // create resource
    public function create(){
        return view('roomtypes.createtype');
    }

    public function show(Roomtype $roomtype){
        return view('roomtypes.viewroomtype', compact('roomtype'));
    }

    public function edit(Roomtype $roomtype){
        return view('roomtypes.editroomtype', compact('roomtype'));
    }

    // store resource
    public function store(Request $request){
        $request->validate([
            'Information_No' => 'required|unique:roomtypes|max:255',
            'RoomType' => 'required|unique:roomtypes|max:255',
            'RoomCap' => 'required|integer|min:1',
            'BedType' => 'required',
            'Size' => 'required|integer|min:1',
            'Facility_Set' => 'required'
        ]);

        $roomtype = new Roomtype;
        $roomtype->Information_No = $request ->Information_No;
        $roomtype->RoomType = $request ->RoomType;
        $roomtype->RoomCap = $request ->RoomCap;
        $roomtype->BedType = $request ->BedType;
        $roomtype->Size = $request ->Size;
        $roomtype->Facility_Set = $request ->Facility_Set;
        $roomtype->save();
        return redirect()->route('roomtypes.index')->with('success', 'Room has been created Successfully');
    }

    public function update(Request $request, $Information_No){
        $request -> validate([
            'Information_No' => 'required|unique:roomtypes',
            'RoomType' => 'required|unique:roomtypes',
            'RoomCap' => 'required|integer|min:1',
            'BedType' => 'required',
            'Size' => 'required|integer|min:1',
            'Facility_Set' => 'required'
        ]);
        $roomtype = Roomtype::find($Information_No);
        $roomtype->Information_No = $request ->Information_No;
        $roomtype->RoomType = $request ->RoomType;
        $roomtype->RoomCap = $request ->RoomCap;
        $roomtype->BedType = $request ->BedType;
        $roomtype->Size = $request ->Size;
        $roomtype->Facility_Set = $request ->Facility_Set;
        $roomtype->save();
        return redirect()->route('roomtypes.index')->with('success', 'Room has been update Successfully');
    }

    public function destroy(Roomtype $roomtype){
        $roomtype->delete();
        return redirect()->route('roomtypes.index')->with('success', 'Room has been deleted Successfully');
    }


}
