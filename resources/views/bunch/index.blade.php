@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Bunches</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bunches as $bunch)
                            <tr>
                                <td> {{ $bunch->name }} </td>
                                <td> {{ $bunch->description }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
