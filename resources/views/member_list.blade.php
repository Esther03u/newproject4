<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        table {
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 4px 8px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        a {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Member List</h1>

    <p><a href="{{ url('member/insert') }}">Insert New Member</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $rs)
                <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->fname }}</td>
                    <td>{{ $rs->lname }}</td>
                    <td>{{ $rs->address }}</td>
                    <td>
                        <a href="{{ url('member/show/'.$rs->id) }}">View</a> |
                        <a href="{{ url('member/update/'.$rs->id) }}">Edit</a> |
                        <a href="{{ url('member/delete/'.$rs->id) }}"
                            onclick="return confirm('Are you sure you want to delete ?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>