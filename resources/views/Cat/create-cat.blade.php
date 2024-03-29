@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create category</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  
  @section('content')
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('post.storecat')}}" method="post">
            {{ csrf_field() }}
              <div class="box-body">
                <!-- ID Category -->
                <div class="form-group">
                  <label for="inputIDCategory" class="col-sm-2 control-label">ID Category</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputIDCategory" placeholder="ID Category" name="inputIDCategory">
                  </div>
                </div>

                <!-- Nama Item -->
                <div class="form-group">
                  <label for="inputCategory" class="col-sm-2 control-label">Category</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCategory" placeholder="Category" name="inputCategory">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="cat">Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        @endsection
</body>
</html>