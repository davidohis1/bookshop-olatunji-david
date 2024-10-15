<?php
// require 'connect.php';


// if(empty($_SESSION['id'])){
// 	header("Location: login2.php"); 
//   }
  
// function FilterTable($query){
//     $connect = mysqli_connect('localhost', 'root', '', 'accomodation');
//     $FilterResult = mysqli_query($connect, $query);
//     return $FilterResult;
// }

// $query = "SELECT * FROM product ORDER BY id DESC LIMIT 6";
// $SearchResult = FilterTable($query);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome 5 CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/index2.css">
<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
<style>
    body{
        width:100%;
        margin:0;
        padding:0;
    }

    header{
        background-image:  linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(/images/house1.webp);
    }
</style>
</head>
<body>
	<header>
        <nav>
            @if(Session::has('loginId'))
            <ul>
                <li><a href="{{URL('dashboard')}}">Dashboard</a></li>
                <li><a href="{{URL('logout')}}">Logout</a></li>
            </ul>
            @endif
            @if(!Session::has('loginId'))
            <ul>
                <li><a href="{{URL('login')}}">Login</a></li>
                <li><a href="{{URL('register')}}">Register</a></li>
            </ul>
            @endif
        </nav>
        <h1 class="text-center text-white fw-bold head" style="font-size:65px;">UNILODGEHUB</h1>
        <div>
            <form action="{{ route('Rooms.search')}}" method="post" style="text-align: center; justify-content: center;">
            @csrf
                <input class="input1" name="search"  placeholder="Search for Accommodation">
                <input type="submit" class="btn2" value="search" name="submit">
            </form>
        </div>
    </header>
    <div class="container-xl row mt-5">
        <div class="col-lg-3 text-left px-1">
            <h3 class="text-center fw-100 mt-3 ">Advanced Filter</h3>
            <div class="my-3">
                <label for="" class="text-left">Minimum Price</label>
                <input class="form-control" type="num" name="search" placeholder="Minimum Price" value="0"> 
            </div>
            <div class="my-3">
                <label for="" class="text-left">Maximum Price</label>
                <input class="form-control" type="num" name="search" placeholder="Maximum Price" value="0"> 
            </div>
            <div class="my-3">
                <label for="" class="text-left">Location</label>
                <select name="location" class="" id="type">
                    <option value="">Ekosodin</option>
                    <option value="">BDPA</option>
                    <option value="">Bundary</option>
                </select>
            </div>
            <div class="my-3">
                <label for="" class="text-left">Room Type</label>
                <select name="type" class="" id="type">
                    <option value="">Self-Contain </option>
                    <option value="">Single_Room</option>
                </select>
            </div>
            <div class="my-3">
                <label for="" class="text-left">Distance From Campus</label>
                <input class="form-control" type="num" name="dist" value="0"> 
            </div>
            <div class="my-3">
                <input type="submit" value="Submit" class="submit">
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row" id="row">
                @foreach ($rooms as $room)                
                <div class="col-lg-3 col-sm-6 d-flex mx-2 flex-column product-item my-3" id="product">
                    <div class="product pt-3" > 
                        <a onclick="view({{ $room->id }})">
						<img src="images/images (1).jpg" alt="" style="width:100%;overflow-y:hidden;border-radius: 20px;">
                        </a>
                        <ul class="d-flex mt-3 align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><img src="images/heart.png" width="20px" alt=""></span></li>
                            <li class="icon mx-3"><img src="images/messenger (1).png" width="20px" alt=""></span></li>
                            <li class="icon"><img src="images/telephone.png" width="20px" alt=""></span></li>
                        </ul>
                    </div>
                    <div class="text-center pt-0">
                        <div class="tag bg-red fw-bold mb-2" style="font-size:13px;">
						<img src="/images/location.png" width="13px" alt=""> <span class="span5">{{ $room-> place }}</span>
					</div>
                        <h1 class="title pt-0 pb-1 fw-bold" style="font-size:20px;">{{ $room-> name }}</h1>
                        <h2 class="title2 pt-1 pb-1 " style="font-size:15px;">{{ $room-> location }}</h2>
                        <h3 class="price fw-bold" style="font-size:20px;">#{{ $room-> price }},000</h3>
                    </div>
                </div>
                @endforeach

                <div class="py-5 mt-4" style="justify-content:center;width:100%;background-color:red;">
                    <h1 class="text-white text-center" id="banner1">GET LATEST ACCOMMODATION AROUND CAMPUS </h1>
                </div>

				
            </div>
        </div>
	</div>

    <!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function view(id){
        location.href= "view/"+ id;        
    }
</script>
</body>
</html>