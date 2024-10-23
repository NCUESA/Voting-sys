@extends('layouts.template')

@section('content')
<h4>基本資訊</h4>
<div class="row">
    <div class="col-md-2">
        <label for="meetingName" class="form-label">會議編號</label>
        <input type="text" class="form-control" id="meetingID" aria-describedby="請輸入名稱">
    </div>
    <div class="col-md-10">
        <label for="meetingName" class="form-label">名稱</label>
        <input type="text" class="form-control" id="meetingName">
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label for="meetingName" class="form-label">地點</label>
        <input type="text" class="form-control" id="meetingPlace">
    </div>
    <div class="col-md-3">
        <label for="meetingName" class="form-label">主席</label>
        <input type="text" class="form-control" id="meetingHolder">
    </div>
    <div class="col-md-2">
        <label for="meetingHolder" class="form-label">與會人員群組</label>
        <select class="form-select" aria-label="" id="meetingGroup">
            <option selected disabled>請選擇群組...</option>

        </select>
    </div>
    <div class="col-md-2">
        <label for="meetingName" class="form-label">日期</label>
        <input type="date" class="form-control" id="meetingDate">
    </div>
    <div class="col-md-2">
        <label for="meetingName" class="form-label">時間</label>
        <input type="time" class="form-control" id="meetingTime">
    </div>
</div>

<hr>
<div class="row">
    <div class="col-sm-8">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_new_vote">
                新增投票
            </button>
        </div>
        <!--<hr>
        <div class="d-grid gap-2">
            <button class="btn btn-danger" type="button">調整人員名單</button>
        </div>
        <hr>-->
    </div>
    <div class="col-sm-2">
        <div class="d-grid gap-2">
            <button class="btn btn-danger" type="submit">取消變更</button>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="d-grid gap-2">
            <button class="btn btn-success" type="submit">送出變更</button>
        </div>
    </div>
</div>


<hr>
<div class="row">
    <h4>表決列表</h4>
    <table class="table">
        <thead>
            <th>順序</th>
            <th>案由</th>
            <th>時長</th>
            <th>開始時間</th>
            <th>狀態</th>
            <th>通過條件</th>
            <th>調整順序</th>
        </thead>
        <tbody id="voting_seq">
            <tr></tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="Modal_new_vote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">新增投票</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" id="addMeetForm">
                        <div class="row modalAddAttr">
                            <h6>基本資訊</h6>
                            <div class="col-md-2">
                                <label for="voteSeq" class="form-label">順序</label>
                                <input type="number" class="form-control" id="voteSeq" aria-describedby="順序">
                            </div>
                            <div class="col-md-10">
                                <label for="meetingName" class="form-label">項目</label>
                                <input type="text" class="form-control" id="voteName" aria-describedby="項目" required>
                            </div>
                        </div>
                        <div class="row modalAddAttr">
                            <div class="col-md-6">
                                <label for="meetingTime" class="form-label">表決時長</label>
                                <input type="time" class="form-control" id="meetingTime" aria-describedby="請輸入日期">
                            </div>
                            <div class="col-md-6">
                                <label for="meetingStart" class="form-label">開始時間</label>
                                <input type="time" class="form-control" id="meetingStart" aria-describedby="請輸入時間">
                            </div>
                        </div>
                        <hr>
                        <div class="row modalAddAttr">
                            <h6>通過條件</h6>
                            <div class="col-md-4">
                                <div class="card border-primary" id="normal_card">
                                    <div class="card-body">
                                        <h5 class="card-title">票多者勝</h5>
                                        <p class="card-text">票多的贏，票少的輸<br>多數者勝，沒有門檻限制</p>
                                        <input type="radio" name="cardSelection" class="btn-check" id="radio1"
                                            autocomplete="off" onclick="toggleCard(this, '#btn1', '#normal_card')">
                                        <label for="radio1" class="btn btn-outline-primary" id="btn1">選擇</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-4">
                                <div class="card border-primary" id="lowest_card">
                                    <div class="card-body">
                                        <h5 class="card-title">門檻限制</h5>
                                        <p class="card-text">票多的不一定贏<br>同意票數要達到一定條件</p>
                                        <input type="radio" name="cardSelection" class="btn-check" id="radio2"
                                            autocomplete="off" onclick="toggleCard(this, '#btn2', '#lowest_card')">
                                        <label for="radio2" class="btn btn-outline-primary" id="btn2">選擇</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 with checkbox -->
                            <div class="col-md-4">
                                <div class="card border-success" id="nameless">
                                    <div class="card-body">
                                        <h5 class="card-title">無記名</h5>
                                        <p class="card-text">投票不要記名</p>
                                        <input type="checkbox" name="nameless" class="btn-check" id="checkbox1"
                                            autocomplete="off" onclick="toggleCheckbox(this, '#btn3', '#nameless')">
                                        <label for="checkbox1" class="btn btn-outline-success" id="btn3">記名</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">這是即時會議(是即時會議請撥動至開啟)</label>
                        </div>-->
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-success">新增</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection