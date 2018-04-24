<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*use Prewk\XmlStringStreamer;
use Prewk\XmlStringStreamer\Stream;
use Prewk\XmlStringStreamer\Parser;*/

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = DB::table('estates')->paginate(30);
        return view('homepage',['estates' => $estates]);
    }

    public function saved() {
        return view('saved');
    }

    public function approved() {
        return view('approved');
    }

    public function application() {
        return view('application');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function autocomplete(Request $request)
    {
        $term=$request->term;

        $data = \App\Estate::where('Address','LIKE','%'.$term.'%')
        ->take(10)
        ->select('Address')
        ->get();
        $result=array();
        // print_r($data);
        foreach ($data as $key => $value){
            $result[] = 
            ['value' =>
                json_decode(json_decode($value)->Address)->{"commons:FullStreetAddress"}
                .json_decode(json_decode($value)->Address)->{"commons:City"}
                .json_decode(json_decode($value)->Address)->{"commons:StateOrProvince"}
                .json_decode(json_decode($value)->Address)->{"commons:Country"}
            ];
        }
        return response()->json($result);
    }

    public function search(Request $request)
    {
        $term = $request->get("Address");
        $data = \App\Estate::where('Address','LIKE','%'.$term.'%')->paginate(30);
        return view('homepage',['estates' => $data]);
    }
    
    public function increasesort(Request $request)
    {
        
    }

    public function detail(Request $request)
    {
        $id = $request->get("ID");
        $value = \App\Estate::where('id', $id)->get()->first();
        /*$estate['address'] = [
            ['address1' =>  
                            json_decode(json_decode($value)->Address)->{"commons:FullStreetAddress"}.
                            json_decode(json_decode($value)->Address)->{"commons:City"}],
            ['address2' =>  
                            json_decode(json_decode($value)->Address)->{"commons:StateOrProvince"}.
                            json_decode(json_decode($value)->Address)->{"commons:Country"}],
            ['description' => json_decode($value)->ListingDescription]
        ];*/
        return response()->json($value);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
