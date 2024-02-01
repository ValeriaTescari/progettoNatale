<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-evenly align-items-center">
            
            @foreach ($prodotti as $prodotto)
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-evenly align-items-center  ">
                <x-dettcard
                name="{{$prodotto['name']}}"
                img="{{$prodotto['foto']}}"
                url="{{route('shopdettaglio',['name'=>$prodotto['name']])}}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>