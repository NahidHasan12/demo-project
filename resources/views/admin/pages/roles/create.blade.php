@extends('layouts.app')

@section('title','role create')

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
                <form action="{{ route('app.roles.store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="md-3 py-2">
                                <label for="brand_name" class="form-label"> Name</label> <span class="text-danger">*</span>
                                <input type="text" name="role" class="form-control p-3" id="brand_name"
                                    placeholder="write brand name">
                            </div>

                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="ui-checkbox">
                                    <input id="check-all-button" type="checkbox" name="checkbox">
                                    <span class="input-span"></span>Select All
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($modules as $module)
                              
                            <div class="col-md-4">
                                <h5 class="mb-2">{{$module->name}}</h5>
                                @foreach ($module->permissions as $permission)
                                    <div class="form-group">
                                        <label class="ui-checkbox">
                                        <input type="checkbox" name="permission[]" value="{{$permission->id}}">
                                        <span class="input-span"></span>{{$permission->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach 
                    </div>

                    <button class="btn btn-primary" type="submit">submit</button>
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