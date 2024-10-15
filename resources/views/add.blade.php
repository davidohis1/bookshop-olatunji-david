<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        *{
            width: 100%;
        }
        body{
            background-image: url('/css/laptop1.webp');
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center" style="height:100%;">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6 bg-white pt-3" style="height:100%;">
            @if (Session::has('success'))
                <div class="alert alert-success" style="z-index:1;">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="text-center fw-bold">Add Product</h3>
            <div class="pt-2">
                <div class="px-5">
                    <form action="{{ route('add-item') }}" method="post" id="add">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class=" col-form-label text-left fw-bold">Name</label><br>
                            <div class="">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class=" col-form-label text-left fw-bold">Price</label>
                            <div class="">
                              <input type="price" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                                @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="market-price" class=" col-form-label text-left fw-bold">Market Price</label>
                            <div class="">
                              <input type="market-price" class="form-control @error('market-price') is-invalid @enderror" id="market-price" name="marketprice">
                                @if ($errors->has('marketprice'))
                                    <span class="text-danger">{{ $errors->first('marketprice') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="quantity" class=" col-form-label text-left fw-bold">Quantity</label>
                            <div class="">
                              <input type="quantity" class="form-control" id="quantity" name="quantity">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="description" class=" col-form-label text-left fw-bold">description</label>
                            <div class="">
                              <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn fw-bold text-white" style="background-color:rgb(75, 75, 75);" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>

    <script>
        $(document).ready(function(){
            $('add').submit(function(e){
                e.preventDefault();

                const formData = new FormData(form);

                $.ajax({
                    type: 'post',
                    url: '{{route('add-item')}}',
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
    </script>
</body>
</html>

