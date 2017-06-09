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