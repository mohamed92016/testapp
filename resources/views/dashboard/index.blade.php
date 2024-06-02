@extends('layouts.admin')
@section('title')
MAcademy
@endsection
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>

            <div class="content-body">

                <div id="crypto-stats-3" class="row">
                  <div class="col-xl-4 col-12">
                  <a href="{{route('admin.tests')}}">

                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">

                                    <div class="row">
                                        <div class="col-2">
                                            <h1>
     
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg>
                                            </h1>
                                        </div>
                                        <div class="col-5 pl-2" >
                                           <a href="{{route('admin.tests')}}"> <h3>الاختبارات</h3></a>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4></h4>
                                            <h6 class="success darken-4"><i class=""></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</a>
</div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                {{--<div class="row match-height">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sell Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total BTC available: 6542.56585</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>10583.4</td>
                                            <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                            <td>$ 4762.53</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total USD available: 9065930.43</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10595.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.29697926</td>
                                            <td>$ 3146.74</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->
               {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <td>
                                        <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                    </td>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount BTC</th>
                                            <th>BTC Remaining</th>
                                            <th>Price</th>
                                            <th>USD</th>
                                            <th>Fee (%)</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:50:50</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 1.38647</td>
                                            <td><i class="cc BTC-alt"></i> 0.38647</td>
                                            <td>11905.09</td>
                                            <td>$ 4600.97</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:49:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td>11901.85</td>
                                            <td>$ 5460.44</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td>11899.25</td>
                                            <td>$ 10694.6</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td>11908.58</td>
                                            <td>$ 5443.65</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <!-- Active Orders -->
            </div>
        </div>
    </div>

@endsection