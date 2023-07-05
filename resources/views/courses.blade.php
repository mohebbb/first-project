<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس‌ها</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body dir="rtl" style= "display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
    <h2>به صفحه درس‌ها خوش آمدید...</h2>
    <div>

        <!-- ================== show table by model ================= -->
        <table>
            <tr>
                <th>نام دوره</th>
                <th>توضیحات</th>
                <th>مدرس</th>
            </tr>

            @inject('courses', 'App\Models\courses')
            @foreach($courses::all() as $course)
            <tr>
                <th><a href="{{$course->id}}">{{$course->name}}</a></th>
                <th><a href="{{$course->id}}">{{$course->description}}</a></th>
                <th><a href="{{$course->id}}">{{$course->teacher}}</a></th>
            </tr>
            @endforeach
        </table>
        <!-- ========================================================== -->
    </div>    
</body>
</html>