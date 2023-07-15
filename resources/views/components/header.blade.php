<div>
<?php
function fa_num($number)
{
    if(!is_numeric($number) || empty($number))
    $en = array("0","1","2","3","4","5","6","7","8","9");
    $fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
    return str_replace($en, $fa, $number);
}
?>

<head>
    <link rel="stylesheet" href="{{url('/css/header.css')}}">
    <script src="{{url('/js/all.min.js')}}"></script>
</head>

<body dir="rtl">
    <header class="header">
        <div class="right-head">
            <a href="#" class="icon menu-icon" onclick="shwoMenu()" id="1">
                <i class="fa-solid fa-bars-staggered fa-xl"></i>
            </a>
            <div class="menubar-and-filter">
                <div class="menubar" id="menubar">
                    <i class="fas fa-close fa-xl " onclick="hideMenu();" id="hide-menu" ></i>
                    <div class="menubar-title">
                        <h2>آموزش برنامه نویسی</h2>
                    </div>
                    
                    <ul>
                        <!-- === home === -->
                        <li>
                            <a href="{{route('showHome')}}">
                                <div class="menubar-item">
                                    <div class="menubar-item-right">
                                        <i class="fas fa-home"></i>
                                        <div class="menubar-item-text">
                                            خانه    
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- === courses === -->
                        <li id="course">                                
                            <div class="menubar-item"  onclick="showHideCourse()">
                                <div class="menubar-item-right">
                                    <i class="fas fa-book-open"></i>
                                    <div class="menubar-item-text">
                                        درس‌ها
                                    </div>
                                </div>    
                                <div>
                                    <i class="fas fa-angle-down"  id="showCourse"></i>
                                    <i class="fas fa-angle-up hide-child" id="hideCourse"></i>
                                </div>
                            </div>
                            <!-- === courses name === -->
                            <ul class="menu-child-title">
                                <li class="child-part">
                                    <a href="{{route('showYourCourses')}}">همه درس‌ها</a>
                                </li>
                                @foreach($courses as $course)
                                <li class="child-part">
                                    <a href="{{route('showCourse', ['id' => $course->id])}}">{{$course->name}}</a>
                                </li>
                                @endforeach
                            </ul>                             
                        </li>

                        <!-- === question and answer === -->
                        <li>
                            <div class="menubar-item" onclick="updateMes();">
                                <div class="menubar-item-right">
                                    <i class="fas fa-message"></i>
                                    <div class="menubar-item-text">
                                        پرسش و پاسخ
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- === profile === -->
                        <li>
                            <div class="menubar-item" onclick="updateMes();">
                                <div class="menubar-item-right">
                                    <i class="fas fa-user "></i>
                                    <div class="menubar-item-text">
                                        پروفایل شما
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <a href="#" onclick="hideMenu();">
                    <div id="filter" >
                    </div>
                </a>
            </div>

            <div class="hi-and-date">
                <div class="hi">
                    سلام محمد علی عزیز! 👋 
                </div>
                <div class="date" style="font-feature-settings: 'ss01';">
                <script src="{{url('/js/date.js')}}"></script>
                </div>
            </div> 
        </div>
        <div class="left-head">
            <a href="#" class="log-out icon">
                <i class="fa-solid fa-right-from-bracket fa-xl"></i>
            </a>
           
        </div>
            
    </header>
   
    <script src="{{url('/js/function.js')}}"></script>
</body>
</html>
</div>