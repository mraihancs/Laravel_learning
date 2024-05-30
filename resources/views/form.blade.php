<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form action="{{url('/')}}/registration" method="POST">
            @csrf
            <div class="container">

                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>




                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>




                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>



        </form>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->




</body>

</html>
