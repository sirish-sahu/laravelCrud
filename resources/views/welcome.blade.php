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

    <!-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif -->

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif



    <div class="container my-5">
        <!-- <div class="d-flex justify-content-end"> -->
        <a href="/register" class="btn btn-primary">Add Data</a>
        <!-- </div> -->

        <table class="table mt-2" border="2">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">CIty</th>
                    <th scope="col">Hobby</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->gender}}</td>
                        <td>{{$d->city}}</td>
                        <td>{{$d->hobby}}</td>
                        <td>{{$d->dob}}</td>
                        <td><img src="images/{{$d->img}}" alt="" width="50" height="50"></td>
                        <td>
                            <a href="/update/{{$d->id}}" class="btn btn-primary">update</a>
                            <a href="/delete/{{$d->id}}" class="btn btn-danger">delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>