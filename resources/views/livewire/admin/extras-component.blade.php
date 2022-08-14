<div>
   <style>
      nav svg{
        height: 20px;
      }
      nav .hidden{
        display: block !important;
      }
    </style>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
             <div class="panel panel-default">
                <div class="panel-heading">
                <div class="row">
                    <div style="font-size:25px;color:white;font-weight:600;"  class="col-md-6">
                         Supplements
                    </div>

                    <div class="col-md-6"  style="margin-left:88%;">
                        <a href="{{route('admin.addextra')}}" style="font-size:18px;background-color:#fab452;font-weight:600;" class="btn btn-success">Add new </a>                          
                    </div>

                    </div>      
                </div>

               <div class="panel-body">
                  
                   <table class="table table-hover" style="border: 1px solid #ddd;">
                        <thead class="thead-dark">
                          <tr>  
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>                   
                            <th scope="col">Price</th> 
                            <th scope="col">Category</th> 
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>                                
                         </tr>
                        </thead>

                         <tbody>
                             @foreach($extras as $product)
                            <tr>
                            <td>{{$product->id}}</td>                           
                            <td>{{$product->name}}</td>                            
                            <td>{{$product->price}}DH</td> 
                            <td>{{$product->category->name}}</td> 
                            <td>{{$product->created_at}}</td>
                            
                            <td>
                            <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                            <a href="#" wire:click.prevent="deleteExtra({{$product->id}})" style="margin-left:10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
                            </td>                          
                            </tr> 
                            @endforeach                        
                         </tbody>                      
                    </table> 
                    {{$extras->links()}}
                </div>
             </div>
           </div>
        </div>
    </div>
