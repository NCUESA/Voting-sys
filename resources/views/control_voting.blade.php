@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col">
        <div class="alert alert-warning" role="alert" style="margin:1rem; text-align: center; font-size: 18px;">
            國立彰化師範大學學生議會 113學年度 第一學期 第一次議員大會
        </div>
    </div>
</div>

<div class="row d-flex align-items-stretch">
    <div class="col-sm-2">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">主席</h5>
            </div>
            <div class="card-body">
                <h3><span class="badge bg-dark" style="font-weight: bold;" id="holder">O議長OO</span></h3>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">當前時間</h5>
            </div>
            <div class="card-body">
                <h3><span id="nowDateTimeSpan" class="badge bg-secondary" style="white-space: pre-wrap;">2024-10-23
                        11:59:59 星期三</span></h3>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card border-primary text-center">
            <div class="card-header">
                <h5 class="card-title">投票事項</h5>
            </div>
            <div class="card-body text-primary">
                <h3 id="title" style="font-weight: bold;">組織章程第17條修正動議</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">剩餘投票時間</h5>
            </div>
            <div class="card-body">
                <h3><span class="badge bg-primary" style="font-weight: bold;" id="last_time">00:00:00</span>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">通過條件</h5>
            </div>
            <div class="card-body">
                <h3><span class="badge bg-success" style="font-weight: bold;" id="type">多數者贏</span>
                </h3>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <h3 style="text-align: center">投票狀況</h3>
    <div class="col-sm-3">
        <div class="card text-center text-bg-success">
            <div class="card-header">
                <h5 class="card-title">同意 Agree</h5>
            </div>
            <div class="card-body">
                <h3 id="agree">12</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-center text-bg-danger">
            <div class="card-header">
                <h5 class="card-title">不同意 Disagree</h5>
            </div>
            <div class="card-body">
                <h3 id="disagree">7</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-center text-bg-warning">
            <div class="card-header">
                <h5 class="card-title">廢票 Discarded</h5>
            </div>
            <div class="card-body">
                <h3 id="discard">2</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-center text-bg-light">
            <div class="card-header">
                <h5 class="card-title">缺席 Absence</h5>
            </div>
            <div class="card-body">
                <h3 id="absence">0</h3>
            </div>
        </div>
    </div>

</div>

@endsection