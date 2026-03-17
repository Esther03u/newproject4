<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: แก้ไขข้อมูลสมาชิก ::</title>
</head>

<body>
    <h1>:: แก้ไขข้อมูลสมาชิก ::</h1>

    @if(count($result) > 0)
        @php $rs = $result[0]; @endphp
        <form action="{{ url('member/update2') }}" method="post">
            First name : <input type="text" name="fname" value="{{ $rs->fname }}"> <br />
            Last name : <input type="text" name="lname" value="{{ $rs->lname }}"> <br />
            Address : <br />
            <textarea name="address">{{ $rs->address }}</textarea> <br /><br />

            <input type="hidden" name="id" value="{{ $rs->id }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

            <input type="submit" value="Update">
        </form>
    @else
        <p>Member not found.</p>
    @endif

    <br>
    <a href="{{ url('member/list') }}">Back to Members List</a>
</body>

</html>