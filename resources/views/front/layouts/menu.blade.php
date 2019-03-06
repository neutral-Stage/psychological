<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><span>Re</span>Medic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('department')}}" class="nav-link">Departments</a></li>
          <li class="nav-item"><a href="{{ route('doctor') }}" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalAppointment"><span>Make an Appointment</span></a></li>
        </ul>
      </div>
    </div>
  </nav>