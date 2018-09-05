@include('inc.header')
<div class="container">
  <div>
    <legend>About</legend>
  </div>
  <div class="card border-primary mb-3" style="max-width: 130rem;">
    <div class="card-header text-center"><h4>Decive Name: {{ $devices->name }}</h4></div>
    <div class="card-body">
      <h3 class="text-center">Quantity: {{ $devices->quantity }}</h3>
    </div>
  </div>
  <center><a href='{{ url("/") }}' class="btn btn-primary">Back</a></center>
</div>
@include('inc.footer')