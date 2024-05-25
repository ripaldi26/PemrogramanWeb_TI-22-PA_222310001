<div class="card">
    <div class="card-header fw-bold ">
        Student Register
    </div>
    <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror"
                    id="fullname" autocomplete="off">
                @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">Npm</label>
                <input name="npm" class="form-control @error('npm') is-invalid @enderror" id="npm"
                    rows="3"></input>
                @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" rows="3"></input>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input name="prodi" class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                    rows="3"></input>
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    </div>
    <div class="mb-3 -ml-6">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</div>
</form>
</div>
</div>
