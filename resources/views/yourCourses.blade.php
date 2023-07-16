<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس‌های شما</title>
    <link rel="icon" href="{{url('/img/313 icon.ico')}}">
    <link rel="stylesheet" href="{{url('/css/reset200802.css')}}">
    <link rel="stylesheet" href="{{url('/Fonts/vazirmatn/Vazirmatn-font-face.css')}}">
    <link rel="stylesheet" href="{{url('/css/yourCourses.css')}}">

</head>
<body dir="rtl" class="continer">  

    <x-header/>
        
    <main>
        <div class="course">
            <div class="course-head">
                <div>
                    <h2 class="titr">درس های شما:</h2>
                </div>
                
            </div>
            <div id="contents">
                @foreach($courses as $course)
                <div class="content">
                    <div class="img">
                        <img src="{{$course->img}}" alt="درس 1" class="content-img">
                    </div>
                    <div class="caption">
                        <h3 class="caption-titr">{{$course->name}}</h3>
                        <p class="description">{{$course->description}}</p>
                    </div>
                    <div class="btn">
                        <a href="{{route('showCourse' , ['course' => $course->id])}}" class="unbutton">مشاهده</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    @include('include.footer')

    
</body>
</html>