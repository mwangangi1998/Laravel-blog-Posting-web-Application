<!-- Remove the container if you want to extend the Footer to full width. -->


    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0a4275;">


            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <b>
                    &copy; <span id="year"></span>
                </b>
                <a class="text-white text-uppercase" href="{{ url('/') }}">vtech.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->


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

</script>
