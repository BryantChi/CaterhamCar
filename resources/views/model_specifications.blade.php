@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('assets/css/model_specifications.css') }}?v=20240225" />

@section('section_content')
    @include('layouts.sub_hero')

    <section class="section element-animate">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-5">

                <div class="col-md-10 pr-md-5 mb-5">
                    <div class="block-41">
                        <h2 class="block-41-heading mb-5 ms-title">車型規格</h2>
                        <div class="block-41-text ms-content">

                            <h5>尺吋</h5>
                            <div class="table-responsive mb-4">
                                <table class="table">
                                    <thead class="table-success">
                                        <th>車型名稱</th>
                                        <th colspan="4">Caterham 7 Roadsport SV</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>SEVEN 340窄版S3<br>
                                                (道路懸吊)</td>
                                            <td>SEVEN 340窄版S3<br>
                                                (運動懸吊)</td>
                                            <td>SEVEN 340寬版S5</td>
                                            <td>SEVEN 170</td>
                                        </tr>
                                        <tr>
                                            <td>軸距(mm)</td>
                                            <td>2225</td>
                                            <td>2225</td>
                                            <td>2305</td>
                                            <td>2225</td>
                                        </tr>
                                        <tr>
                                            <td>前輪距(mm)</td>
                                            <td>1270</td>
                                            <td>1336</td>
                                            <td>1446</td>
                                            <td>1220</td>
                                        </tr>
                                        <tr>
                                            <td>後輪距(mm)</td>
                                            <td>1336</td>
                                            <td>1370</td>
                                            <td>1446</td>
                                            <td>1301</td>
                                        </tr>
                                        <tr>
                                            <td>長(mm)</td>
                                            <td>3180</td>
                                            <td>3180</td>
                                            <td>3300</td>
                                            <td>3180</td>
                                        </tr>
                                        <tr>
                                            <td>寬(mm)</td>
                                            <td>1575</td>
                                            <td>1575</td>
                                            <td>1685</td>
                                            <td>1470</td>
                                        </tr>
                                        <tr>
                                            <td>高（車篷拉起）(mm)</td>
                                            <td>1090</td>
                                            <td>1090</td>
                                            <td>1140</td>
                                            <td>1090</td>
                                        </tr>
                                        <tr>
                                            <td>迴轉圈(meter)</td>
                                            <td>10</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>內部寬度(mm)</td>
                                            <td>930</td>
                                            <td>930</td>
                                            <td>1110</td>
                                            <td>930</td>
                                        </tr>
                                        <tr>
                                            <td>座椅到車頂高度(mm)</td>
                                            <td>838</td>
                                            <td>838</td>
                                            <td>865</td>
                                            <td>838</td>
                                        </tr>
                                        <tr>
                                            <td>行李箱容量(ltr)</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>130</td>
                                            <td>120</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5>液體容量</h5>
                            <div class="table-responsive mb-4">
                                <table class="table">
                                    <thead class="table-success">
                                        <th>車型名稱</th>
                                        <th colspan="4">Caterham 7 Roadsport SV</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>SEVEN 340窄版S3<br>
                                                (道路版懸吊)</td>
                                            <td>SEVEN 340窄版S3<br>
                                                (運動懸吊)</td>
                                            <td>SEVEN 340寬版S5</td>
                                            <td>SEVEN 170</td>
                                        </tr>
                                        <tr>
                                            <td>油箱STD</td>
                                            <td>36 L</td>
                                            <td>36 L</td>
                                            <td>41 L</td>
                                            <td>36 L</td>
                                        </tr>
                                        <tr>
                                            <td>齒輪箱5/6檔 Std</td>
                                            <td>1.9 L</td>
                                            <td>1.9 L</td>
                                            <td>1.9 L</td>
                                            <td>1.2 L</td>
                                        </tr>
                                        <tr>
                                            <td>冷卻系統無暖器（CSR除外）</td>
                                            <td>4.5 L</td>
                                            <td>4.5 L</td>
                                            <td>4.5 L</td>
                                            <td>4.0 L</td>
                                        </tr>
                                        <tr>
                                            <td>差速器</td>
                                            <td>0.8 L</td>
                                            <td>0.8 L</td>
                                            <td>0.8 L</td>
                                            <td>1.3 L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5>規格資料</h5>
                            <div class="table-responsive mb-4">
                                <table class="table">
                                    <thead thead class="table-success">
                                        <th>車型名稱</th>
                                        <th colspan="2">Caterham 7 Roadsport SV</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>SEVEN 340</td>
                                            <td>SEVEN 170</td>
                                        </tr>
                                        <tr>
                                            <td>引擎種類</td>
                                            <td>直列式4汽缸</td>
                                            <td>直列式3汽缸</td>
                                        </tr>
                                        <tr>
                                            <td>容量</td>
                                            <td>1999cc</td>
                                            <td>660cc</td>
                                        </tr>
                                        <tr>
                                            <td>孔徑</td>
                                            <td>87.5mm</td>
                                            <td>64.0mm</td>
                                        </tr>
                                        <tr>
                                            <td>行程</td>
                                            <td>83.1mm</td>
                                            <td>68.2mm</td>
                                        </tr>
                                        <tr>
                                            <td>汽缸蓋</td>
                                            <td>16v DOHC</td>
                                            <td>12v DOHC</td>
                                        </tr>
                                        <tr>
                                            <td>壓縮比</td>
                                            <td>10.8:1</td>
                                            <td>9.1:1</td>
                                        </tr>
                                        <tr>
                                            <td>最大馬力</td>
                                            <td>168 ps @ 7250 rpm</td>
                                            <td>84 bhp @ 6500 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>最大扭力</td>
                                            <td>175 Nm @ 6500 rpm</td>
                                            <td>116 Nm @ 4000 – 4500 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>進氣系統</td>
                                            <td>單蝶型</td>
                                            <td>單蝶型</td>
                                        </tr>
                                        <tr>
                                            <td>燃油系統</td>
                                            <td>多點噴射</td>
                                            <td>多點噴射</td>
                                        </tr>
                                        <tr>
                                            <td>燃油種類</td>
                                            <td>95 無鉛</td>
                                            <td>95 無鉛</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h5>變速箱 齒比</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-success">
                                        <th></th>
                                        <th>
                                            五速 (5 SPEED)<br>Seven 170 專屬
                                        </th>
                                        <th>
                                            五速 (5 SPEED)<br>Seven 170 除外
                                        </th>
                                        <th>
                                            六速( 6 SPEED)
                                        </th>
                                        <th>
                                            6 SPEED SEQ<br>Seven 620R
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5.11</td>
                                            <td>3.14</td>
                                            <td>2.69</td>
                                            <td>2.07</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>3.02</td>
                                            <td>1.89</td>
                                            <td>2.01</td>
                                            <td>1.60</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1.91</td>
                                            <td>1.33</td>
                                            <td>1.59</td>
                                            <td>1.30</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1.26</td>
                                            <td>1.00</td>
                                            <td>1.32</td>
                                            <td>1.09</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1.00</td>
                                            <td>0.81</td>
                                            <td>1.13</td>
                                            <td>0.95</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>--</td>
                                            <td>--</td>
                                            <td>1.00</td>
                                            <td>0.83</td>
                                        </tr>
                                        <tr>
                                            <td>R</td>
                                            <td>5.15</td>
                                            <td>3.37</td>
                                            <td>2.96</td>
                                            <td>2.07</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
