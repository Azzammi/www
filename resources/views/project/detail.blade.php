@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Idea [<a href="#" data-toggle="modal"  data-backdrop="static" data-target="#addcard">Add Card</a>]</div>
                <div class="list-group" style="height: 500px;overflow-y: auto;"> 

@foreach($ideas as $idea)
                {{-- --}}
                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#card_id_{{$idea->id}}" class="list-group-item"> 
                        <h4 class="list-group-item-heading">{{$idea->title}}</h4> 
                        <p class="list-group-item-text">{{$idea->description}}</p> 
                    </a> 

<!-- Modal -->
<div class="modal fade" id="card_id_{{$idea->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$idea->title}}</h4>
      </div>
      <div class="modal-body">
        {{$idea->description}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Move To <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$idea->id.'/move/idea')}}">Idea</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$idea->id.'/move/todo')}}">Todo</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$idea->id.'/move/wip')}}">Work In Progress</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$idea->id.'/move/done')}}">Done</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
                {{-- --}}
@endforeach
                </div>
            </div>
        </div>
        {{-- --}}
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Todo [<a href="#" data-toggle="modal"  data-backdrop="static" data-target="#addcard">Add Card</a>]</div>
                <div class="list-group" style="height: 500px;overflow-y: auto;"> 

@foreach($todos as $todo)
                {{-- --}}
                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#card_id_{{$todo->id}}" class="list-group-item"> 
                        <h4 class="list-group-item-heading">{{$todo->title}}</h4> 
                        <p class="list-group-item-text">{{$todo->description}}</p> 
                    </a> 

<!-- Modal -->
<div class="modal fade" id="card_id_{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$todo->title}}</h4>
      </div>
      <div class="modal-body">
        {{$todo->description}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Move To <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$todo->id.'/move/idea')}}">Idea</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$todo->id.'/move/todo')}}">Todo</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$todo->id.'/move/wip')}}">Work In Progress</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$todo->id.'/move/done')}}">Done</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
                {{-- --}}
@endforeach
                </div>
            </div>
        </div>
        {{-- --}}
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Wip [<a href="#" data-toggle="modal"  data-backdrop="static" data-target="#addcard">Add Card</a>]</div>
                <div class="list-group" style="height: 500px;overflow-y: auto;"> 

@foreach($wips as $wip)
                {{-- --}}
                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#card_id_{{$wip->id}}" class="list-group-item"> 
                        <h4 class="list-group-item-heading">{{$wip->title}}</h4> 
                        <p class="list-group-item-text">{{$wip->description}}</p> 
                    </a> 

<!-- Modal -->
<div class="modal fade" id="card_id_{{$wip->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$wip->title}}</h4>
      </div>
      <div class="modal-body">
        {{$wip->description}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Move To <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$wip->id.'/move/idea')}}">Idea</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$wip->id.'/move/todo')}}">Todo</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$wip->id.'/move/wip')}}">Work In Progress</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$wip->id.'/move/done')}}">Done</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
                {{-- --}}
@endforeach
                </div>
            </div>
        </div>
        {{-- --}}
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Done [<a href="#" data-toggle="modal"  data-backdrop="static" data-target="#addcard">Add Card</a>]</div>
                <div class="list-group" style="height: 500px;overflow-y: auto;"> 

@foreach($dones as $done)
                {{-- --}}
                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#card_id_{{$done->id}}" class="list-group-item"> 
                        <h4 class="list-group-item-heading">{{$done->title}}</h4> 
                        <p class="list-group-item-text">{{$done->description}}</p> 
                    </a> 

<!-- Modal -->
<div class="modal fade" id="card_id_{{$done->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$done->title}}</h4>
      </div>
      <div class="modal-body">
        {{$done->description}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Move To <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$done->id.'/move/idea')}}">Idea</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$done->id.'/move/todo')}}">Todo</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$done->id.'/move/wip')}}">Work In Progress</a></li>
          <li><a href="{{url('/projects/'.$project->id.'/tasks/'.$done->id.'/move/done')}}">Done</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
                {{-- --}}
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="addcard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<form action="{{url('projects/'.$project->id.'/tasks/add')}}" method="post" autocomplete="off">{{ csrf_field() }}
<input type="hidden" name="project_id" value="{{$project->id}}">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Card</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Add To</label>
            <select name="state" class="form-control">
                <option value="idea">Idea</option>
                <option value="todo">Todo</option>
                <option value="wip">Work In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</form>
</div>

@endsection
