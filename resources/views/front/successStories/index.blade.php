@extends('front.layouts.main')

@section('title', 'Center for Zakat Management')
@section('content')

<div class="row text-center" style="margin-top: 25px">
    <div class="col-lg-12">
      <h2 class="section-title">URL Working</h2>
      <h3 class="section-sub-title"> Success Stories</h3>
    </div>
</div>
<div class="container">
 <div class="card-deck">
   <div class="card">
    <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Maya-Begum.jpg') }}"  width="100%" height="180"  alt=""></a>

    <div class="card-body">
      <h5 class="card-title crop-text-2"><a href="">Maya Begum’s Brunt-out house rebuilt</a> </h5>
     <p class="card-text crop-text-1">Maya Begum’s husband left her with 3 children 6 years back. Since then, she has been struggling to run the family with her little income from working at different houses as maid. All of a sudden, her tiny wood-tin house got burnt out accidentally due to an electrical short circuit in March 2019. Upon hearing the news, CZM officials visited her and made an arrangement for temporary living and gave a commitment to rebuild her house soon. After few days, CZM had built a beautifully designed wood-tin house for her.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <a href="#"><img class="card-img-top" src="{{ asset('images/stories/Amirjaan-Eye.jpg') }}"  width="100%" height="180"  alt=""></a>
    

    <div class="card-body">
    <h5 class="card-title crop-text-2"><a href="">Amirjaan Got Relief from Eye Problem</a></h5>
     <p class="card-text crop-text-1">Amirjaan had been suffering from eye problem for many years. Poverty didn’t allow her to have the treatment. Recently, she went to CZM’s women and children welfare center at Lemubari, Manikgonj. The doctor of the center suggested her to see an eye specialist since it wasn’t a normal eye problem. She was then referred to Islamia Eye Hospital Dhaka. After several tests, it was found that she was affected with lachrymal disorder. Soon after the diagnosis, as she needed an operation, CZM made an arrangement of finances and other necessary supports. After a successful operation she is now okay. Alhamdulillah.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/stories/nusrat.jpg') }}"  width="100%" height="180"  alt="">

    <div class="card-body">
      <h5 class="card-title crop-text-2">Nusrat Recovered from a Life-threatening Disease</h5>
     <p class="card-text crop-text-1">Seven years old Nusrat, a kindergarten student of The Granada School (TGS) at Savar, Dhaka had been feeling serious convulsions in her muscles. It was getting terrible gradually. Her poor parents, Zakat Receiver of Jeebika Savar Project weren’t able to take her to a hospital. Her mother informed the case to CZM officials and described her situation. CZM immediately responded and got her admitted at renowned hospital in Dhaka. After several tests, doctor informed us that she got affected by a rare disease called encephalitis. The disease is life threatening if it is not treated immediately and properly. After several weeks of intensive treatment, she recovered from the sickness.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>
<br>

@endsection