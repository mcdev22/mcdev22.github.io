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
      <div class="row"  style="border-radius:10px;background-color:#ebf0ef;padding:20px;width:70%;">
          <div class="col-md-12">
             <div class="panel panel-default" style="margin-left:100px;">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 style="font-size:20px;margin-left:20px;">Add Supplements</h2>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.extra')}}" style="background-color:#fab452;font-size:18px;font-weight:600;margin-left:80px;" class="btn btn-success pull-right">All Supplements </a>
                        </div>
                    </div>                     
                </div>

                <div class="panel-body">
                   @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                   @endif
                   <form wire:submit.prevent="addExtra" class="form-horizontal" enctype="multipart/form-data">
                    
                       <div  class="form-group">
                           <label class="col-md-4 control-label">supplement Name</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Name" style="width:160%;" class="form-control input-md" wire:model="name"/>
                           </div>
                        </div>
                     
                        <div class="form-group">
                           <label class="col-md-4 control-label">Price</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="supplement Price" style="width:160%;" class="form-control input-md" wire:model="price"/>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label">Category</label>
                           <div class="col-md-4">
                            <select class="form-control" style="width:160%;" wire:model="cat_suppl_id">
                                <option value="">Select Category</option>
                                @foreach ($suppcategories as $suppcategory)
                                <option value="{{$suppcategory->id}}">{{$suppcategory->name}}</option>
                                @endforeach
                            </select>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label"></label>
                           <div class="col-md-4">
                             <button type="submit" value="submit" style="background-color:green;width:120px;" class="btn btn-primary">Submit</button>
                           </div>
                        </div>

                    </form>
                </div>

          </div>
        </div>
    </div>
</div>
  
