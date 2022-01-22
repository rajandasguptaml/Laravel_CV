<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV MAKER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Olivine CV Maker</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('/laravel/pdf') }}">Export to PDF</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Technical</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Details</th>
                    <th scope="col">Year</th>
                    <th scope="col">School</th>
                    <th scope="col">College</th>
                    <th scope="col">University</th>
                </tr>
            </thead>
            <tbody>
                @isset($laravelcv)
                    @foreach($laravelcv  as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->designation }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->profile }}</td>
                            <td>{{ $data->skills }}</td>
                            <td>{{ $data->technical }}</td>
                            <td>{{ $data->exp }}</td>
                            <td>{{ $data->details }}</td>
                            <td>{{ $data->year }}</td>
                            <td>{{ $data->school }}</td>
                            <td>{{ $data->college }}</td>
                            <td>{{ $data->university }}</td>
                        </tr>
                    @endforeach
                @else 
                    <h1>No Data Found</h1>
                @endisset
            </tbody>
        </table>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('/inputdata') }}">Input Your Data</a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>