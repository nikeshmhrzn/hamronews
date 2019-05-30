@extends('include.editorheader')

@section('content')

<div class="container">


<h3><a href ="{{url('News/create')}}">Create news</a></h3>


<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
    <tr>
        <th>id</th>
        <th>Headlines</th>
        <th>Description</th>
        <th>Categories</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
</thead>

<tbody style="font-size:18px;">
    <?php foreach($news as $new){?>
        <tr>
            <td> <?php echo $new->id;?></td>
            <td> <?php echo $new->headlines;?></td>
            <td> <?php echo $new->description;?></td>
            <td> {{$new->category->name}}</td>
            <td><img src="{{asset('storage/images/news/'. $new->image)}}" alt="" height="120" width="150"></td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                      <a href=" {{url('Editor/'.$new->id. '/edit')}}" button type="button" class="btn btn-info a">Edit</a></button>
                    </div>

                    <div class="col-md-9">
                        <form action="{{url('Editor/'.$new->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
                        </div>
            </td>

        </tr>

    <?php }?>

</table>
</div>
@endsection
