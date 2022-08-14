
<div class="container">      
    <div class="item-list"> 
    @foreach($products as $product)        
        <div class="item">          
            <div class="item-img">
                <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})"><img src="../assets/images/products/{{$product->image}}"></a>                                       
            </div>
            <div class="item-detail">
                <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})" class="item-name">{{$product->name}}</a>
                <div class="item-price">
                    <span class="item-price">
                    <span class="new-price">{{$product->price}}DH</span>
                </div>
            </div> 
        </div>
    @endforeach
    </div>
</div>





