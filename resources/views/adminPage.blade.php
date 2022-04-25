<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <title>Document</title>
</head>
<body>

    <form>
        <div class=" mb-3">
            <label  >Name</label>
            <input type="text" class="form-control" >
          </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control"   >
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" >
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" >
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>