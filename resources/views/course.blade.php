<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس شماره {{$id}}</title>
    <style>
        table, tr, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body dir="rtl" style= "display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
    <h2>درس شماره {{$id}}</h2>

    <div>
        <table>
            @foreach($course as $cours)
            <tr>
                <th>نام دوره</th>
                <!-- باید مدل رو یوز کنم و اسم دوره رو نمایش بدم در آنجایی که آیدی برابر با آیدی ریکویس باشه. -->
                <th>{{$cours->name}}</th>
            </tr>
            <tr>
                <th>توضیحات</th>
                <th>{{$cours->description}}</th>
            </tr>
            <tr>
                <th>مدرس</th>
                <th>{{$cours->teacher}}</th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>