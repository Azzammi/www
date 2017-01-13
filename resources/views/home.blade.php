@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Selamat datang {{Auth::user()->name}},
                    Apa yang bisa saya bantu hari ini? <a href="https://google.com">Google</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Todo Hari ini</div>

                <div class="panel-body">
                        <label class="checkbox" style="margin-left: 20px;">
                            <input type="checkbox" name=""> Abc
                        </label>
                        <label class="checkbox" style="margin-left: 20px;">
                            <input type="checkbox" name=""> Abc
                        </label>
                        <label class="checkbox" style="margin-left: 20px;">
                            <input type="checkbox" name=""> Abc
                        </label>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">External Link</div>

                <div class="list-group">
                <a href="" class="list-group-item">Facebook</a>
                <a href="" class="list-group-item">Twitter</a>
                <a href="" class="list-group-item">Google</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
