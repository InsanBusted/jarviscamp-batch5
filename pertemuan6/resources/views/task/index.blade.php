@extends('template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Daftar Tugass</h3>
                <hr>
                <div class="row">@foreach ($tasks as $task)
                    <div class="col-12 col-md-4">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4 class="card-title">{{ $task['name'] }}</h4>
                                <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small>
                                <span class="badge bg-warning">{{ $task['status'] }}</span>
                                <p class="card-text">{{ Str::limit($task['description'], 40, '...') }}</p>

                                <div class="mt-2">
                                    <a href="#" class="btn btn-warning">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>