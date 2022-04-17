<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">All Blogs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container col-8">
    <div class="CreateButton d-flex">
        <a href="" type="button" class="btn btn-success mb-3 mt-5 ms-auto text-wrap">Create a new blog post!</a>
    </div>
    <div class="TableDisplay">
        <table class="table table-light table-striped ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
            <tr>
                <th class="">{{$blog['id']}}</th>
                <td class="">{{$blog['title']}}</td>
                <td class="">{{$blog['postedBy']}}</td>
                <td class="">{{$blog['createdAt']}}</td>
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="" type="button" class="btn btn-primary me-2">Edit</a>
                        <a href="" type="button" class="btn btn-success me-2">View</a>
                        <a href="" type="button" class="btn btn-danger me-2">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
