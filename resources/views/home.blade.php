<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffs Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
                <li><input type="text" class="input"  name="search" placeholder="search products"></li>
                <li><input type="submit" class="submit" name="submit" value="search products"></li>
                </form>
                <li><input type="text" class="input"  name="search" placeholder="search products"></li>
                <li><select name="brand" class="input" id="brand">
                    <option value="">Techno</option>
                    <option value="">Iphone</option>
                    <option value="">Samsung</option>
                </select></li>
                <li><input type="submit" name="submit" class="submit"></li>
                </form>
            </ul>
        </div>
        <div class="content" style="height:100%;width:100%;">
            <nav style="display:flex;justify-content:center;text-align:center;">
                    <h3 style="justify-content:center;text-align:center;">- David Ohiwerei <span><img src="/images/people.png" alt="people" style="width:27px;justify-content:center;"></span></h3>
                    
            </nav>
            <h3 class="text-center place2">Place Order</h3>
            <div class="pt-0">
                
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        @if (Session::has('success'))
                            <div class="alert alert-success" style="z-index:1;">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                    <div id="msg">
                        <h1></h1>
                    </div>
                    @foreach ($sites as $sites)                
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex mx-2 flex-column product-item my-3" id="product">
                        <div class="product pt-3" > 
                            <a onclick="view({{ $sites->id }})">
                            <img src="/css/laptop1.webp" alt="" style="width:100%;overflow-y:hidden;border-radius: 20px;">
                            </a>
                        </div>
                        <div class="text-center pt-3">
                            <form action="{{route('placeorder')}}" method="post" class="form" >
                            @csrf
                            <h1 class="title pt-0 pb-1 ">{{ $sites-> name }}</h1>
                            <h2 class="title pt-0 pb-1">{{ $sites-> quantity }} quantity left</h2>
                            <h3 class="price">#{{ $sites-> price }}</h3>
                            <p><input type="text" value="{{$sites->id}}" name="id" hidden></p>
                            <p><input type="text" value="{{$sites->name}}" name="name" hidden></p>
                            <p><input type="text" value="{{$sites->description}}" name="description" hidden></p>
                            <p><input type="text" value="{{$sites->price}}" name="price" hidden></p>
                            <p><input type="text" value="{{$sites->marketprice}}" name="marketprice" hidden></p>
                            <select name="quantity" id="quantity">
                                @for($i=1;$i<=$sites->quantity;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            <input type="submit" value="Place Order" name="submit" class="submit2">
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        $(document).ready(function(){
            $('submitpost').submit(function(e){
                e.preventDefault();

                const formData = new FormData(form);

                $.ajax({
                    type: 'post',
                    url: '{{route('placeorder')}}',
                    data: formData,
                    dataType: 'json',
                    success: function(response){
                        $('#msg').text(response.message);

                    } 
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                })
            })
        })
    </script> -->
</body>
</html>

