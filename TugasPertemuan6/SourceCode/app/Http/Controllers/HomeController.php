<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
public function index()
    {
        $data = [
            "title" => "Matkul",
        ];
        $skill[] = array("course" => "Matematika", "type" => "Diskrit", "rate" => 4);
        $skill[] = array("course" => "Matematika", "type" => "Aljabar Linear", "rate" => 3);
        $skill[] = array("course" => "Basis Data", "type" => "DDL", "rate" => 2);
        $skill[] = array("course" => "Bhs Inggris", "type" => "Speaker", "rate" => 1);
        $data['skill'] = $skill;
        return view("modules.home.home", ["data" => $data]);
    }
}
