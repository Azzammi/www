@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Projects <a href="#" data-toggle="modal" data-target="#addProject">Add New</a></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td><a href="{{url('/projects/'.$project->id)}}">{{$project->title}}</a></td>
                                <td>{{$project->start_at}}</td>
                                <td>{{$project->end_at}}</td>
                                <td>{{$project->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<form method="post" autocomplete="off">{{ csrf_field() }}
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Project</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="start_m">Start</label>
                    <select class="form-control" id="start_d" name="start_d">
                        @for($day=1;$day<=31;$day++)
                        <option value="{{$day}}">{{$day}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="start_m"> </label>
                    <select class="form-control" id="start_m" name="start_m">
                        @for($m=1;$m<=12;$m++)
                        <option value="{{$m}}">{{$m}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="start_m"> </label>
                    <select class="form-control" id="start_y" name="start_y">
                        @for($y=1900;$y<=date('Y');$y++)
                        <option value="{{$y}}">{{$y}}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="end_d">End</label>
                    <select class="form-control" id="end_d" name="end_d">
                        @for($day=1;$day<=31;$day++)
                        <option value="{{$day}}">{{$day}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="end_m"> </label>
                    <select class="form-control" id="end_m" name="end_m">
                        @for($m=1;$m<=12;$m++)
                        <option value="{{$m}}">{{$m}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="end_y"> </label>
                    <select class="form-control" id="end_y" name="end_y">
                        @for($y=1900;$y<=date('Y');$y++)
                        <option value="{{$y}}">{{$y}}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="dubmit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</form>
</div>
@endsection
