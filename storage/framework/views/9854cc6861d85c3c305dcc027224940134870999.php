 <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

 <!-- Plugin JavaScript -->
 <script src="<?php echo e(asset('assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

 <!-- Contact form JavaScript -->
 <script src="<?php echo e(asset('assets/js/jqBootstrapValidation.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/contact_me.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/bootbox.all.js')); ?>"></script>
 

 <!-- Custom scripts for this template -->
 <script src="<?php echo e(asset('assets/js/agency.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script>
 <script src="http://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

 <script type="text/javascript">

  $(document).ready(function(){

    $.ajax({
      url:"http://raicesc.net:8000/emisora",
      success:function(rest){
       $(".emisora").html(rest)
     }
   })

    $('#4m').on('click',function(){
      var code=$("#4").html();
      $(this).addClass('active');
      $("#10m,#5m,#2m").removeClass('active');
        // $('#4').toggle(500).html(code);
        $('#2,#5,#10').addClass('none');

        $("#4").removeClass("none");
      })
    $('#5m').on('click',function(){
      $('#2,#4,#10').addClass('none');
      var code=$("#5").html();
      $(this).addClass('active');
      $("#10m,#4m,#2m").removeClass('active');
      
        // $('#5').toggle(500).html(code);
        $("#5").removeClass("none");
      })

    $('#10m').on('click',function(){
      $('#2,#4,#5').addClass('none');
      var code=$("#10").html();
      $(this).addClass('active');
      $("#5m,#4m,#2m").removeClass('active');
        // $('#10').toggle(500).html(code);
        $("#10").removeClass("none").animate({ left: "200px", height: "80%", width: "100%"},500);
      })
    $('#2m').on('click',function(){
      
      $('#5,#4,#10').addClass('none');
      var code=$("#2").html();
      $(this).addClass('active');
      $("#10m,#4m,#5m").removeClass('active');
        // $('#2').toggle(500).html(code);
        $("#2").removeClass("none").animate({ left: "200px", height: "80%", width: "100%"},500);
      })

    $('#im').on('click',function(){
     var as = document.getElementById("audio")
     void function playAudio(){
      as.play();
    }

    void function pauseAudio(){
      as.pause();
    } 
    if($(this).hasClass("1")){
      $("#audio").trigger("play");
      $(this).removeClass("1");
      $(this).addClass("2");
      $(this).removeAttr('scr','assets/img/play.png');
      $(this).attr('src','assets/img/pause.png');
    }else if($(this).hasClass("2")){
      $("#audio").trigger("pause");
      $(this).removeClass("2");
      $(this).addClass("1");
      $(this).removeAttr('scr','assets/img/pause.png');
      $(this).attr('src','assets/img/play.png');
    }

  })

    CKEDITOR.replace( 'body' );

    $('#imagen , #imagen2 , #file-1').ace_file_input({
      no_file:'No File ...',
      btn_choose:'Choose',
      btn_change:'Change',
      droppable:false,
      onchange:null,
          thumbnail:false, //| true | large
          whitelist:'png|jpg|jpeg|pdf',
          blacklist:'exe|php',
          //onchange:''
          //
        });

          // Add the following code if you want the name of the file appear on select
          $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });


        })
      </script>

    </body>
<?php /**PATH /var/www/html/Raiesc/resources/views/thema/foot.blade.php ENDPATH**/ ?>