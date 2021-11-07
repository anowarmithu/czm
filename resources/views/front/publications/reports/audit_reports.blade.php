@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center" style="margin-top: 25px">
    <div class="col-lg-12">
      {{-- <h2 class="section-title">URL Working</h2> --}}
      <h3 class="section-sub-title"> Audit Reports</h3>
    </div>
</div>


<div class="container ">
    <div class="row position-relative">
      <div class="col-md-9 col-sm-12">

       <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th >S.L#</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">1</th><td>Audit Report 2019-2020</td>
            <td class="text-center"><a href="">View Report</a> </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">2</th><td>Audit Report 2018-2019</td>
            <td class="text-center"><a href="">View Report</a> </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">3</th><td>Audit Report 2017-2018</td>
            <td class="text-center"><a href="">View Report</a> </td>
          </tr>
          <tr>
            <th scope="row"class="text-center">4</th><td>Audit Report 2016-2017</td>
            <td class="text-center"><a href="">View Report</a> </td>
          </tr>
        </tbody>
      </table>
     
      </div>

      <div class="col-md-3 col-sm-12">
        @include("front.layouts.sidebar")
      </div>

    </div>
  </div>




@endsection

