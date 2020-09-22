@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <h5 class="card-header">Items</h5>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">code</th>
                <th scope="col">name</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->code}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>asdf</td>
                    </tr>
                @endforeach
            </tbody>
            </table>

            </div>
        </div>
    </div>
</div>
@endsection
