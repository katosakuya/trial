function calc(weight, bfp) {
    var realac = Math.round(((data2*2+data4+data5/4)/2+5)*nature);
    var cal_value = document.getElementById('cal').value = Math.round(lean_value * 40);
    var protein_value = document.getElementById('protein').value = Math.round(lean_value * 2);
    var fat_value = document.getElementById('fat').value = Math.round(lean_value * 0.9);
    var carbo_value = document.getElementById('carbo').value = Math.round((cal_value - (protein_value * 4) - (fat_value * 9)) / 4);
}
/* $realac=(($data2*2+$data4+$data5/4)/2+5)*$nature;
        $realbd=($data3*2+$data6+$data7/4)/2+5;
        $damage = (floor(22*$data1*$realac/$realbd));
        $max = (floor($damage/50+2));
        $min = (floor($max*0.85));

        $nature = $request->nature;
        $data1=$move->威力;
        $data4=$request->vac;
        $data5=$request->effortac;
        $data6=$request->vbd;
        $data7=$request->effortbd;

        if ($move->分類='物理') {
            $data2=$shuzokuti1->攻撃;
            $data3=$shuzokuti2->防御;
            }
        else {
            $data2=$shuzokuti1->特攻;
            $data3=$shuzokuti2->特防;
        } */