


<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($prodotto as $item)
                
            <div class="col-4">
                <x-dettcard
                name="{{$item['name']}}"
                img="{{$item['foto']}}"
                url="{{route('shopdettaglio',['name'=>$item['name']])}}"
                />
            </div>
            @endforeach
            
            
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
            
            </div>
        </div>
    </div>
    
    
</x-layout>