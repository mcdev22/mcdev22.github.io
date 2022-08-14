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
                    <div class="col-md-6"  style="margin-left:88%;">
                        <a href="{{route('admin.addcategory')}}" style="font-size:17px;font-weight:600;background-color:#f7862a;color:white;" class="btn btn-success">Add new </a>                          
                    </div>
                    </div>      
                </div>

               <div class="panel-body">
              
                   <table class="table table-hover" style="border: 1px solid #ddd;">
                        <thead class="thead-dark" >
                          <tr>  
                            <th scope="col">Id</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>                            
                         </tr>
                        </thead>

                         <tbody>
                             @foreach ($categories as $category)
                            <tr>
                            <td>{{$category->id}}</td>                           
                            <td>{{$category->name}}</td>     
                            <td>{{$category->slug}}</td> 
                            <td>
                            <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                            <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left:10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
                            </td>                          
                            </tr> 
                            @endforeach                        
                         </tbody>                      
                    </table> 
                    {{$categories->links()}}
                </div>
             </div>
           </div>
        </div>
    </div>

