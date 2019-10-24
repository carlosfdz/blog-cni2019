@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Mis Posts</h3></div>
                <div class="card-header"><a href="{{ route('posts.create') }}" class="btn btn-primary">Nuevo Post</a></div>

                <div class="card-body">
                    <table class="table">
					  	<thead class="thead-dark">
						    <tr>
							    <th scope="col">ID</th>
							    <th scope="col">Titulo</th>
							    <th scope="col">Descripción</th>
							    <th scope="col">Fecha Creación</th>
							    <th scope="col">Fecha Actualización</th>
							    <th scope="col" colspan = 2>Acciones</th>
						    </tr>
					  	</thead>
						<tbody>
							@foreach($posts as $post)
					    	<tr>
						        <td>{{$post->id}}</td>
							  	<td>{{$post->title}}</td>
							    <td>{{$post->description}}</td>
							    <td>{{$post->created_at}}</td>
							    <td>{{$post->updated_at}}</td>
							    <td>
							        <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
							    </td>
							    <td>
							        <form action="{{ route('posts.destroy', $post->id)}}" method="post">
							          @csrf
							          @method('DELETE')
							          <button class="btn btn-danger" type="submit">Delete</button>
							        </form>
							    </td>
					    	</tr>
					    	@endforeach
					    </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
