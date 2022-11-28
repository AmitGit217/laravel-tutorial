<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tutorial pdf</title>
    </head>

    <body>
        <table>
            <thead>
                <th>Name</th>
                <th>Age</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user["name"] }}</td>
                    <td>{{ $user["age"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
