<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0a4275;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3 b-300">subscribe to our news letter</span>
                        <a href="{{ url('inc.newsletter') }}">
                            <button type="button" class="btn btn-outline-light btn-rounded" id="myButton">
                                subscribe
                            </button>
                        </a>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <b>
                &copy; <span id="year"></span>
            </b>
                <a class="text-white text-uppercase" href="{{ url("/") }}">vtech.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>

</div>
<!-- End of .container -->
<style>
    footer {
        /* overflow: visible; */
        position: fixed;
        bottom: 0;
        /* height: 70px; */
        left: 0;
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        footer {
            left: 0;
            width: 100%;
            position: relative;
        }
    }
</style>
<script>
document.getElementById('year').innerHTML
=new Date().getFullYear();


// pop up form for subscription
// JavaScript code
var myButton = document.getElementById("myButton");
var myPopupForm = document.getElementById("myPopupForm");

myButton.addEventListener("click", function() {
  if (myPopupForm.style.display === "none") {
    myPopupForm.style.display = "block"; // Show the pop-up form
  } else {
    myPopupForm.style.display = "none"; // Hide the pop-up form
  }
});

</script>
