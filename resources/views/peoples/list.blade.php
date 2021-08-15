@extends('layouts.app')

@section('title', 'People list')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="formcard col-md-8 bg-white p-5 mt-5 rounded">

            <div class="h1 text-center pb-4">People list</div>

            <div class="row justify-content-end">
                <div class="col-5 text-center mb-3">
                    <a class="aplus d-grid text-decoration-none" href="{{ url('people/new')}}"><button type="button" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus text-primary mr-3"></i>New people</button></a>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">Username</th>
                  <th scope="col">First name</th>
                  <th scope="col">Last name</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $peoples as $p )
                <tr>
                    <td>{{ $p->username}}</td>
                    <td>{{ $p->first_name}}</td>
                    <td>{{ $p->last_name }}</td>
                    <td>
                        <a href="people/{{ $p->id }}/edit">
                            <button class="btn btn-secondary"> <i class="fas fa-edit text-light"></i></button>
                        </a>
                    </td>
                    <td>
                        <form action="people/delete/{{ $p->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"> <i class="fas fa-trash-alt text-light"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>

        </div>

    </div>

</div>

@endsection
