@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center" style="margin-top: 25px">
    <div class="col-lg-12">
      <h2 class="section-title">URL Working</h2>
      <h3 class="section-sub-title"> Governence Page</h3>
    </div>
</div>


<div class="container ">
    <div class="row position-relative">
      <div class="col-md-9 col-sm-12">
<p class="text-justify">The CZM Governing Board is comprised of respected members of leading citizens of Bangladesh. The Board ensures our work effectiveness, accountability and true to the humanitarian spirit of Islam. To make a transparent, effective and sustainable faith based social enterprise, this premier body is assisted by an Advisory Council, Independent Shariah Supervisory Board, Independent Fund Disbursement Approval Committee and Executive Committee</p>

<h6>1. CZM Governing Board</h6>
      <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th >S.L#</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">1</th>
            <td class="text-center"><img src="{{ asset('images/team/team1.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Niaz Rahim</td>
            <td>Chairman</td>
          </tr>
          <tr>
            <th scope="row" class="text-center">2</th>
            <td class="text-center"><img src="{{ asset('images/team/team2.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab AMM Nasiruddin</td>
            <td>Vice Chairman</td>
          </tr>
          <tr>
            <th scope="row" class="text-center">3</th>
            <td class="text-center"><img src="{{ asset('images/team/team3.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Arastoo Khan</td>
            <td>Treasurer</td>
          </tr>
          <tr>
            <th scope="row"class="text-center">4</th>
            <td class="text-center"><img src="{{ asset('images/team/team6.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Md. Mujibur Rahman</td>
            <td>Member</td>
          </tr>
        </tbody>
      </table>


      <h6>2. CZM Governing Board</h6>
      <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th >S.L#</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">1</th>
            <td class="text-center"><img src="{{ asset('images/team/team1.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Niaz Rahim</td>
            <td>Chairman</td>
          </tr>
          <tr>
            <th scope="row" class="text-center">2</th>
            <td class="text-center"><img src="{{ asset('images/team/team2.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab AMM Nasiruddin</td>
            <td>Vice Chairman</td>
          </tr>
          <tr>
            <th scope="row" class="text-center">3</th>
            <td class="text-center"><img src="{{ asset('images/team/team3.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Arastoo Khan</td>
            <td>Treasurer</td>
          </tr>
          <tr>
            <th scope="row"class="text-center">4</th>
            <td class="text-center"><img src="{{ asset('images/team/team6.jpg') }}" alt="" style="width: 50px; border-radius:10px"></td>
            <td>Janab Md. Mujibur Rahman</td>
            <td>Member</td>
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

