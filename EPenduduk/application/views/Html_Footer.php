	</body>
	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://js.pusher.com/4.1/pusher.min.js"></script>
      <script type="text/javascript" src="http://localhost/EPenduduk/assets/materialize/js/materialize.min.js"></script>
      <script type="text/javascript">

        $(".button-collapse").sideNav();

      	  	$('.datepicker').pickadate({
    			selectMonths: true, // Creates a dropdown to control month
    			selectYears: 100, // Creates a dropdown of 15 years to control year,
    			today: 'Today',
    			clear: 'Clear',
    			close: 'Ok',
    			closeOnSelect: false // Close upon selecting a date,
  			});

      	   	$(document).ready(function() {
    			$('select').material_select();
  			});

  			$("#jenis_kelamin").val();
  			
  			$("#gol_darah").val();


    $("#tampil_data").on('click',function () {


          $('.modal').modal();

  });

    $("#tampil_data1").on('click',function () {
          $('.modal').modal();
  });

          function tampilkanFoto(abc) {

            var src_img = '../../assets/images/' + abc;

          $("#img_foto").attr("src",src_img);
          $('.modal').modal();

  };

          function tampilkanDetail(nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,agama,status,pekerjaan,kewarganegaraan,gol_darah,foto_ktp) {
            
            $("#nik").text(nik);
            $("#nama").text(nama);
            $("#tempat_lahir").text(tempat_lahir);

            $('.modal').modal();

          }


  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });


      
      </script>
  </html>