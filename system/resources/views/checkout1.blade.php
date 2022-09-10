

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BayyStore</title>
<link href="{{url('public')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('public')}}/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{url('public')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{url('public')}}/js/easing.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
      @include('template.section.headerweb')
   
		<div class="banner banner-in"></div>
<hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <div class="content-grid">
                            <div class="check-out">
                            <h2 class="w-100 text-center" style="color: rgb(148, 121, 87)"> CHECKOUT </h2>
                                <h3 class="future"></h3>
                               <h4 class="w-100 text-center">&mdash; ISI ALAMAT PENGIRIMAN &mdash;</h4>
                                <div class="clearfix"></div> 
                                </div>
                        </div> 
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Provinsi</label>
                               <select name="" class="form-control" style="color: black" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($list_provinsi as $provinsi)
                                 <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                @endforeach
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kabupaten/Kota</label>
                               <select name="" class="form-control" id="kabupaten" style="color: black" onchange="gantiKabupaten(this.value)">
                               <option value=""> Pilih Provinsi Terlebih Dahulu</option>                                
                            </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kecamatan</label>
                               <select name="" class="form-control" id="kecamatan" style="color: black" onchange="gantiKecamatan(this.value)">
                                <option value=""> Pilih Kabupaten Terlebih Dahulu</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Desa</label>
                               <select name="" class="form-control" id="desa" style="color: black">
                                <option value=""> Pilih Kecamatan Terlebih Dahulu</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                     <h3 class="future"></h3>
                </div>
            </div>
        </div>
    </div>
                        <div class="w-100 text-center">
                            <div class="form-in"> 
                                <a href="{{url('checkout1')}}" class="hvr-shutter-in-horizontal">PROCEED TO BUY</a>
                            </div>
					    </div>
                            <hr>
        @include('template.section.footerweb')
</body>
</html>


<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#kabupaten").html(option)
        });
    }
    function gantiKabupaten(id) {
        $.get("api/kabupaten/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }
    function gantiKecamatan(id) {
        $.get("api/kecamatan/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>