<section id="hire-us" class="section bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 wow animated slideInLeft">
                <div class="mb-30">
                    <h2 class="text-uppercase text-black fw-3">we are <strong class="fw-7 text-orange">hiring creative</strong> people</h2>
                    <p>It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate</p>
                </div>
                <p><span class="dropcaps text-blue">L</span>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survive</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
            </div>
            
                <div class="col-lg-4 wow animated slideInRight">
                    <h2 class="text-uppercase text-black fw-3">Trouver  <strong class="fw-7 text-orange">Votre Job Avec </strong> nous</h2>
                        <form action="{{ url('/') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="d-none"  for="first_name"></label>
                                <input class="form-control form-control-sm" name="first_name" id="first_name" type="text" placeholder="Nom">
                            </div>
                            <div class="mb-3">
                                <label class="d-none"  for="last_name"></label>
                                <input class="form-control form-control-sm" name="last_name" id="last_name" type="text" placeholder="Prenom">
                            </div>
                            <div class="mb-3">
                                <label class="d-none"  for="email"></label>
                                <input class="form-control form-control-sm" name="email" id="email" type="text" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="d-none"  for="upload"></label>
                                <input class="form-control form-control-sm" name="upload" id="upload" type="file">
                            </div>
                            <button type="submit" class="btn nav-link page-scroll btn-hire-me btn-blue text-center text-white ml-lg-10 mr-lg-10">Postuler maintenant</button>
                        </form>
                        
                    
                </div>
            
        </div>
    </div>
</section>