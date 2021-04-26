@extends('layouts.main')
@section('head')
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- start details -->
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 360,
					thumb_image_height: 360,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
@endsection

@section('content')
<div class="mens">    
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a> / <a href="#">Dolor sit amet</a> / Lorem ipsum dolor sit amet</ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_source_image" src="{{asset('template/web/images/5 cm.jpg')}}" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						 <div class="clearfix"></div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3">5 Cm</h3>
		             <p class="m_5">Rp. 80.000</p>
		         	 <div class="btn_form">
						<form>
							<input type="submit" value="buy" title="">
						</form>
					 </div>
					<span class="m_link"><a href="#">Sinopsis</a> </span>
				     <p class="m_text2">5 Cm, sebuah novel fiksi yang berkisah tentang lima orang sahabat yang bernama Zafran, Arial, Ian, Genta, dan Riani sebagai satu-satunya wanita. Mereka memiliki komitmen dan impian masing-masing.Riani adalah sosok wanita yang cantik dan cerdas, ia mempunyai cita-cita untuk bekerja di stasiun televisi. Arial, memiliki perawakan yang tinggi besar dan paling tampan di antara yang lainnya. Zafran, berpostur tubuh kurus yang merupakan anak band, ia memiliki impian menjadi seorang picisan. Genta, salah satu orang di antara mereka yang selalu dianggap “leader”. Ian memiliki perawakan yang lebih dari ideal, ia fanatik dengan bola dan penggemar Happy Salma.
Persahabatan mereka sudah terjalin selama 7 tahun, namun pada suatu ketika mereka merasakan hal yang sama, yaitu jenuh dengan aktivitas yang selalu mereka lakukan bersama. Di situ lah muncul ide untuk tidak saling berkomunikasi dalam tiga bulan ke depan, dan setelahnya akan bertemu satu sama lain.
Masa tiga bulan sedang mereka jalani, masing-masing dari mereka mengejar impian yang belum diraih. Selama tiga bulan berpisah memang terjadi banyak hal perubahan dalam diri masing-masing, hati mereka lebih kaya daripada sebelumnya.
Akhirnya waktu yang ditunggu-tunggu telah tiba, usai sudah masa tiga bulan untuk tidak berkomunikasi. Mereka merayakan pertemuan itu dengan menempuh sebuah perjalanan panjang.Tujuan akhir perjalanan mereka adalah puncak Mahameru, puncak tertinggi di Pulau Jawa. Dalam perjalanan itu mereka menemukan sebuah arti kehidupan sesungguhnya. Mereka saling merasakan perubahan dalam sisi karir, idealisme, karir, dan cinta. Akhirnya mereka telah meraih impian masing-masing.
</p>
			     </div>
      </div>
			 <div class="clear"></div>
		   </div>
		</div>
@endsection


