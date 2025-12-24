<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>
<h1>Create Item</h1>
<div class="mb-3">
    <a href="{{ route('index') }}" class="btn btn-primary">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>
    <a href="{{ route('create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Create Item
    </a>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New Item</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('doStore') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="SKU" class="form-label">SKU</label>
                            <input type="text" name="SKU" id="SKU" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="desc" id="desc" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" id="price" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" name="stock" id="stock" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</html>
