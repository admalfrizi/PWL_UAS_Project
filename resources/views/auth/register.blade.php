<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registrasi</title>
</head>

<body>
    <div class="m-4">
        <div>
            <h1>Silahkan Daftarkan Email dan Password Anda</h1>
        </div>
        <form action="{{ route('register.fun') }}" method="post" class="row g-3 needs-validation">
            @csrf
            <div class="col-md-6">
                <label for="inputName4" class="form-label">Nama</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="inputName4">
                @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="inputEmail4">
                @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" value="{{ old('password') }}" class="form-control" name="password" id="inputPassword4">
                @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Confirm Password</label>
                <input type="password" value="{{ old('password_confirmation') }}" class="form-control" name="password_confirmation" id="inputPassword4">
                @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Daftarkan</button>
            </div>
        </form>
        <div class="mt-2">
            <a href="/login">Udh Punya Akun ? Klik Disini</a>
        </div>
    </div>

</body>

</html>