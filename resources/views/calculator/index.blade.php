@extends('layout')
@section('title','SVステータス計算機')
@section('content')
<div id="calculator-index">
    <form action="{{ route('calculator.index') }}" method="GET">
        <div class="card" style="display:inline-block; width:50%;">
            <h5 class="card-header">Attcker</h5>
            <div class="card-body">
                @csrf
                <input type="text" name="keyword1" value="{{$keyword1}}" />
                <table border='2' id='actable'>
                    <tr>
                        <th>ポケモン</th>
                        <th>タイプ１</th>
                        <th>タイプ２</th>
                        <th>体力</th>
                        <th>攻撃</th>
                        <th>防御</th>
                        <th>特攻</th>
                        <th>特防</th>
                        <th>素早さ</th>
                    </tr>
                    <tr>
                        <td>{{$shuzokuti1->ポケモン}}</td>
                        <td>{{$shuzokuti1->Types->タイプ1}}</td>
                        <td>{{$shuzokuti1->Types->タイプ2}}</td>
                        <td>{{$shuzokuti1->HP}}</td>
                        <td>{{$shuzokuti1->攻撃}}</td>
                        <td>{{$shuzokuti1->防御}}</td>
                        <td>{{$shuzokuti1->特攻}}</td>
                        <td>{{$shuzokuti1->特防}}</td>
                        <td>{{$shuzokuti1->素早}}</td>
                    </tr>
                </table>
                <br>
                <input type="text" name="keyword3" value="{{$keyword3}}" />
                <table border='2'>
                    <tr>
                        <th>名前</th>
                        <th>タイプ</th>
                        <th>分類</th>
                        <th>威力</th>
                        <th>命中</th>
                        <th>PP</th>
                        <th>直接</th>
                        <th>守る</th>
                    </tr>
                    <tr>
                        <td>{{$move->名前}}</td>
                        <td>{{$move->タイプ}}</td>
                        <td>{{$move->分類}}</td>
                        <td>{{$move->威力}}</td>
                        <td>{{$move->命中}}</td>
                        <td>{{$move->PP}}</td>
                        <td>{{$move->直接}}</td>
                        <td>{{$move->守る}}</td>
                    </tr>
                </table>
                <br>
                <div>
                    <label for="vac">　　攻撃側の個体値</label>
                    <input type="text" name="vac" value={{$vac}} 31>
                </div>
                <div>
                    <label for="effortac">　　　　　　努力値</label>
                    <input type="text" name="effortac" value={{$effortac}} 252>
                </div>
                <br>
                <div>
                    <label for="nature">性格補正</label>
                    <input type="radio" name=nature value=0.9>*0.9
                    <input type="radio" name=nature value=1.0 checked>*1.0
                    <input type="radio" name=nature value=1.1>*1.1
                    <input type="submit">
                </div>
                <div>
                    <label for="Arank">攻撃ランク</label>
                </div>
            </div>
        </div>
        <div class="card" style="display:inline-block; width:50%; float:right; text-align:right;">
            <h5 class="card-header">Blocker</h5>
            <div class="card-body">
                <div class="center">
                    <input type="text" name="keyword2" value="{{$keyword2}}" />
                    <table border='2'>
                        <tr>
                            <th>ポケモン</th>
                            <th>タイプ１</th>
                            <th>タイプ２</th>
                            <th>体力</th>
                            <th>攻撃</th>
                            <th>防御</th>
                            <th>特攻</th>
                            <th>特防</th>
                            <th>素早さ</th>
                        </tr>
                        <tr>
                            <td>{{$shuzokuti2->ポケモン}}</td>
                            <td>{{$shuzokuti2->Types->タイプ1}}</td>
                            <td>{{$shuzokuti2->Types->タイプ2}}</td>
                            <td>{{$shuzokuti2->HP}}</td>
                            <td>{{$shuzokuti2->攻撃}}</td>
                            <td>{{$shuzokuti2->防御}}</td>
                            <td>{{$shuzokuti2->特攻}}</td>
                            <td>{{$shuzokuti2->特防}}</td>
                            <td>{{$shuzokuti2->素早}}</td>
                        </tr>
                    </table>
                    <br>
                    <div>
                        <label for="vbd">　　防御側の個体値</label>
                        <input type="text" name="vbd" value={{$vbd}} 31>
                    </div>
                    <div>
                        <label for="effortbd">　　　　　　努力値</label>
                        <input type="text" name="effortbd" value={{$effortbd}} 252>
                    </div>
                    <br>
                    <div>
                        <button type="submit">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <h3>最高乱数:{{$max}}</h3>
        <h3>最低乱数:{{$min}}</h3>
    </form>
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