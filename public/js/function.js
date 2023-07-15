function shwoMenu() {
    var menubar = document.getElementById("menubar");
    menubar.style.right="0";

    var filter = document.getElementById("filter");
    filter.style.display = "block";
    setTimeout(() => {
        filter.style.opacity = "100"    
    }, 1);
    
    //اسکرول غیرفعال میشه
    document.body.style.overflow="hidden"
    // اسکرول منو فعال میشه
    document.getElementById("menubar").style.overflow="auto"
};

function hideMenu() {
    var menubar = document.getElementById("menubar");
    menubar.style.right="-70%";

    var filter = document.getElementById("filter");
    filter.style.display = "none";
    setTimeout(() => {
        filter.style.opacity = "100"    
    }, 2);
    
    //اسکرول فعال میشه
    document.body.style.overflow="auto"
}

function showHideCourse() {
    let display = document.getElementById("course").querySelector("ul").style.display;

    if (display != "block") {
        document.getElementById("showCourse").style.display = "none";
    
        document.getElementById("course").querySelector("ul").style.display = "block";
    
        document.getElementById("hideCourse").style.display = "block";
    } else {
        document.getElementById("hideCourse").style.display = "none";

        document.getElementById("course").querySelector("ul").style.display = "none";
    
        document.getElementById("showCourse").style.display = "block";
    }
}

function showHideReports() {
    let display = document.getElementById("reports").querySelector("ul").style.display;
    if (display != "block") {
        document.getElementById("showReports").style.display = "none";
    
        document.getElementById("reports").querySelector("ul").style.display = "block";
    
    
        document.getElementById("hideReports").style.display = "block";
    } else {
        document.getElementById("hideReports").style.display = "none";

        document.getElementById("reports").querySelector("ul").style.display = "none";


        document.getElementById("showReports").style.display = "block";
    }
}

function updateMes() {
    alert("این قسمت در حال آماده‌سازی می‌باشد، ان‌شاءالله به زودی در دسترس قرار خواهد گرفت.")
}

var index = 1;

function addUploader() {
    
    let uploaderDiv = document.createElement("div");
    uploaderDiv.setAttribute("class", "uploader")

    uploaderDiv.innerHTML = "<input type=\"file\" name=\"upload-"+index+"\" id=\"upload-"+index+"\" class=\"upload\"> <label class=\"btn ctrlBox ctrl btnHover\" id=\"btn-"+index+"\" for=\"upload-"+index+"\" onclick=\"elId(this)\">انتخاب فایل</label> <input type=\"text\" readonly class=\"ctrlBox ctrl fName\" id=\"fName-"+index+"\" placeholder=\"فایلی انتخاب نشده است!\">";

    index+=1;

    let box = document.getElementById('upBoxes');
    box.appendChild(uploaderDiv);
}

function elId(el) {
    let parent = el.parentElement;
    let fileInput = parent.firstElementChild;
    let textInput = parent.lastElementChild;

    fileInput.addEventListener("change", ch)
    function ch() {
        textInput.value = fileInput.value;
    };
}

// function new_file_input(upload_type){
//     $(document).ready(function(){
//         $("input[type=file]").change(function(){
//             $(this).parents(".uploader").find(".filename").val($(this).val());
//         });
//         $("input[type=file]").each(function(){
//             if($(this).val()==""){
//             $(this).parents(".uploader").find(".filename").val("فایل مورد نظر را انتخاب نمایید");
//         }
//         });
//     });
//     var block_id=fetchElementById("more_file_inputs");
//     if(index_amf_total<index_amf_max){
//         var file_id=("file-"+index_amf_total);
//         var file_div=document.createElement("div");
//         file_div.setAttribute("id",file_id);
//         if(upload_type=="url"){
//             file_div.innerHTML+="<input name=\"userfile[]\" type=\"text\" class=\"url_upload\" style=\"width:235px\" /> ";
//         }else{
//             file_div.innerHTML+="<input name=\"userfile[]\" type=\"file\" size=\"20\" /> ";
//         }
//     file_div.innerHTML+="<input type=\"button\" class=\"red button\" onclick=\"javascript:remove_file_input('"+file_id+"');\" value=\"حذف\" /> <br />";
//     index_amf_total++;
//     block_id.appendChild(file_div);
//     }else{
//         alert("شما حداکثر تا"+" ["+index_amf_max+"] "+"فایل میتوانید اضافه کنید");}
//     return true;}