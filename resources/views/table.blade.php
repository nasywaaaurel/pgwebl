@extends('layout.template')

@section('content')
<style>
    body {
        background-color: #fdf6ec;
    }

    .card {
        background-color: #fffaf3;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .card-header {
        background-color: #ffe8cc;
        color: #6b4c3b;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .table th {
        background-color: #f8d9aa !important;
        color: #4b3a2d;
        vertical-align: middle;
    }

    .table td {
        background-color: #fffaf3;
        vertical-align: middle;
    }

    .table img {
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .dataTables_wrapper {
        padding-top: 10px;
    }
</style>

<div class="container mt-4 mb-5">
    <!-- Points Table -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-map-pin me-2"></i>Points Table
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered" id="pointstable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Update At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($points as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/' .$p->image) }}" alt="" width="160" title="{{ $p->image }}"></td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Polylines Table -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-route me-2"></i>Polyline Table
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered" id="polylinestable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Update At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($polylines as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/' .$p->image) }}" alt="" width="160" title="{{ $p->image }}"></td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Polygons Table -->
    <div class="card">
        <div class="card-header">
            <i class="fa-solid fa-draw-polygon me-2"></i>Polygon Table
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered" id="polygonstable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Update At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($polygons as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/' .$p->image) }}" alt="" width="160" title="{{ $p->image }}"></td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script>
    new DataTable('#pointstable');
    new DataTable('#polylinestable');
    new DataTable('#polygonstable');
</script>
@endsection
