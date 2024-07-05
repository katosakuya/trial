@extends('layout')
@section('title','ドッカンバトルatk値計算')
@section('content')
<div id="calculator-index">
    <form action="{{ route('dbcal.index') }}" method="GET">
        <div class="card" style="display:inline-block; width:100%;">
            @csrf
            <div class="card-header">
                
                </div>
                <div class="card-body">
                <label for="latk" class="brank">リーダースキル</label>
                <label for="latk">ATK:</label>
                <select name="latk" id="latk">
                    <option value="5">200%</option>
                    <option value="4.6">180%</option>
                    <option value="4.4">170%</option>
                    <option value="4.0">150%</option>
                    <option value="3.4">120%</option>
                </select>
                <label for="ldef">DEF:</label>
                <select name="ldef" id="ldef">
                    <option value="5">200%</option>
                    <option value="4.6">180%</option>
                    <option value="4.4">170%</option>
                    <option value="4.0">150%</option>
                    <option value="3.4">120%</option>
                </select>
                <br>
                <label for="atk" class="brank">ステータス</label>
                <label for="atk">ATK:</label>
                <input type="number" id="atk" name="atk" value="0" oninput="updateValue(this.value)">
                <label for="def">DEF:</label>
                <input type="number" id="def" name="def" value="0" oninput="updateValue(this.value)">
                <br>
                <label for="t1atk" class="brank">ターン開始時1</label>
                <label for="t1atk">ATK:</label>
                <input type="number" id="t1atk" name="t1atk" oninput="updateValue(this.value)">
                <label for="t1def">DEF:</label>
                <input type="number" id="t1def" name="t1def" oninput="updateValue(this.value)">
                <br>
                <label for="t2atk" class="brank">ターン開始時2</label>
                <label for="t2atk">ATK:</label>
                <input type="number" id="t2atk" name="t2atk" oninput="updateValue(this.value)">
                <label for="t2def">DEF:</label>
                <input type="number" id="t2def" name="t2def" oninput="updateValue(this.value)">
                <br>
                <label for="atkatk" class="brank">攻撃時</label>
                <label for="atkatk">ATK:</label>
                <input type="number" id="atkatk" name="atkatk" oninput="updateValue(this.value)">
                <label for="atkdef">DEF:</label>
                <input type="number" id="atkdef" name="atkdef" oninput="updateValue(this.value)">
                <br>
                <label for="supatk" class="brank">サポート</label>
                <label for="supatk">ATK:</label>
                <input type="number" id="supatk" name="supatk" oninput="updateValue(this.value)">
                <label for="supdef">DEF:</label>
                <input type="number" id="supdef" name="supdef" oninput="updateValue(this.value)">
                <br>
                <label for="linkatk" class="brank">リンクスキル</label>
                <label for="linkatk">ATK:</label>
                <input type="number" id="linkatk" name="linkatk" oninput="updateValue(this.value)">
                <label for="linkdef">DEF:</label>
                <input type="number" id="linkdef" name="linkdef" oninput="updateValue(this.value)">
                <br>
                <label for="actatk" class="brank">アクティブスキル</label>
                <label for="actatk">ATK:</label>
                <input type="number" id="actatk" name="actatk" oninput="updateValue(this.value)">
                <label for="actdef">DEF:</label>
                <input type="number" id="actdef" name="actdef" oninput="updateValue(this.value)">
                <br>
                <label for="deathatk" class="brank">必殺効果</label>
                <label for="deathatk">ATK</label>
                <select name="deathatk" id="deathatk">
                    <option value="1">超大幅上昇</option>
                    <option value="0.5">大幅上昇</option>
                    <option value="0.3">上昇</option>
                </select>
                <label for="deathdef">DEF:</label>
                <select name="deathdef" id="deathdef">
                    <option value="1">超大幅上昇</option>
                    <option value="0.5">大幅上昇</option>
                    <option value="0.3">上昇</option>
                </select>
                <br>
                <label for="magnificationlv" class="brank">必殺倍率</label>
                <label for="magnificationlv"></label>
                <select name="magnificationlv" id="magnificationlv">
                    <option value="25">Lv25</option>
                    <option value="20">Lv20</option>
                    <option value="15">Lv15</option>
                    <option value="10">Lv10</option>
                </select>
                <select name="magnification" id="magnification">
                    <option value="0.1">超極大</option>
                    <option value="0.05">極大</option>
                    <option value="2.5">超絶特大</option>
                </select>
                <br>
                <label for="times" class="brank">必殺回数</label>
                <label for="times"></label>
                <input type="number" id="times" name="times" oninput="updateValue(this.value)">
                <span>回</span>
                <br>
                <label for="power" class="brank">必殺技威力up</label>
                <label for="power">Lv:</label>
                <input type="number" id="power" name="power" oninput="updateValue(this.value)">
                <br>
                <label for="energy" class="brank">気力ボーナス</label>
                <label for="energy"></label>
                <select name="energy" id="energy">
                    <option value="2.0">2.0(LR気力24)</option>
                    <option value="1.8">1.8</option>
                    <option value="1.6">1.6(UR気力12)</option>
                    <option value="1.5">1.5</option>
                    <option value="1.4">1.4</option>
                    <option value="1.3">1.3</option>
                </select>
                <span>倍</span>
            </div>
            <div class="card-footer">
                <span>必殺技ATK: </span><span id="output"></span>
                <br>
                <span>行動前DEF: </span><span id="output1"></span><span>行動後DEF: </span><span id="output2"></span>
            </div>
        </div>
    </form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var initialValue = document.getElementById('atk').value;
        document.getElementById('output').innerText = initialValue;
    });

    // セレクトボックスの変更を監視し、変更が検知されたときに処理を実行
    var latk = document.getElementById('latk');
    latk.addEventListener('change', updateValue);
    var ldef = document.getElementById('ldef');
    ldef.addEventListener('change', updateValue);
    var deathatk = document.getElementById('deathatk');
    deathatk.addEventListener('change', updateValue);
    var deathdef = document.getElementById('deathdef');
    deathdef.addEventListener('change', updateValue);
    var energy = document.getElementById('energy');
    energy.addEventListener('change', updateValue);
    var magnificationlv = document.getElementById('magnificationlv');
    magnificationlv.addEventListener('change', updateValue);
    var magnification = document.getElementById('magnification');
    magnification.addEventListener('change', updateValue);
    

    function updateValue(value) {
        // 入力値が数字でない場合、空文字列に置き換える
        document.getElementById('atk').value = document.getElementById('atk').value.replace(/\D/g, '');
        document.getElementById('def').value = document.getElementById('def').value.replace(/\D/g, '');
        document.getElementById('t1atk').value = document.getElementById('t1atk').value.replace(/\D/g, '');
        document.getElementById('t1def').value = document.getElementById('t1def').value.replace(/\D/g, '');
        document.getElementById('t2atk').value = document.getElementById('t2atk').value.replace(/\D/g, '');
        document.getElementById('t2def').value = document.getElementById('t2def').value.replace(/\D/g, '');
        document.getElementById('atkatk').value = document.getElementById('atkatk').value.replace(/\D/g, '');
        document.getElementById('atkdef').value = document.getElementById('atkdef').value.replace(/\D/g, '');
        document.getElementById('supatk').value = document.getElementById('supatk').value.replace(/\D/g, '');
        document.getElementById('supdef').value = document.getElementById('supdef').value.replace(/\D/g, '');
        document.getElementById('linkatk').value = document.getElementById('linkatk').value.replace(/\D/g, '');
        document.getElementById('linkdef').value = document.getElementById('linkdef').value.replace(/\D/g, '');
        document.getElementById('actatk').value = document.getElementById('actatk').value.replace(/\D/g, '');
        document.getElementById('actdef').value = document.getElementById('actdef').value.replace(/\D/g, '');
        document.getElementById('times').value = document.getElementById('times').value.replace(/\D/g, '');
        document.getElementById('power').value = document.getElementById('power').value.replace(/\D/g, '');
        //各inputの値を変数に代入
        var atk = document.getElementById('atk').value
        var def = document.getElementById('def').value
        var t1atk = document.getElementById('t1atk').value
        var t1def = document.getElementById('t1def').value
        var t2atk = document.getElementById('t2atk').value
        var t2def = document.getElementById('t2def').value
        var atkatk = document.getElementById('atkatk').value
        var atkdef = document.getElementById('atkdef').value
        var supatk = document.getElementById('supatk').value
        var supdef = document.getElementById('supdef').value
        var linkatk = document.getElementById('linkatk').value
        var linkdef = document.getElementById('linkdef').value
        var actatk = document.getElementById('actatk').value
        var actdef = document.getElementById('actdef').value
        var times = document.getElementById('times').value
        var power = document.getElementById('power').value
        var latk = document.getElementById('latk').value;
        var ldef = document.getElementById('ldef').value;
        var deathatk = document.getElementById('deathatk').value;
        var deathdef = document.getElementById('deathdef').value;
        var enrgy = document.getElementById('energy').value;
        var magnificationlv = document.getElementById('magnificationlv').value;
        var magnification = document.getElementById('magnification').value;
        var spe;
        if(magnification = '0.1'){
            if(magnificationlv = '25'){
                spe = 6.2;
            }elseif(magnificationlv = '20'){
                spe = 5.7;
            }elseif(magnificationlv = '15'){
                spe = 4.9;
            }else{
                spe = 4.4;
            }
        }elseif(magnification = '0.05'){
            if(magnificationlv = '25'){
                spe = 4.5;
            }elseif(magnificationlv = '20'){
                spe = 4.25;
            }elseif(magnificationlv = '15'){
                spe = 3.7;
            }else{
                spe = 3;
            }
        }else{
            if(magnificationlv = '15'){
                spe = 6.3;
            }else{
                spe = 5.05;
            }
        }
        var output = atk*latk*((t1atk+t2atk+supatk)/100+1)*(linkatk/100+1)*energy*(atkatk/100+1)*(spe+deathatk+0.05*power);
        document.getElementById('output').innerText = output;
    }
</script>
<style>
    .card-body label {
        width: 40px;
        text-align: right;
        margin-right: 10px;
    }
    label.brank {
        width: 130px;
        text-align: right;
        margin-right: 10px;
    }
</style>
@endsection