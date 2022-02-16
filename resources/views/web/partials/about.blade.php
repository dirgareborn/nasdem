<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us" style="background-image: url('{{ asset('web/img/bg/h1-bg-img-1.jpg') }}'); background-position: bottom center;">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-7" data-aos="fade-right">
              <div class="embed-responsive embed-responsive-16by9">
                <img width="500" height="400" src="{{ asset('web/img/bg/thumb-youtube.jpg')}}" class="attachment-full size-full" alt="" loading="lazy" sizes="(max-width: 594px) 100vw, 594px" />	
                    <a  href="#myModal" class="btn-youtube" data-toggle="modal" data-target="#myModal">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      viewBox="0 0 83 83" enable-background="new 0 0 83 83" xml:space="preserve" width="83" height="83">
                              <circle fill="#ED1F24" cx="41.3" cy="41" r="40"/>
                              <g>
                                  <path fill="#FFFFFF" d="M36.1,30l12.5,12.5L36.1,55V30z"/>
                              </g>
                          </svg>
                    </a>
                </div>
          </div>
                  <!-- Modal HTML -->
     <!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="video">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">YouTube Video</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="YTVideo" class="embed-responsive-item" width="560" height="315" src="//www.youtube.com/embed/dghgWaJfCjw?rel=0" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>
    </div>
               -->

          <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-left">
          <div class="section-title">
          <h2 style="text-align:left;color:white;text-transform:none;">Surya Paloh, Bapak Restorasi Indonesia</h2>
        </div>
            <p style="text-align:justify;color:white;text-transform:none;">
            Saya percaya proses Pendidikan politik yang sendiri yang sedang kita jalankan dapat memberikan hasil yang jauh lebih berarti. Saya percaya kalau memang kita konsisten terus dari waktu ke waktu. Berani menawarkan alternatif-alternatif pikiran. Yang tidak hanya terjebak pada langkah-langkah yg normatif. Tapi, berani melangkah jauh dari pendekatan2 yang normative, bolehlah kita mengharap dan bertekad menjadi partai ..nomor satu.”
            </p>
            <div class="t-special">
              <p>Surya Paloh</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
    @push('js')
    <!-- <script>
$(document).ready(function(){
    var url = $("#YTVideo").attr('src');
    $("#myModal").on('hide.bs.modal', function(){
        $("#YTVideo").attr('src', '');
    });
    $("#myModal").on('show.bs.modal', function(){
        $("#YTVideo").attr('src', url);
    });
});
</script> -->
@endpush