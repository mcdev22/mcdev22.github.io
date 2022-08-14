<div class="container h-100" style="width:90%;padding-top:120px;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;margin-bottom:60px;" >
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modifier info caissier</p>
                  @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                  @endif
                <form wire:submit.prevent="updateinfo" class="mx-1 mx-md-4" methode="post">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom:36px;" class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="name" class="form-control"  required  wire:model="name" />
                      @error('name') <span class="error">{{ $message }}</span> @enderror
                      <label class="form-label" for="form3Example1c">pseudo</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom:36px;" class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="oldpassword" class="form-control" required  wire:model="oldpass" />
                      @error('password') <span class="error">{{ $message }}</span> @enderror
                      <label class="form-label" for="form3Example4c">Enssien code</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom:36px;" class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" name="newpassword" class="form-control" wire:model="newpass" required  />
                      <label class="form-label" for="form3Example4cd">Noveau Code Caissier</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" value="modifier" />
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../assets/images/cashier.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


