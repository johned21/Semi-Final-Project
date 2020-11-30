@extends('base')

@section('content')
<br>

<div class="float-right">
    <a href="{{url('/courses/create')}}" class="btn btn-primary btn-sm">
        Add New Course
    </a>
</div>

<h1>List of Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $crs)

            <tr>
                <td>{{$crs->name}}</td>
                <td>{{$crs->description}}</td>
                <td>{{$crs->start}}</td>
                <td>{{$crs->end}}</td>
                <td>
                    <button class="btn btn-info btn-sm">Edit</button>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>


@stop