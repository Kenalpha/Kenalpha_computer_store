@include('inc.header')
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      
      <div class="card">
        <div class="card-header bg-info text-white">Enter device details</div>
        <div class="card-body">
                <form method="POST" action='{{ url("edit/{$devices->id}") }}'>
                  {{csrf_field()}}
                  <table class="table table-hover">
                    <tr>
                      <td><input type="hidden" name="id" value=""></td>
                    </tr>
                    <tr>
                      <td>Device name</td>
                      <td><input type="text" name="name" value="<?php echo $devices->name; ?>" class="form-control" value="" placeholder="Enter device name"></td>
                    </tr>
                    <tr>
                      <td>Quantity</td>
                      <td><input type="text" name="quantity" value="<?php echo $devices->quantity; ?>" class="form-control" value="" placeholder="Enter device quantity"></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">
                      	<input type="submit" class="btn btn-primary" name="submit" value="Update">
                        <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                      </td>
                    </tr>
                  </table>
                </form>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
@include('inc.footer')