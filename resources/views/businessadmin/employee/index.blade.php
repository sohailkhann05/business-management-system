@extends('layouts.business-layout')
@section('title','Employees')
@section('body_content')

    @if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-inner--text"><strong>Success!</strong> {{ session('info') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <h3>
                        All Employees
                        <a style="float: right;" href="{{ route('business-employee.create') }}"
                           class="btn btn-sm btn-default">
                            Create Employee
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div><br>

@endsection