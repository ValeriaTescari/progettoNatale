

<x-layout>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">Scegli il tuo regalo di natale</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-evenly align-items-center">
            
            @foreach ($categorie as $categoria)
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-evenly align-items-center ">
                <x-card
                img="{{$categoria['foto']}}" 
                name="{{$categoria['name']}}"
                url="{{route('shop',['name'=>$categoria['name']])}}"
                />
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid mb-5 mt-3">
        <div class="row justify_content-center">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column  ">
                <h1>I servizi personalizzati sono:</h1>
               <a href="/contattaci"> <button type="button" class="btn bg-danger text-white">scegli</button></a>
            </div>
        </div>
    </div>
    
</x-layout>

