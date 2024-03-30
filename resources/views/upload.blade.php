<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/adminHome.css">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
 
 <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #61B2A0;
      overflow-x: hidden;
      padding-top: 20px;
      transition: 0.5s;
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
    }

    .sidebar a:hover {
      background-color: #ddd;
      color: black;
    }

    .content {
      margin-left: 0;
      padding: 16px;
      transition: margin-left 0.5s;
    }
  </style>
</head>
<body>

  <div class="sidebar" id="mySidebar">
    <a href="#" onclick="w3_close()">Close</a>
    <a href="{{ route('adminDashboard') }}">Your Post</a>
    <a href="{{ route('upload') }}">Upload</a>
    <!-- Tambahkan menu sesuai kebutuhan -->
  </div>

  <div class="content" id="main">
    <button id="openNav" onclick="w3_open()" type="button" class="btn btn-outline-success">Open Menu</button>
    <div class="title mt-3">
      <h1 class="titleHome">UPLOAD</h1>
    </div>
    <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
      @csrf
      <div class="mt-3 mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control" id="title" name="title">
      </div>
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*">
      @if ($errors->has('image'))
      <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
      <label for="description" class="form-label mt-3">Deskripsi</label>
      <!-- Tambahkan bidang input tersembunyi untuk konten CKEditor -->
      <input type="hidden" name="description" id="description">
  
      <!-- Kontainer CKEditor -->
      <div id="editor"></div>
  
      <button type="submit" class="btn btn-outline-success">Kirim</button>
  </form>
  </div>



  <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
  <script>
       ClassicEditor
       .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'imageUpload', 'bulletedList', 'numberedList', 'blockQuote'],
            ckfinder: {
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}',
            }
        })
        .then(editor => {
            // Tetapkan konten CKEditor ke input tersembunyi sebelum pengiriman formulir
            editor.model.document.on('change', () => {
                document.getElementById('description').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
    function w3_open() {
      document.getElementById("main").style.marginLeft = "25%";
      document.getElementById("mySidebar").style.width = "25%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
  </script>
    
</body>
</html>