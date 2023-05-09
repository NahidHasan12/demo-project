@extends('layouts.app')

@section('title','Role Edit')

@push('styles')
    
 
@endpush

@section('action')
    <a href="{{ route('app.roles.index') }}" class="btn btn-sm btn-primary">Role List</a>
@endsection

@section('content')

<div class="row"> 
   <div class="col-12"> 
       <div class="card">
            <x-errorMessage/>
            <div class="card-body">
                <form action="{{ route('app.roles.update',$role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="md-3 py-2">
                                <label for="brand_name" class="form-label"> Name</label> <span class="text-danger">*</span>
                                <input type="text" name="role" class="form-control p-3" id="brand_name"
                                    placeholder="write brand name"  value="{{ $role->name }}">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        @foreach ($modules as $module)
                            <div class="col-md-4">
                                <h5 class="mb-2">{{ $module->name }}</h5>
                                @foreach ($module->permissions as $permission)   
                                    <div class="form-group">
                                        <label class="ui-checkbox">
                                        <input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                        @foreach ($role->permissions as $selectPermission)
                                            {{ $permission->id == $selectPermission->id ? 'checked' : '' }}
                                        @endforeach
                                        >
                                        <span class="input-span"></span>{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
   </div>
</div>

@endsection

@push('scripts')
    <script>

        $(document).on('click','#check-all-button',function () {
            if (this.checked) {
                $(':checkbox').each(function() {
                    this.checked = true;
                })
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                })
            }
        })



    </script>
@endpush