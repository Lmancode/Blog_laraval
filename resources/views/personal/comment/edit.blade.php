@extends("personal.layouts.main")
@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Comment</h1>
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
                    <form action="{{ route("comment.main.update", $comment->id) }}" method="POST">
                        @csrf
                        @method("patch")
                        <div class="form-group">
                            <textarea name="message" class="w-50" cols="10" rows="10">{{$comment->message}}</textarea>
                            @error("message")
                            <div class="text-danger">Empty string Message</div>
                            @enderror
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
