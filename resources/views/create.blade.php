<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('product')}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name"/>
        <label>Address</label>
        <input type="text" name="address"/>
        <label>Email</label>
        <input type="text" name="email"/>
        <label>Tangal Lahir</label>
        <input type="text" name="dob"/>
        <label>Phone</label>
        <input type="text" name="phone"/>
        <label>Line</label>
        <input type="text" name="line"/>
        <label>Git</label>
        <input type="text" name="git"/>
        <label>KTP</label>
        <input type="text" name="ktp"/>
        <label>CV</label>
        <input type="text" name="cv"/>
        <label>Score</label>
        <input type="text" name="score"/>
        <button type="submit">Save</button>
        
    </form>
</body>
</html>