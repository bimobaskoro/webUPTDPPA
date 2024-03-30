<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card">
                <div class="custom-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name">      
                            <div class="invalid-feedback">
                              Please Insert Your Name
                            </div>                      
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">                            
                            <div class="invalid-feedback">
                              Please Insert Your Email Or Your email is already in use
                            </div>      
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            <div class="invalid-feedback">
                              Please Insert The Password Or Your Password Min 3
                            </div>   
                        </div>
                        <button type="submit" class="btn btn-outline-success">Register</button>

                    </form>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    @if (Session::has('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: '{{ Session::get('success') }}',
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>