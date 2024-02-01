<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($prodotto as $item)
            
            <div class="col-12 d-flex justify-content-center">
                <x-card55
                name="{{$item['name']}}"
                img="{{$item['foto']}}"
                trama="{{$item['trama']}}"
                />
            </div>
            @endforeach
            
            
        </div>
    </div>

    
    
    
    
    <x-form/>
    
    
</x-layout>