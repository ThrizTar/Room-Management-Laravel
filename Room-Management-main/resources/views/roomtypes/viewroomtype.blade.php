<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>View Room Type Information</h2>
            </div>
            <div>
                <a href="{{ route('roomtypes.index') }}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('roomtypes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Information No</strong>
                            <input type="text" name="Information_No" class="form-control" value="{{$roomtype->Information_No}}" disabled>
                            @error('Information_No')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Room Type</strong>
                            <input type="text" name="RoomType" class="form-control" value="{{$roomtype->RoomType}}" disabled>
                            @error('RoomType')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Room Capacity</strong>
                            <input type="text" name="RoomCap" class="form-control" value="{{$roomtype->RoomCap}}" disabled>
                            @error('RoomCap')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Bed Type</strong>
                            <input type="text" name="BedType" class="form-control" value="{{$roomtype->BedType}}" disabled>
                            @error('BedType')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Size</strong>
                            <input type="text" name="Size" class="form-control" value="{{$roomtype->Size}}" disabled>
                            @error('Size')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Facility Set</strong>
                            <input type="text" name="Facility_Set" class="form-control" value="{{$roomtype->Facility_Set}}" disabled>
                            @error('Facility_Set')
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
