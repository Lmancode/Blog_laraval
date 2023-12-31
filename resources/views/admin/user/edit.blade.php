@extends("admin.layouts.main")
@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("admin.main.index") }}">Main</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route("admin.user.update", $user->id) }}" method="POST">
                        @csrf
                        @method("patch")
                        <div class="form-group w-50">
                            <input type="text" class="form-control" name="name" placeholder="Enter user name" value="{{$user->name}}">
                            @error("title")
                            <div class="text-danger">Empty string name</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                            @error("email")
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <label>Select role</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}"
                                        {{ $id == $user->role ? " selected" : ""}}
                                    >{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-block btn-primary col-1" value="Update">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
