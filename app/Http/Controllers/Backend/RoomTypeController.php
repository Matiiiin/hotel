<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\BookArea;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Room;

class RoomTypeController extends Controller
{
    public function RoomTypeList(){

        $allData = RoomType::orderBy('id','desc')->get();
        return view('backend.allroom.roomtype.view_roomtype',compact('allData'));

    }// End Method

    public function AddRoomType(){
        return view('backend.allroom.roomtype.add_roomtype');
    }// End Method

    public function RoomTypeStore(Request $request){
        $validator = Validator::make($request->all(), [
            'roomtype_name' => 'required',
//            'room_name'     => 'required',
            'total_adult'   => 'required',
            'total_child'   => 'required',
            'image'         => 'required',
            'multi_img.*'   => 'nullable',
            'price'         => 'required',
            'size'          => 'required',
            'view'          => 'required',
            'bed_style'     => 'required',
            'discount'      => 'nullable',
            'short_desc'    => 'required',
            'description'   => 'required',
            'status'        => 'required',
        ]);
//        dd(gettype());

        $roomtype_id =  RoomType::insertGetId([
            'name' => $request->roomtype_name,
            'created_at' => Carbon::now(),
        ]);
        $image = $request->file('image');
        if ($image){
            $imageName = hexdec(uniqid()) . 'Backend'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(550,850)->save('upload/roomimg/'.$imageName);
        }
        $room = Room::create([
            'roomtype_id' => $roomtype_id,                    // Room type ID
            'name' => $request->roomtype_name,                    // Room name
            'total_adult' => $request->total_adult,           // Total adults
            'total_child' => $request->total_child,           // Total children
            'price' => $request->price,                       // Price
            'size' => $request->size,                         // Room size
            'view' => $request->view,                         // Room view
            'bed_style' => $request->bed_style,               // Bed style (single, double, etc.)
            'discount' => $request->discount,                 // Discount
            'short_desc' => $request->short_desc,             // Short description
            'description' => $request->description,           // Detailed description
            'status' => $request->has('status') ? 1 : 0,      // Status (1 for active, 0 for inactive)
            'image' => $imageName,                           // Main image file name (you'll need to handle the file upload)
            'room_capacity' => $request->total_adult + $request->total_child,
            'created_at' => now(),                            // Timestamp for created at
            'updated_at' => now(),                            // Timestamp for updated at
        ]);
//        dd($room);
        if (!empty($request->file('multi_img'))){
            foreach ($request->file('multi_img') as $image){
                $multiimageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/roomimg/multi_img'), $multiimageName);
                $multiimage = new MultiImage();
                $multiimage->rooms_id = $room->id;
                $multiimage->multi_img = $multiimageName;
                $multiimage->save();
            }
        }



        $notification = array(
            'message' => 'با موفقیت اضافه شد',
            'alert-type' => 'success'
        );

        return redirect()->route('room.type.list')->with($notification);

    }// End Method


}
