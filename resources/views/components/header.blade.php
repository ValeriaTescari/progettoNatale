
@switch(Route::CurrentRouteName())
@case('homepage')
<div class="container-fluid header-img">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 ">
            <h1 class="text-white text-center">Buon Natale</h1>
        </div>
    </div>
</div>
@break
@case('chi-siamo')

<div class="container-fluid header-img1">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 ">
            <h1 class="text-white text-center">Noi siamo gli aiutanti di Babbo Natale</h1>
            
        </div>
    </div>
</div>
@break

@case('shop.allcategory')
<div class="container-fluid header-img2">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 ">
            <h1 class="text-white text-center">Benvenuti nello shop</h1>
            
        </div>
    </div>
</div>
@break
@case('')
@break
@case('')
@break
@default

@endswitch