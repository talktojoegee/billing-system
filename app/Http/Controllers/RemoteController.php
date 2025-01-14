<?php

namespace App\Http\Controllers;

use App\Models\KCentralDB;
use Illuminate\Http\Request;

class RemoteController extends Controller
{
    public function __construct(){
        $this->central = new KCentralDB();
    }


    public function makeCalls(){
        $report = $this->central->get();

        return response()->json(["data"=>$report]);
    }

    public function loadContentByLgaName($name){
        $report = $this->central->where('LGA', $name)/*->take(50)*/->get();

        return  response()->json(["data"=>$report]);
    }
    public function loadAllContents(){
        $report = $this->central->get();

        return  response()->json(["data"=>$report]);
    }
}


/*
 * Serial #
 * LGA
 * 0. How many record is on GIS server
 * 0.0 How many records is on the billing app
 * 1. Date of last synchronization
 */
