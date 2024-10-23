@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col">
        <div class="alert alert-info" role="alert" style="margin: 1rem;">
            <h3 style="text-align: center;">快速加入現有會議</h3>

            <form class="row g-3">
                <div class="col-md-2">
                    <label for="staticEmail2" class="visually-hidden"></label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="輸入會議代碼">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword2" class="visually-hidden">Meeting Code</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Meeting Code">
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="submit">加入會議</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <h4>近期會議 (顯示近9場)</h4>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">113-3</h5>
                        <p class="card-text">2024/10/21</p>
                        <a href="#" class="btn btn-primary">加入會議</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">113-2</h5>
                        <p class="card-text">2024/10/20</p>
                        <a href="#" class="btn btn-primary">加入會議</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">113-1</h5>
                        <p class="card-text">2024/10/19</p>
                        <a href="#" class="btn btn-primary">加入會議</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection