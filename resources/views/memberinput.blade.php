<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <table>
        <tr>
            <th>IdMember</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Time</th>
            <th>Room</th>
            <th>Member ID</th>
        </tr>
        @foreach ($memberList as $member)
        <tr>
            <td>{{$member->IdMember }}</td>
            <td>{{$member->firstName}}</td>
            <td>{{$member->lastName}}</td>
            <td>{{$member->datetime}}</td>
            <td>{{$member->room}}</td>
            <td>{{$member->memberId}}</td>
        </tr>
        @endforeach
    </table>
  {{-- </table>
        <table class="responsive">
                @foreach ($memberList as $member)
                    <p>{{$member->IdMember }}</p>
                    <p>{{$member->firstName}}</p>
                    <p>{{$member->lastName}}</p>
                    <p>{{$member->datetime}}</p>
                    <p>{{$member->room}}</p>
                    <p>{{$member->memberId}}</p>
        
                @endforeach
        </table>
    --}}
</body>
</html>