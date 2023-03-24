{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Welfare Request System</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="data:image/png;base64,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" alt="logoclickNext">
                </span>
                <div class="text logo-text">
                    <span class="name">ClickNext</span>
                    <span class="profession">Welfare Request System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <div id="profile" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="https://cdn-icons-png.flaticon.com/512/219/219983.png" id = "img_profile">
                    <span class="text nav-text" id = "nameprofile">{{ Auth::user()->name }}</span>


                </div>
                <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->

                <ul class="menu-links">

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">เบิกสวัสดิการรายบุคคล</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">เบิกสวัสดิการรายกลุ่ม</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-history icon' ></i>
                            <span class="text nav-text">ประวัติการทำรายการ</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                    <li class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class='bx bx-log-out icon' ></i>
                                         <span class="text nav-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                            @csrf
                         </form>
                    </li>

                {{-- <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> --}}
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="container">
            <div class="textHeader">
                การเบิกสวัสดิการรายบุคคล
            </div>
            <form action="">
            {{-- <div class="container" id="container1">

                <div class="row">
                 <div class="col-75">
                    <img src="https://cdn-icons-png.flaticon.com/512/8068/8068017.png" alt="" width="32px" height="32px">
                    <h4 for="date_welfare">วันที่ทำรายการ</h4>
                    <input type="date" name="date_welfare" id="date_welfare">
                 </div>
                </div>
            </div> --}}

            {{-- <div class="container" id="container1">
                <div class="row">
                    <div class="col-75">
                        <img src="https://cdn-icons-png.flaticon.com/512/8068/8068073.png" alt="" width="32px" height="32px">
                        <h4 for="category">หมวดหมู่สวัสดิการ</h4>
                            <select id="category" name="category">
                                <option value="0">กรุณาเลือกหมวดหมู่สวัสดิการ</option>
                                <option value="1">สวัสดิการ 2,000 บาท</option>
                                <option value="2">สวัสดิการช่วยเหลืองานสมรส</option>
                                <option value="3">สวัสกดิการเงินรับขวัญบุตรพนักงาน</option>
                                <option value="4">สวัสกดิการช่วยเหลืองานฌาปนกิจ</option>
                                <option value="5">สวัสกดิการช่วยเหลือค่ารักษาพยาบาล บิดา/มารดา</option>
                            </select>
                    </div>
                </div>
            </div> --}}
            <div class="container" id="container1">
            <div class="row">
                <div class="col-75text">
                    <img src="https://cdn-icons-png.flaticon.com/512/8068/8068017.png" alt="" width="32px" height="32px" class = "imgNumber">
                    <h4 for="date_welfare">วันที่ทำรายการ</h4>
                    <input type="date" name="date_welfare" id="date_welfare"><br>
                    <img src="https://cdn-icons-png.flaticon.com/512/8068/8068073.png" alt="" width="32px" height="32px" class = "imgNumber"><br>
                    <h4 for="category">หมวดหมู่สวัสดิการ</h4>
                        <select id="category" name="category">
                            <option value="0">กรุณาเลือกหมวดหมู่สวัสดิการ</option>
                            <option value="1">สวัสดิการ 2,000 บาท</option>
                            <option value="2">สวัสดิการช่วยเหลืองานสมรส</option>
                            <option value="3">สวัสกดิการเงินรับขวัญบุตรพนักงาน</option>
                            <option value="4">สวัสกดิการช่วยเหลืองานฌาปนกิจ</option>
                            <option value="5">สวัสกดิการช่วยเหลือค่ารักษาพยาบาล บิดา/มารดา</option>
                        </select>
                        <br>
                    <img src="https://cdn-icons-png.flaticon.com/512/8068/8068129.png" alt="" width="32px" height="32px" class = "imgNumber">
                    <h4 for="title_welfare">หัวข้อทำรายการ</h4>
                    <input type="text" id="title_welfare" name="title_welfare" placeholder="หัวข้อทำรายการ">
                    <h4 for="amount">จำนวนเงิน (บาท)</h4>
                    <input type="number" id="amount" name="amount" class = "money"placeholder="จำนวนเงิน">
                    <h4 for="up_file">ไฟล์แนบ</h4>
                    <input type="file" name="up_file" id="up_file"><br>
                    <input type="button" class="mybox" value=" + " onclick="addBox()">

                </div>

                <div id = "hob"></div>
              </div>
            </div>
            <br>
            <div class="row">
              <input type="submit" value="ส่ง">
            </div>
            </form>
        </div>
    </section>
        {{-- js addbox&removebox --}}
    <script>
        var counter = 1;
        var textBox ="";
        var hob = document.getElementById("hob");
        function addBox()
        {
            var div = document.createElement("div");
            div.setAttribute("class","col-75text");
            div.setAttribute("id","box_"+counter);
            var textBox = '<h4>หัวข้อทำรายการ </h4><input type="text" id="title_welfare" '+ counter +' name="title_welfare" placeholder="หัวข้อทำรายการ"><h4 for="amount">จำนวนเงิน</h4> <input type="number" id="amount" name="amount" class = "money" placeholder="จำนวนเงิน"><h4 for="up_file">ไฟล์แนบ</h4><input type="file" name="up_file" id="up_file"><br> <input type="button" class="mybox" value=" + " onclick="addBox()"> <input type="button" class="mybox1" value="  -  " onclick="removeBox(this)">' ;
            div.innerHTML = textBox;
            hob.appendChild(div);
            counter++;

        }

        function removeBox(ele){
            ele.parentNode.remove();
        }
    </script>
    {{-- cssform --}}
    <style>
        * {
          box-sizing: border-box;
        }

        .textHeader{
            display: flex;
            justify-content: center;
            font-size: 40px;
        }

        .imgNumber{
            margin-top: 15px;
        }

        .mybox{
            font-size: 15px;
            margin-top: 20px;
            background: greenyellow;
            border: 0.4px solid rgb(199, 199, 199);
        }
        .mybox1{
            font-size: 15px;
            margin-top: 20px;
            background: rgb(255, 85, 85);
            border: 0.4px solid rgb(199, 199, 199);
        }
        #date_welfare{
            width: 40%;
        }

        .money{
            width: 25%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        input[type=text], select, textarea,[type=date]{
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }


        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }

        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        #container1{

          background: rgba(255, 255, 255);
          margin-top: 10px;
          border: 1px solid rgb(199, 199, 199);
          box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.25);
          max-width: 100%;
        }
        .container {

          border-radius: 25px;
          padding: 20px;
        }

        .col-25 {
          display: flex;
          float: left;
          width: 10%;
          margin-top: 6px;

        }

        .col-75,.col-75text {

          float: right;
          width: 95%;
          margin-top: 6px;

        }

        h4{
            margin-top: 8px;
            margin-bottom: 10px;
        }

        /* Clear floats after the columns */
        .row::after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

// searchBtn.addEventListener("click" , () =>{
//     sidebar.classList.remove("close");
// })

// modeSwitch.addEventListener("click" , () =>{
//     body.classList.toggle("dark");

//     if(body.classList.contains("dark")){
//         modeText.innerText = "Light mode";
//     }else{
//         modeText.innerText = "Dark mode";

//     }
// });
    </script>

</body>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family :'Times New Roman', Times, serif;
}

:root{
    --body-color: #FFE6E6;
    --sidebar-color: #FFF;
    --primary-color: #e1032e;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #000000;

    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}
.contraner{
display: flex;
flex-direction: column;
}
body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

/* body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
} */

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    border: 0.5px solid rgb(204, 204, 204);
    border-radius: 0px 30px 30px 0px;
    height: 100%;
    width: 262px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;

}

.sidebar.close{
    width: 88px;
}

/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}



#nameprofile{
    font-size: 25px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;

}
.sidebar.close #nameprofile{
    opacity: 0;
}

.sidebar.close #img_profile{
    position: relative;
    left: -6px;
    top: 15px;
    width: 50px;
    height: 50px;
    white-space: nowrap;
}
/* =========================== */

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

/* .sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
} */

/* .sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
} */
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
/* body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
} */

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
}

#profile{
    position: relative;
    left: 10px;

}
.name{
    color: #e1032e;
}

.profession{
    color: #5f5f5f;
}
.text{
    display: flex;
    justify-content: center;

}

.logo-text{
    text-shadow: 0px 4px 4px rgba(0,0,0,0.25);
}

#nameprofile{
    font-size: 25px;
    display: flex;
    justify-content: center;
}

#img_profile{
    width: 80px;
    height: 80px;
    position: relative;
    left: 77px;
}


</style>
</html>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welfare System ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome To Welfare') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
