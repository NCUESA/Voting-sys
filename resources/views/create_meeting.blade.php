@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col">
        <hr>
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_A">
                新增會議
            </button>
        </div>
        <!--<hr>
        <div class="d-grid gap-2">
            <button class="btn btn-danger" type="button">調整人員名單</button>
        </div>
        <hr>-->
    </div>

    <div>
        <hr>
        <h4>會議列表</h4>
        <table class="table">
            <thead>
                <th>流水號</th>
                <th>名稱</th>
                <th>日期</th>
                <th>時間</th>
                <th>主席</th>
                <th>地點</th>
                <th>調整資訊</th>
            </thead>
            <tbody id="meetingInfos">
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="Modal_A" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">新增會議</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" id="addMeetForm">
                            <div class="row modalAddAttr">
                                <div class="col-md-12">
                                    <label for="meetingName" class="form-label">會議名稱</label>
                                    <input type="text" class="form-control" id="meetingName" aria-describedby="請輸入名稱">
                                </div>
                            </div>
                            <div class="row modalAddAttr">
                                <div class="col-md-6">
                                    <label for="meetingHolder" class="form-label">會議主席</label>
                                    <input type="text" class="form-control" id="meetingHolder" aria-describedby="請輸入主席">
                                </div>
                                <div class="col-md-6">
                                    <label for="meetingHolder" class="form-label">與會人員群組</label>
                                    <select class="form-select" aria-label="" id="meetingGroup">
                                        <option selected disabled>請選擇群組...</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row modalAddAttr">
                                <div class="col-md-4">
                                    <label for="meetingHolder" class="form-label">日期</label>
                                    <input type="date" class="form-control" id="meetingDate" aria-describedby="請輸入日期">
                                </div>
                                <div class="col-md-4">
                                    <label for="meetingHolder" class="form-label">時間</label>
                                    <input type="time" class="form-control" id="meetingTime" aria-describedby="請輸入時間">
                                </div>
                                <div class="col-md-4">
                                    <label for="meetingHolder" class="form-label">地點</label>
                                    <input type="text" class="form-control" id="meetingPlace" aria-describedby="請輸入地點">
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
</div>


@endsection