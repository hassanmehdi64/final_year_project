@extends("frontend.layout.main")

@section('main-container')
      <!----------------------
     Gallery section start"
       ----------------------->
       <div class="gallery-main">
        <h2>Hostels Gallery </h2>
       <div class="filter-buttons">
        <button class="filter-button active" data-filter="all">All</button>
        <button class="filter-button" data-filter="category1">Category 1</button>
        <button class="filter-button" data-filter="category2">Category 2</button>
        <button class="filter-button" data-filter="category3">Category 3</button>
      </div>


      <div class="gallery">

        <div class="grid-container">
            @foreach ($gallaries as $gallary)
                    @if (json_decode($gallary->imageFiles))
                        @foreach (json_decode($gallary->imageFiles) as $imageFile)
                        <div class="grid-item" data-category="category1">
                         <img src="/Gallaries/{{ $imageFile }}" alt="Image">
                          <div class="overlay">
                            <div class="overlay-content">{{ $gallary->hostelName }}</div>
                          </div>
                        </div>
                        @endforeach
                        @endif
                        @endforeach



            </div>

      </div>
    </div>

 @endsection
