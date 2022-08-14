<div>
   <style>
      nav svg{
        height: 20px;
      }
      nav .hidden{
        display: block !important;
      }
    </style>
    <div class="container" style="margin-top:40px;">
      <div class="row">
          <div class="col-md-12">
             <div class="panel panel-default">
                <div class="panel-heading">
                <div class="row"> 
                    <h3 style="color:white;">List des caissiers<h3>         
                    <div class="col-md-6"  style="margin-left:80%;">
                        <a href="{{route('admin.addcaissier')}}" style="font-size:17px;font-weight:600;background-color:#f7862a;color:white;" class="btn btn-success">Ajouter Caissier</a>                          
                    </div>
                         
                </div>

               <div class="panel-body">
                   
                   <table class="table table-hover" style="border: 1px solid #ddd;width:70%;margin-left:100px;">
                        <thead class="thead-dark" >
                          <tr>  
                            <th scope="col">Id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Action</th>                            
                         </tr>
                        </thead>

                         <tbody>
                             @foreach ($caissiers as $caissier)
                            <tr>
                            <td>{{$caissier->id}}</td>                           
                            <td>{{$caissier->name}}</td>     
                            <td>
                            <a href="{{route('admin.editcaissier',['user_id'=>$caissier->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                            <a href="#" wire:click.prevent="deletecaissier({{$caissier->id}})" style="margin-left:10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
                            </td>                          
                            </tr> 
                            @endforeach                        
                         </tbody>                      
                    </table> 
                   
                </div>
             </div>
           </div>
        </div>
    </div>

