@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
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
                    
                  <form action="">
                   <form-generate :fields="{{ json_encode($fields) }}" ></form-generate>
                    <button class="btn btn-primary" type="submit">submit</button> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
