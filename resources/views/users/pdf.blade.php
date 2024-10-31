<!DOCTYPE html>
<html>

<head>
    <title>Users Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <h1>All Users</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
