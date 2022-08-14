

<div class="container" style="margin-top:100px;margin-left:10%;border-radius:10px;padding:20px;background-color:#ebf0ef;width:800px;">
    @if(Session::has('success_message'))
        <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
    @endif
<form class="well form-horizontal" wire:submit.prevent="storeFacture"  id="contact_form" style="margin-left:200px;">
    <fieldset>
        <!-- Form Name -->
        <h3 style="margin-top:20px;"><b>Facture Enregistrement</b></h3><br>

        <!-- Text input-->

       <div class="form-group">
            <label class="col-md-4 control-label">Numero Facture</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group" style="width:150%;">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
            <input  name="num_facture" placeholder="N° Facture"  class="form-control"  type="text" wire:model="num_facture">
            </div>
            </div>
       </div>

        <div class="form-group"> 
            <label class="col-md-4 control-label">Fornisseur</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group"  style="width:150%;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select name="fornisseur" class="form-control selectpicker" wire:model="id_fourni">
                    <option value="">selectioné Votre Fornisseur</option>
                    @foreach($fournissuers as $fourni)
                     <option value="{{$fourni->id}}">{{$fourni->nom}}</option>
                    @endforeach     
                </select>
            </div>
            </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Total TCC</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group"  style="width:150%;">
            <span class="input-group-addon"><i class="glyphicon glyphicon-signal"></i></span>
            <input  name="total" placeholder="Total Facture" class="form-control"  type="text" wire:model="total" >
            </div>
            </div>
        </div>

        
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Statue de Payiement</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="form-check" style="margin-left:25px;">
                
                <label class="form-check-label" for="radiopaye1">
                <input class="form-check-input" type="radio" wire:model="radiopaye" name="statue" id="radiopaye1" value="true" >payé
                </label>
                
            </div>
            <div class="form-check" style="margin-left:25px;">
                
                <label class="form-check-label" for="radiopaye2">
                <input class="form-check-input" type="radio" name="statue" wire:model="radiopaye" id="radiopaye2" value="false" >non payé
                </label>

            </div>
            </div>
        </div>
        
       <!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->
        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        </div>
        </div>

    </fieldset>
</form>
</div>
</div><!-- /.container -->


@push('scripts')
<script  script type="text/javascript">
$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            num_facture: {
                validators: {
                        stringLength: {
                        min: 2,
                        
                    },
                        notEmpty: {
                        message: 'Please enter a valide N° facture'
                    }
                }
            },             
			total: {
                validators: {
                     stringLength: {
                        min: 8,
                        required:true,
                        rexp: ^[1-9]\d*(\.\d+)?$,
                    },
                    notEmpty: {
                        message: 'Please enter your a valid total'
                    }
                }
            },		          
            fornisseur: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Fornisseur'
                    }
                }
            },
        }
    }
    })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>
@endpush