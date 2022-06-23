@extends('employees.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4"><img src="https://dsi.bg/wp-content/uploads/2022/06/main-transparent-1.png" width="150"/> DSI Employees Project</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"><i class="fa fa-plus"></i> Create New employee</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Phone Number</th>
            <th>Salary</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->phone_number }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}
      
@endsection