<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Assets</title>
</head>
<body>

<div>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Status</td>
            
        </tr>
        @foreach($assets as $asset)
        <tr>
            <th>{{$asset->id}}</th>
            <td>{{$asset->name}}</td>
            <td>{{$asset->status}}</td>
        </tr>
        @endforeach
    </table>
</div>
    
</body>
</html>