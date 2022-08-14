<div>
<div class="container">     
    <div class="item-list">
    @foreach($extras as $extra)   
        <div class="item" style="margin-top:40px;height:160px;">         
                <div class="item-detail" style="margin-top:20px;">
                    <a href="#" wire:click.prevent="store_extra({{$extra->id}},{{$extra->price}},'{{$extra->name}}')" class="item-name">{{$extra->name}}</a>
                    <div class="item-price">
                        <span class="item-price">
                        <span class="new-price">{{$extra->price}}DH</span>
                    </div>
                    <div class="col-xs-12 col-md-6" style="margin-left:50px;">
                        <a class="btn btn-success" wire:click.prevent="store_extra({{$extra->id}},{{$extra->price}},'{{$extra->name}}')" style="background-color:#130690e0;border:none;" href="#">Ajouté</a>
                    </div>
                </div>        
        </div>
        @endforeach
    </div>

</div>
</div>
