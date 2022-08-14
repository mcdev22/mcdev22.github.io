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
      <div class="row" style="border-radius:10px;background-color:#f2f2f2;padding:20px;width:70%;">
          <div class="col-md-12">
             <div class="panel panel-default" style="margin-left:100px;">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Add new Category</h2>
                        </div>

                        <div class="col-md-6">
                            <a href="{{route('admin.category')}}" style="background-color:#f7862a;font-weight:700;margin-left:100px;" class="btn btn-success pull-right">All Category </a>
                        </div>

                    </div>                     
                </div>

                <div class="panel-body">
                   @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                   @endif
                   <form wire:submit.prevent="storeCategory" class="form-horizontal">
                   
                       <div class="form-group">
                           <label class="col-md-4 control-label">Category Name</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Category Name" style="width:160%;" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label">Category Slug</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Category Slug" style="width:160%;" class="form-control input-md" wire:model="slug"/>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label"></label>
                           <div class="col-md-4">
                             <button type="submit" value="submit" style="background-color:green;width:180px;" class="btn btn-primary">Ajouté</button>
                           </div>
                        </div>
                    </form>
                </div>

             </div>
           </div>
        </div>
    </div>
  
