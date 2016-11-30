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

        function profile(){
          document.getElementById("company-profile").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("post-job").style.display = "none";
        }
        function applicant(){
          document.getElementById("applicant-list").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("company-profile").style.display = "none";
          document.getElementById("post-job").style.display = "none";
        }
        function postJob(){
          document.getElementById("post-job").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("company-profile").style.display = "none";
          document.getElementById("applicant-list").style.display = "none";
        }

        function jobvacany(){
          document.getElementById("list-company").style.display = "none";
          document.getElementById("applicant-profile").style.display = "none";
          document.getElementById("list-job").style.display = "block";
        }
        function dashboardA(){
          document.getElementById("list-company").style.display = "block";
          document.getElementById("applicant-profile").style.display = "none";
          document.getElementById("list-job").style.display = "none";
        }




      </script>