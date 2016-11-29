      <script type="text/javascript">
      function myFunction() {
        console.log("test");
          document.getElementById("company-sign-up").style.display = "block";
          document.getElementById("applicant-sign-up").style.display = "none";
          document.getElementById("index").style.display = "none";

        }

      function myFunction1() {
        console.log("test");
          document.getElementById("applicant-sign-up").style.display = "block";
          document.getElementById("company-sign-up").style.display = "none";
          document.getElementById("index").style.display = "none";

        }

        function funhome(){
          document.getElementById("company-sign-up").style.display = "none";
          document.getElementById("applicant-sign-up").style.display = "none";
          document.getElementById("index").style.display = "block";

        }

        function toggle(){
          $(document).on('click', '.masthead-nav li', function() {
             $(".masthead-nav li").removeClass("active");
             $(this).addClass("active");
        });
        }
      </script>