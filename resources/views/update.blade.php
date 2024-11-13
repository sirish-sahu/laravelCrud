<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>
            Update page
        </h1>
        
        <div class="row justify-content-center">
            <div class="col-sm-8">

                <form action="/updateInDb" method="post" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="" name="name" value="{{$data->name}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="" name="email" value="{{$data->email}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <input type="radio" id="" name="gender" value="male" {{$data->gender=="male"?'checked':''}}>Male
                        <input type="radio" id="" name="gender" value="female" {{$data->gender=="female"?'checked':''}}>Female
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <select name="city" id="">
                            <option value="" disabled selected>Select Your City</option>
                            <option value="surat" {{$data->city=="surat"?'selected':''}}>surat</option>
                            <option value="vapi" {{$data->city=="vapi"?'selected':''}}>vapi</option>
                            <option value="bharuch" {{$data->city=="bharuch"?'selected':''}}>bharuch</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hobby</label>
                        @php
                            $arr = explode(",",$data->hobby);
                        @endphp
                        <input type="checkbox" name="hobby[]" id="" value="reading" {{in_array('reading',$arr)?'checked':''}}>reading
                        <input type="checkbox" name="hobby[]" id="" value="singing" {{in_array('singing',$arr)?'checked':''}}>singing
                        <input type="checkbox" name="hobby[]" id="" value="dancing" {{in_array('dancing',$arr)?'checked':''}}>dancing
                    </div>

                    <div class="mb-3">
                        <label class="form-label">DOB</label>
                        <input type="date" class="form-control" id="" name="dob" value="{{$data->dob}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>