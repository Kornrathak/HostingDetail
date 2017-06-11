<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p class="text-left text-primary" contenteditable="true">
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>การไฟฟ้าส่วนภูมิภาค เขต 3 (ภาคตะวันออกเฉียงเหนือ) จังหวัดนครราชสีมา
                      <br>
                      <br>ที่อยู่: ตำบล บ้านใหม่ อำเภอเมืองนครราชสีมา นครราชสีมา 30000&nbsp;
                      <br>
                      <br>โทรศัพท์: 044 214 3348&nbsp;
                      <br>
                      <br>เปิดทำการ: วันจันทร์ - วันศุกร์ เวลา 8:30–16:30
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                    </p>
                  </div>
                  <div class="col-md-6">
                    <img src="http://localhost/HostingDetail/src/img/bg/splash1.png" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Relay And Automation Section
        <a href="intra.ne3.pea.co.th" title="visit intra">  intra.ne3.pea.co.th</a>
    </p>
</footer>
<script>
    $(document).ready(function(){
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({scrollTop: $(hash).offset().top}, 900, function(){
                    window.location.hash = hash;
                });
            } // End if
        });
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;
                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    });
</script>