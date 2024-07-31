<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">e-Administrasi</span>
                        </a>
                    </div><!-- End Logo -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            </div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form wire:submit.prevent="login" action="" method="POST" class="row g-3" autocomplete="off">
                                @csrf
                                <div class="col-12">
                                    <input type="text" wire:model.live="usertype" class="form-control @if($errors->has('usertype')) is-invalid @elseif($usertype == NULL) @else is-valid @endif" name="usertype" id="usertype" placeholder="Masukkan username atau email">
                                    @error('usertype') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="password" wire:model.live="password" class="form-control @if($errors->has('password')) is-invalid @elseif($password == NULL) @else is-valid @endif" name="password" id="password" placeholder="Masukkan Password">
                                    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <select id="guard" wire:model.live="guard" class="form-select @if($errors->has('guard')) is-invalid @elseif($guard == NULL) @else is-valid @endif" name="guard">
                                        <option value="" hidden>--PILIH--</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                        <option value="user">Staf Administrasi</option>
                                    </select>
                                    @error('guard') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                            id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
