@extends("frontend.layout.main")

@section('main-container')

   <section class="serch-result">
    <aside>
      <h2>Advanced Filtration</h2>
      <div class="sidebar-links">
        <!-- Sidebar links for advanced filtration -->
        <a href="#" id="nameFilter">Search by Name</a>
        <a href="#" id="locationFilter">Search by Location</a>
        <a href="#" id="genderFilter">Search by Gender and Location</a>
      </div>
    </aside>

    <section id="hostelList">
      <!-- Hostel search results will be displayed here -->
    </section>
   </section>

   @endsection

