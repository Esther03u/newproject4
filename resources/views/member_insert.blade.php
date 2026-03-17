<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: ระบบสมาชิก (Member) ::</title>
</head>

<body>
    <h1>:: ระบบสมาชิก (Member) ::</h1>
    <form action="{{ url('member/insert2') }}" method="post">
        First name : <input type="text" name="fname"> <br />
        Last name : <input type="text" name="lname"> <br />
        Address : <br />
        <textarea name="address"></textarea> <br /><br />

        <input type="submit">
        <input type="reset">

        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    </form>
</body>

</html>