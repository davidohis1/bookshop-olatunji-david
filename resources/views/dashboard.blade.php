<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="justify-content-center" style="height:100%;display:flex;">
        <div class="bg-secondary text-white sidebar">
        <h2>Filter Products</h2>
            <ul>
                <form action="{{route('search')}}" method="post">
                    @csrf
                <li><input type="text" class="input"  name="search" placeholder="search products">
                <input type="submit" class="submit" name="submit" value="search products"></li>
                </form>
                <a href="{{URL('dashboard')}}"><li class="list">Dashboard</li></a>
                <a href="{{URL('finished')}}"><li class="list">Products Exhausted <span>{{$finished}}</span></li></a>
                <a href="{{URL('last')}}"><li class="list">Low quantity Products <span>{{$last}}</span></li></a>
            </ul>
        </div>
        <div class="content" style="height:100%;width:100%;">
            <nav class="" style="flex">
                <div class="row">
                <form action="{{route('dashboard')}}" class="col-md-4">
                    <div class="row">
                        <input type="date" name="date" id="date" class="col-md-9">
                        <input type="submit" name="submit" value="search" class="col-md-3 sub">
                    </div>
                </form>
                <form action="{{route('dashboard')}}" class="col-md-4">
                    @csrf
                    <div class="row">
                        <input type="text" name="search" id="date" placeholder="search products" class="col-md-9">
                        <input type="submit" name="submit" value="search" class="col-md-3 sub">
                    </div>
                </form>
                <form action="{{route('dashboard')}}" class="col-md-4">
                    <div class="row">
                        <select name="time" id="time" class="col-md-9">
                            <option value="today">Today</option>
                            <option value="week">Last 7 days</option>
                            <option value="month">Last 30 days</option>
                        </select>
                        <input type="submit" name="submit" value="filter" class="col-md-3 sub">
                    </div>
                </form>
                </div>
            </nav>

            <div class="cont">
                <h3 class="text-center place">Admin Dashboard</h3>
            </div>
            <div class="pt-3">
                <div class="row justify-content-center">
                    <div class="col-md-3 card1">
                    <?php $quantity = 0;?>
                       
                        <h2>{{$site}}</h2>
                        <h3>Products</h3>
                    </div>
                    <div class="col-md-3 card1">
                    <?php $quantity = 0;?>
                        @foreach($orders as $sites)
                        <?php
                        $quantity += intval($sites->quantity);
                        ?>
                         @endforeach
                        <h2><?php echo $quantity;?></h2>
                        <h3>Sales</h3>
                    </div>
                    <div class="col-md-3 card1">
                        <?php $price = 0;?>
                        @foreach($orders as $sites)
                        <?php
                        $price1 = intval($sites->quantity) * intval($sites->price);
                        $price += intval($price1);
                        ?>
                         @endforeach
                        <h2><?php echo $price;?></h2>
                        <h3>Revenue</h3>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                <h3 class="text-center place">{{$place}} Sales</h3>
                @foreach($orders as $sites)
                
                <div class="col-lg-3 col-sm-6 d-flex mx-2 flex-column product-item my-3" id="product">
                    <div class="product pt-3" > 
                        <a onclick="view({{ $sites->id }})">
						<img src="/css/laptop1.webp" alt="" style="width:100%;overflow-y:hidden;border-radius: 20px;">
                        </a>
                    </div>
                    <div class="text-center pt-0 form">
                        <h1 class="title pt-0 pb-1 ">{{ $sites-> name }}</h1>
                        <h4 class="title pt-0 pb-1 ">{{ $sites-> date }}</h1>
                        <h2 class="title pt-0 pb-1">{{ $sites-> quantity }} quantity left</h2>
                        <h3 class="price">#{{ $sites-> price }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

