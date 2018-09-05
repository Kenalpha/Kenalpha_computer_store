@include('inc.header')
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      @if(session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
      @endif
      @if(count($errors) > 0)
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}}
          </div>
        @endforeach
      @endif
      <div class="card">
        <div class="card-header bg-info text-white">Enter device details</div>
        <div class="card-body">
                <form method="POST" action="{{ url('insert/') }}">
                  {{csrf_field()}}
                  <table class="table table-hover">
                    <tr>
                      <td><input type="hidden" name="id" value=""></td>
                    </tr>
                    <tr>
                      <td>Device name</td>
                      <td><input type="text" name="name" class="form-control" value="" placeholder="Enter device name"></td>
                    </tr>
                    <tr>
                      <td>Quantity</td>
                      <td><input type="text" name="quantity" class="form-control" value="" placeholder="Enter device quantity"></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store"></td>
                    </tr>
                  </table>
                </form>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 table-responsive">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Device Name</th>
          <th>Available Stock</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
        @if(count($devices) > 0)
          @foreach($devices->all() as $device)
            <tr>
              <td>{{ $device->id }}</td>
              <td>{{ $device->name }}</td>
              <td><b>{{ $device->quantity }}</b></td>
              <td><a href='{{ url("/view/{$device->id}") }}' class="btn btn-success">View</a></td>
              <td><a href='{{ url("/update/{$device->id}") }}' class="btn btn-primary">Edit</a></td>
              <td><a href='{{ url("/delete/{$device->id}") }}' class="btn btn-danger">Delete</a></td>
            </tr>
          @endforeach
        @endif
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
@include('inc.footer')