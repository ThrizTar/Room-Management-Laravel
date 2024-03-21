<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Create index
    public function index(){
        $data['rooms'] = Room::orderBy('Room_no')->paginate(10);
        return view('rooms.indexroom', $data);
    }

    // Create resource
    public function create(){
        return view('rooms.createroom');
    }

    public function store(Request $request){
        $request->validate([
            'Room_no' => 'required|unique:rooms|max:255',
            'Room_Informations' => 'required|exists:roomtypes,Information_No|max:255',
            'Price' => 'required|integer|min:1',
        ]);

        $room = new Room;
        $room->Room_no = $request ->Room_no;
        $room->Room_Informations = $request ->Room_Informations;
        $room->Price = $request ->Price;
        $room->save();
        return redirect()->route('rooms.index')->with('success', 'Room has been created Successfully');
    }

    public function edit(Room $room){
        return view('rooms.editroom', compact('room'));
    }

    public function show(Room $room){
        return view('rooms.viewroom', compact('room'));
    }

    public function update(Request $request, $Room_no){
        $request -> validate([
            'Room_no' => '',
            'Price' => 'required|integer|min:1',
            'Room_Informations' => 'required'
        ]);
        $room = Room::find($Room_no);
        $room->Room_no = $request->Room_no;
        $room->Price = $request->Price;
        $room->Room_Informations = $request->Room_Informations;
        $room->save();
        return redirect()->route('rooms.index')->with('success', 'Room has been update Successfully');
    }
    public function destroy(Room $room){
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room has been deleted Successfully');
    }


}
