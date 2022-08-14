<div>
   <style>
      nav svg{
        height: 20px;
      }
      nav .hidden{
        display: block !important;
      }
    </style>
    <div class="container" style="margin-left:200px;margin-top:100px;">
      <div class="row" style="border-radius:10px;background-color:#ebf0ef;padding:20px;width:70%;">
          <div class="col-md-12">
             <div class="panel panel-default" style="margin-left:100px;">

                <div class="panel-heading" >
                    <div class="row">
                        <div class="col-md-6" >
                            <h2 style="font-size:18px;">Add Products</h2>
                        </div>

                        <div class="col-md-6">
                            <a href="{{route('admin.product')}}" style="background-color:#f7862a;font-size:20px;font-weight:600" class="btn btn-success pull-right">All Product </a>
                        </div>
                    </div>                     
                </div>

                <div class="panel-body">
                   @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                   @endif
                   <form wire:submit.prevent="addProduct" class="form-horizontal" enctype="multipart/form-data">
                    
                       <div  class="form-group">
                           <label class="col-md-4 control-label">Product Name</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Name" style="width:180%" class="form-control input-md" wire:model="name"/>
                           </div>
                        </div>
                     
                        <div class="form-group">
                           <label class="col-md-4 control-label">Price</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Price" style="width:180%" class="form-control input-md" wire:model="price"/>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label">Product Image</label>
                           <div class="col-md-4">
                             <input type="file" class="input-file" wire:model="image"/>
                             @if($image)
                              <img src="{{$image->temporaryUrl()}}" width="120"/>
                             @endif
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label">Category</label>
                           <div class="col-md-4">
                            <select class="form-control" wire:model="category_id" style="width:180%">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label"></label>
                           <div class="col-md-4">
                             <button type="submit" value="submit" style="background-color:green;width:120px;" class="btn btn-primary">Ajouté</button>
                           </div>
                        </div>

                    </form>
                </div>

          </div>
        </div>
    </div>
</div>
  
