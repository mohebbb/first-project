<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس شماره {{$course->id}}</title>
    <style>
        table, tr, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body dir="rtl" style= "display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
 
    <br>
 
    <h2>درس شماره {{$course->id}}</h2>
    <div>
        <table>
            <tr>
                <th>نام دوره</th>
               <th>{{$course->name}}</th>
            </tr>
            <tr>
                <th>توضیحات</th>
                <th>{{$course->description}}</th>
            </tr>
            <tr>
                <th>مدرس</th>
                <th>{{$course->teacher}}</th>
            </tr>
        </table>
    </div>
</body>
</html>