<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Room Management - Hotel Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2" >
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Room manage</h2>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Room No</th>
                    <th>Informations No</th>
                    <th>Price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->Room_no }}</td>
                        <td>{{ $room->Room_Informations }}</td>
                        <td>{{ $room->Price }}</td>
                        <td>
                            <form action="{{ route('rooms.destroy', $room->Room_no) }}" method="POST">
                                <a href="{{ route('rooms.edit', $room->Room_no) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('rooms.show', $room->Room_no) }}" class="btn btn-primary">Show</a>
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="{{ route('rooms.create')}}" class="btn btn-success my-3">Room Register</a>
            <a href="{{ route('roomtypes.index')}}" class="btn btn-success my-3">View Room Type</a>
            {!! $rooms -> links('pagination::bootstrap-5') !!}
        </div>
    </div>
</body>

</html>
