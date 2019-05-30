@extends('include.editorheader')

@section('edit')
<div class="container">
    <form action="{{url('Categories/'.$categories->id)}}" method ="POST"  >
              <h2>Edit Category</h2>

                    @csrf
                @method('patch')

        <div class="form-group" style="font-size:18px;"> <!-- Name field -->
            <label class="control-label " for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text"  value="{{$categories->name}}" required style="font-size:19px;"/>
        </div>

        <div class="form-group" style="font-size:18px;"> <!-- Description field -->
            <label class="control-label requiredField" for="status">Status</label>
            <input class="form-control" id="status" name="status" type="number" value="{{$categories->status}}" required style="font-size:19px;"/>
        </div>


        <div class="form-group">
            <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
        </div>

    </form>
    </div>
@endsection
