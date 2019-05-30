@extends('include.editorheader')

@section('editorcreate')
<div class="container">
    <form action="{{url('News')}}" method ="POST" enctype="multipart/form-data">
              <h2>Create News</h2>
              @csrf

        <div class="form-group" style="font-size:18px;"> <!-- Name field -->
            <label class="control-label " for="headline">Headline</label>
            <input class="form-control" id="headlines" name="headlines" type="text" required style="font-size:19px;"/>
        </div>
    {{--
        <div class="form-group" style="font-size:18px;"> <!-- Description field -->
            <label class="control-label requiredField" for="description">Description</label>
            <input class="form-control" id="description" name="description" type="textarea rows='8' cols='50' " required style="font-size:19px;"/>
        </div> --}}


        <div class="form-group" style="font-size:18px;">
            <label class="control-label requiredField" for="description">Description</label>
                 <textarea rows='8' cols='50' class="form-control" id="description" name="description" required style="font-size:19px;"/>
                </textarea>

        </div>

        <div class="form-group" style="font-size:18px;"> <!-- Description field -->
            <label class="control-label requiredField" for="categories">Categories</label>
         {{-- <input class="form-control" id="class" name="class" type="number" required style="font-size:19px;"/> --}}

    <!-- yo 'status'col-name chai classes ko db ko status ho -->
    <select name="category_id" id="">

             @foreach($categories as $category)
             <option value="{{$category->id}}">{{ $category->name}}</option>
             @endforeach
             </select>

        </div>

        <div class="form-group">
            <label class="control-label" for="trending">trending news</label>
            <input type="checkbox" name="trending" id="trending">


        </div>

        <div class="form-group">
            <label class="control-label" for="image">Image</label>
            <input class="form-control" type="file" name="image" id="image">
            </div>

        <div class="form-group">
            <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
        </div>

    </form>
    </div>
    @endsection
