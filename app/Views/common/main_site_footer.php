<div class="modal slideshow-modal deepblack-bg" id="slideshow-modal">
</div>
<div class="modal error-modal carbon-bg white-text" id="error-modal">
    <div class="modal-wrap">
        <div class="wrap text-wrap align-center">
            <h2>Something isn't loading properly.</h2>
            <p>Please <a href="#go-back">go back</a> and try again, or use the main menu above.</p>
        </div>
    </div>
</div>
<script type='text/javascript' src="<?= base_url('assets/mainsite/js/lib/jquery3.2.1.min.js') ?>" id='jquery-js'></script>
<script type='text/javascript' src="<?= base_url('assets/mainsite/js/scripts-min.js') ?>" id='v2_scripts-js'></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="//instant.page/1.1.0" type="module" integrity="sha384-EwBObn5QAxP8f09iemwAJljc+sU+eUXeL9vSBw1eNmVarwhKk2F9vBEpaN9rsrtp"></script> -->
<button onclick="scrollTopFunc()" id="topBtn" class="scroll-top" title="Scroll to top">Top</button>

<script>
	//Get the button
	var mybutton = document.getElementById("topBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function scrollTopFunc() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}

	$(document).ready(function() {
	
		$('#menuBtn').click(function() {
			$('#mainMenu').slideToggle('slow', function() {
				$('#mainMenu').toggleClass('hide', $(this).is(':visible'));
			});
		});
	});
</script>
</body>
<!-- Mirrored from JSD Constructionkundig.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 04:00:40 GMT -->
</html>