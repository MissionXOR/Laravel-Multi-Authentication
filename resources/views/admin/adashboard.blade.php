<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            color: #555;
        }
        .logout {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-danger">Logout</a>
            </form>
        </div>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            @foreach ($da as $id=>$student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->role }}</td>
                    <td>{{ $student->status }}</td>
                    <td>
                        <a href="{{ route('admin.delete',$student->id) }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
