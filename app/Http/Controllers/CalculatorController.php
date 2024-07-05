<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shuzokuti;
use App\Models\Move;
use App\Models\Type;
use App\Http\Requests\CalculatorRequest;
use App\Services\TestService;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $table_name="shuzokutis";
        $column_info=["No.","ポケン","HP","攻撃","防御","特攻","特防","素早","合計"];
        $datalist=["No." => "","ポケモン"=>"Type","HP"=>"","攻撃"=>"","防御"=>"","特攻"=>"","特防"=>"","素早"=>"","合計"=>""];

        if (isset($request->keyword1)) {
            $shuzokuti1 = Shuzokuti::where('ポケモン', $request->keyword1) -> first();
            }
            else {
            $shuzokuti1 = Shuzokuti::where('ポケモン', 'カイリュー') -> first(); 
        }

        if (isset($request->keyword2)) {
            $shuzokuti2 = Shuzokuti::where('ポケモン', $request->keyword2) -> first();
            }
        else {
            $shuzokuti2 = Shuzokuti::where('ポケモン','カイリュー')->first();
        }

        if (isset($request->keyword3)) {
            $move = Move::where('名前', $request->keyword3) -> first();
            }
        else {
            $move = Move::where('名前','しんそく')->first();
        }

        if ($move->分類='物理') {
            $data2=$shuzokuti1->攻撃;
            $data3=$shuzokuti2->防御;
            }
        else {
            $data2=$shuzokuti1->特攻;
            $data3=$shuzokuti2->特防;
        }

        $nature = $request->nature;
        $data1=$move->威力;
        $data4=$request->vac;
        $data5=$request->effortac;
        $data6=$request->vbd;
        $data7=$request->effortbd;

        $realac=(($data2*2+$data4+$data5/4)/2+5)*$nature;
        $realbd=($data3*2+$data6+$data7/4)/2+5;
        $damage = (floor(22*$data1*$realac/$realbd));
        $max = (floor($damage/50+2));
        $min = (floor($max*0.85));

        return view('calculator.index', [
            'shuzokuti1' => $shuzokuti1,
            'shuzokuti2' => $shuzokuti2,
            'move' => $move,
            'keyword1' => $request->keyword1,
            'keyword2' => $request->keyword2,
            'keyword3' => $request->keyword3,
            'vac' => $request->vac,
            'effortac' => $request->effortac,
            'vbd' => $request->vbd,
            'effortbd' => $request->effortbd,
            'max' => $max,
            'min' => $min
        ]);
    }
}
