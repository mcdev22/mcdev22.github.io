<div class="cart-page">
   <table  class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Quantité</th>               
                <th scope="col">Prix</th> 
                <th scope="col">Action</th> 
            </tr>
       </thead>
      <tbody>
      @foreach($cartitems as $item)
        <tr style="background:#fcd9c2;">
            <td>{{$item->name}}</td>
            <td>
                <div class="quantity buttons_added">
                    <a href="#"   wire:click.prevent="descreaseQuantity('{{$item->id}}')"  class="minus">-</a>
                    <input type="text" data-max="120" pattern="[0-9]*" name="quantity" value="{{$item->quantity}}"  class="input-text qty text" >
                    <a  href="#"  wire:click.prevent="increaseQuantity('{{$item->id}}')" class="plus">+</a>
                </div>
            </td>
            <td>{{$item->price}}dh</td>          
            <td>
             <a href="#" wire:click.prevent="destroy('{{$item->id}}')" style="margin-left:10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
            </td>
        </tr>
      </tbody>
     @endforeach
   </table>
</div>
