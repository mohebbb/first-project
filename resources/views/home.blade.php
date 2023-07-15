<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه خادمان 313</title>
    <link rel="icon" href="{{url('/img/313 icon.ico')}}">
    <link rel="stylesheet" href="{{url('/css/reset200802.css')}}">
    <link rel="stylesheet" href="{{url('/Fonts/vazirmatn/Vazirmatn-font-face.css')}}">
    <link rel="stylesheet" href="{{url('/css/home.css')}}">

</head>
<body dir="rtl" class="continer">
    
    <x-header />

    <main>
        <div>
            <img src="./img/elias313_40.jpg" alt="الهم عجل لولیک الفرج" class="headImg">
        </div>

        <div class="recentCourse">
            <h2 class="titr">در حال یادگیری:</h2>
            @foreach($notCompleteCourses as $course)
            <div class="course">
                <div class="img">
                    <img src="{{$course->img}}" alt="درس 1" class="content-img">
                </div>
                <div class="caption">
                    <h3 class="caption-titr">{{$course->name}}</h3>
                    <p class="description">{{$course->description}}</p>
                </div>
                <div class="btn">
                    <a href="{{route('showCourse', ['id' => $course->id])}}" class="unbutton">مشاهده</a>
                </div>
            </div>
            @endforeach
        </div>        
    </main>
    
    @include('include.footer')
    
</body>
</html>