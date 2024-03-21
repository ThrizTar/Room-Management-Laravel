<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>View Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>View Room Informations</h2>
            </div>
            <div>
                <a href="{{ route('rooms.index') }}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Room No</strong>
                            <input type="text" name="Room_no" value="{{$room->Room_no}}" class="form-control" disabled>
                            @error('Room_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Room Type</strong>
                            <input type="text" name="RoomType" value="{{$room->roomtypes->RoomType}}" class="form-control" disabled>
                            @error('RoomType')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Room Capacity</strong>
                            <input type="text" name="RoomCap" value="{{$room->roomtypes->RoomCap}}" class="form-control" disabled>
                            @error('RoomCap')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Bed Type</strong>
                            <input type="text" name="BedType" value="{{$room->roomtypes->BedType}}" class="form-control" disabled>
                            @error('BedType')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Size</strong>
                            <input type="text" name="Size" value="{{$room->roomtypes->Size}}" class="form-control" disabled>
                            @error('Size')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Facility Set</strong>
                            <input type="text" name="Facility_Set" value="{{$room->roomtypes->Facility_Set}}" class="form-control" disabled>
                            @error('Facility_Set')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Price</strong>
                            <input type="text" name="Price" value="{{$room -> Price}}" class="form-control" disabled>
                            @error('Price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
