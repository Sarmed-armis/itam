@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" ACTION="{{url('Store')}}">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputPassword1">CatName</label>
                                <input type="text" class="form-control" name="cat" id="exampleInputPassword1" placeholder="CatName" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
