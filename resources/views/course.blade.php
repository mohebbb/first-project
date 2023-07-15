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
    <link rel="stylesheet" href="{{url('/css/course.css')}}">
</head>
<body dir="rtl" class="continer">    

    <x-header/>        
        
    <main>
        <div class="main">
            <div class="card">
                <div class="content">
                    <div class="pic-and-title">
                        <img src="{{$course->img}}" alt="درس 1" class="img">
                        <h2 class="title">{{$course->name}}</h2>   
                    </div>    
                    <div class="description block">
                        <h2 class="description-title">توضیحات:</h2>
                        <div class="description-text">
                            <p>{{$course->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('include.footer')
    
</body>
</html>