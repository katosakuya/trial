@extends('layout')
@section('title','計算機')
@section('content')
<div id="calculator-index">
    <a href="{{route('dbcal.index')}}">
        <div>
            <img src="/img/9周年アイコン.png" alt="サンプル画像">
            <p>ドッカンバトル</p>
        </div>
    </a>
    <a href="{{route('tier')}}">tier作成</a>
    <br>
    <a href="{{route('create')}}">キャラクター新規作成</a>
    <!-- <a href="{{route('calculator.index')}}">
        <div>
            <img src="/img/pokemonSV.jpg" alt="サンプル画像">
            <p>ポケモン</p>
        </div>
    </a> -->
</div>
<style>
    table {
        margin-top : 30px;
        border-collapse:collapse;
        width : 70%;
    }
    th {
        background-color : #C0C0C0;
        text-align : center;
    }
    td {
        text-align : center;
    }
    input {
        text-align : center;
    }
    .center {
        text-align : center;
    }
</style>
@endsection