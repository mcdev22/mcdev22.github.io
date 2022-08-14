<style type="text/css">
.container{
  padding: 1rem 0rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
</style>

<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="row"> 
        <h3 style="color:black;margin-left:30px;">List des Factures<h3>         
        <div class="col-md-6"  style="margin-left:86%;">
          <a href="{{route('admin.addfacture')}}" style="font-size:17px;font-weight:600;background-color:#f7862a;color:white;" role="button" class="btn btn-primary">Inseré Facture</a>                          
        </div>                       
    </div>
      
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Numero Facture</th>
            <th scope="col">Fornisseur</th>
            <th scope="col">Total TCC</th>
            <th scope="col">Statue payment</th>
            <th scope="col">La Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($factures as $facture)
           <tr>
              <td scope="row">{{$facture->id}}</td>
              <td scope="row">{{$facture->num_facture}}</td>
              <td scope="row">{{$facture->supplier->nom}}</td>
              <td scope="row">{{$facture->total_tcc}}Dh</td>
              @if($facture->status == 'payed')
              <td scope="row"><span class="badge badge-success rounded-pill d-inline">{{$facture->status}}</span></td>
              @else
              <td scope="row"><span class="badge bg-danger rounded-pill d-inline">{{$facture->status}}</span></td>
              @endif
              <td>{{$facture->created_at}}</td>
              <td>
                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </td>
           </tr>
          @endforeach
        </tbody>
      </table>
   
    </div>
  </div>
</div>
