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
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Item Detail</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Item ID:</strong> {{ $item->item_id }}
                            </li>
                            <li class="list-group-item">
                                <strong>Category:</strong> {{ $item->category }}
                            </li>
                            <li class="list-group-item">
                                <strong>Name:</strong> {{ $item->name }}
                            </li>
                            <li class="list-group-item">
                                <strong>SKU:</strong> {{ $item->sku }}
                            </li>
                            <li class="list-group-item">
                                <strong>Description:</strong> {{ $item->desc ?? 'N/A' }}
                            </li>
                            <li class="list-group-item">
                                <strong>Price:</strong> Rp {{ number_format($item->price, 0, ',', '.') }}
                            </li>
                            <li class="list-group-item">
                                <strong>Stock:</strong> {{ $item->stock }}
                            </li>
                            <li class="list-group-item">
                                <strong>Status:</strong>
                                <span class="badge bg-{{ $item->status == 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
