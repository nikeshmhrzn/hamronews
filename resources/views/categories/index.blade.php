@extends('include.editorheader')
@section('content')

<div class="container">
    <h3><a href ="{{url('Categories/create')}}">Create Category</a></h3>


<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>


<tbody style="font-size:18px;">
    <?php foreach($categories as $category){?>
        <tr>
            <td> <?php echo $category->id;?></td>
            <td> <a href="{{url('Categories/'.$category->id)}}"><?php echo $category->name;?></a></td>
            <td> <?php echo $category->status;?></td>


            <td>
    <div class="row">
        <div class="col-md-3">
            <a href="{{url('Categories/' .$category->id. '/edit')}}" button type="button" class="btn btn-info a">Edit</a></button>
        </div>

        <div class="col-md-9">
            <form action="{{url('Categories/'.$category->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>

    </td>
</tr>

    <?php }?>

</table>
</div>
@endsection
