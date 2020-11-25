
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Alex Smith</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        @foreach ($about->take(1) as $i)
            
                  <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                      <img src="{{ asset("img/$i->photo") }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                      <h3>UI/UX Designer &amp; Web Developer.</h3>
                      <p class="font-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                      </p>
                      <div class="row">
                        <div class="col-lg-6">
                          <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{ $i->anniversaire }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{ $i->website }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>{{ $i->phone }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{ $i->city }}</li>
                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>{{ $i->age }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{ $i->degree }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong>{{ $i->email }}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{ $i->freelance }}</li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        {{ $i->text }}
                      </p>
                    </div>
                  </div>
            

            
        @endforeach
        

      </div>
    </section><!-- End About Section -->
