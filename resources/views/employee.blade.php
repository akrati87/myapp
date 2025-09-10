<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body style="font-weight: 700; display: flex; justify-content: center;">
    <div class="col md-4">
        <form action="{{route('employeeStore')}}" method="POST" style="border: 1px solid black; border-radius: 5%; padding: 20px; margin: 10px;">
        @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name<span style="color: red; font-weight: 700;">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="age" class="form-label">Age<span style="color: red; font-weight: 700;">*</span></label>
                <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email<span style="color: red; font-weight: 700;">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="number" class="form-label">Contact No.<span style="color: red; font-weight: 700;">*</span></label>
                <input type="number" class="form-control" id="contact" placeholder="Contact Number" name="contact">
            </div>
            <input type="submit" class="btn btn-primary mx-auto d-block">
        </form>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered" style="margin: 10px;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->contact}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>

