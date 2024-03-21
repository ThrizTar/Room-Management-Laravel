<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Room Management - Hotel Inside Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2" >
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Room type manage</h2>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Information No</th>
                    <th>Room Type</th>
                    <th>Room Capacity</th>
                    <th>Bed Type</th>
                    <th>Size</th>
                    <th>Facality Set</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($roomtypes as $roomtype)
                    <tr>
                        <td>{{ $roomtype->Information_No }}</td>
                        <td>{{ $roomtype->RoomType }}</td>
                        <td>{{ $roomtype->RoomCap }}</td>
                        <td>{{ $roomtype->BedType }}</td>
                        <td>{{ $roomtype->Size }}</td>
                        <td>{{ $roomtype->Facility_Set }}</td>
                        <td>
                            <form action="{{ route('roomtypes.destroy', $roomtype->Information_No) }}" method="POST">
                                <a href="{{ route('roomtypes.edit', $roomtype->Information_No) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('roomtypes.show', $roomtype->Information_No) }}" class="btn btn-primary">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="{{ route('roomtypes.create')}}" class="btn btn-success my-3">Room Type Register</a>
            <a href="{{ route('rooms.index')}}" class="btn btn-success my-3">Room Manage</a>
            {!! $roomtypes -> links('pagination::bootstrap-5') !!}
        </div>
    </div>
</body>

</html>
