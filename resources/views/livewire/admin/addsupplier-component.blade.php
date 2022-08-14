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
             <div class="panel panel-default" style="margin-left:150px;">
                <div class="panel-heading" >
                    <div class="row">
                        <div class="col-md-6" >
                            <h3 style="margin-left:20px;font-size:20px;">Ajouter Fornisseur</h3>
                        </div>
                        <!-- <div class="col-md-6">
                            <a href="{{route('admin.product')}}" style="background-color:#f7862a;font-size:20px;font-weight:600" class="btn btn-success pull-right">All Product </a>
                        </div> -->
                    </div>                     
                </div>

                <div class="panel-body">
                   @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                   @endif
                   <form wire:submit.prevent="storeSupllier" class="form-horizontal" enctype="multipart/form-data">
                    
                       <div  class="form-group">
                           <label class="col-md-4 control-label">Nom de Fornisseur</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Nom" style="width:180%;" class="form-control input-md" wire:model="name"/>
                           </div>
                        </div>
                     
                        <div class="form-group">
                           <label class="col-md-4 control-label">Adress</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Adress Fornisseur" style="width:180%;" class="form-control input-md" wire:model="adress"/>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-4 control-label">Telephone</label>
                           <div class="col-md-4">
                             <input type="text" placeholder="Telephone" style="width:180%;" class="form-control input-md" wire:model="mobile"/>
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
  
