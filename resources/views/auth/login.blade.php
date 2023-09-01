<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login screen</title>
</head>

<body>
    <div class="m-4">
        <div>
            <h1>Silahkan Masukan Email dan Password Anda</h1>
        </div>
        <form action="{{ route('login.fun') }}" method="post" class="my-5 needs-validation">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="inputEmail3">
                    @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="inputPassword3">
                    @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Masuk</button>
            <div class="mt-2">
                <a href="/register">Ga Punya Akun ? Klik Disini</a>
            </div>
        </form>
    </div>

</body>

</html>