<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\XmlToJson;
use App\Estate;

class EstateController extends Controller {
	public function test() {
		$file = new XmlToJson('ablatz.xml', array('element' => 'Listing'));	
		while ($xml = $file->read()) {
			$obj = (array)(new \SimpleXMLElement($xml, LIBXML_NOERROR, false, '', ''));
			$estate = New \App\Estate();
			// print_r($obj['ListPrice']); return;z
			$columns = $estate -> getTableColumns();
			foreach ($columns as $key) {
				if ($key == 'id') continue;
				else if ($key == 'created_at') continue;
				else if ($key == 'updated_at') continue;
				if (isset($obj[$key])) {
					if(gettype($obj[$key]) == "object") $estate[$key] = json_encode($obj[$key]);
					else $estate[$key] = $obj[$key];
				} /*else {
					
					$estate[$key] = "";
				}*/
			}
			$estate->save();
		}
	}

	public function test2() {
		$estates = DB::table('estates')->paginate(30);
		$address = $estates[0]->Address;
		// print(gettype($address));
		// print_r($address->{"commons:City"});
		// print_r(gettype($estates[0]));
		/*$ids = collect($estates[0])->pluck('address');
		print_r($ids);*/
       	return view('test.test',['estates' => $estates]);
	}
	
}
