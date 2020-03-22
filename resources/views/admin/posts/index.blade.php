@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                      Maqolarar
                    <a class="btn btn-sm btn-primary float-right" href="{{route('posts.create')}}">Yaratish</a>
                  </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Rasm</th>
                            <th>Sarlavha</th>
                            <th>Qisqacha</th>
                            <th>Ko'rildi</th>
                            <th width="200px ">Amallar</th>
                        </thead>
                        <tbody>
                             @foreach($posts as $post)
                            <tr>
                                <td>{{$post->img}}/</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->short}}</td>
                                <td>{{$post->views}}</td>
                                <td>
                                    <div class="row">
                                        <a class="btn btn-info" href="{{route('posts.show',['id'=> $post->id])}}"> <i class = "fa fa-eye"></i> </a>
                                        <a class="btn btn-warning" href="{{route('posts.edit',['id'=> $post->id])}}"> <i class = "fa fa-pen"></i> </a>
                                        <form method = 'POST'  action="{{route('posts.destroy', ['id' => $post->id])}}">
                                            @csrf 
                                            @method('delete')
                                            <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </div>                              
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
</div>
@endsection