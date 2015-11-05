<!--JAVASCRIPT-->
  <!--=================================================-->

  <!--jQuery [ REQUIRED ]-->
  <script src="<?= $this-> baseUrl ?>static/js/jquery-2.1.1.min.js"></script>


  <!--BootstrapJS [ RECOMMENDED ]-->
  <script src="<?= $this-> baseUrl ?>static/js/bootstrap.min.js"></script>


  <!--Fast Click [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/fast-click/fastclick.min.js"></script>

  
  <!--Nifty Admin [ RECOMMENDED ]-->
  <script src="<?= $this-> baseUrl ?>static/js/nifty.min.js"></script>


  <!--Switchery [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/switchery/switchery.min.js"></script>


  <!--Bootstrap Select [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/bootstrap-select/bootstrap-select.min.js"></script>


  <!--Bootstrap Tags Input [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>


  <!--Chosen [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/chosen/chosen.jquery.min.js"></script>


  <!--noUiSlider [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/noUiSlider/jquery.nouislider.all.min.js"></script>


  <!--Bootstrap Timepicker [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


  <!--Bootstrap Datepicker [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>


  <!--Dropzone [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/dropzone/dropzone.min.js"></script>


  <!--Summernote [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/summernote/summernote.min.js"></script>


  <!--Demo script [ DEMONSTRATION ]-->
  <script src="<?= $this-> baseUrl ?>static/js/demo/nifty-demo.min.js"></script>


  <!--Form Component [ SAMPLE ]-->
  <script src="<?= $this-> baseUrl ?>static/js/demo/form-component.js"></script>


  <!--DataTables [ OPTIONAL ]-->
  <script src="<?= $this-> baseUrl ?>static/plugins/datatables/media/js/jquery.dataTables.js"></script>
  <script src="<?= $this-> baseUrl ?>static/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="<?= $this-> baseUrl ?>static/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>


  <!--DataTables Sample [ SAMPLE ]-->
  <script src="<?= $this-> baseUrl ?>static/js/demo/tables-datatables.js"></script>  
  <!--

  REQUIRED
  You must include this in your project.

  RECOMMENDED
  This category must be included but you may modify which plugins or components which should be included in your project.

  OPTIONAL
  Optional plugins. You may choose whether to include it in your project or not.

  DEMONSTRATION
  This is to be removed, used for demonstration purposes only. This category must not be included in your project.

  SAMPLE
  Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


  Detailed information and more samples can be found in the document.

  -->

  <script type="text/javascript">

    function genericEmptyFieldValidator(fields){
          returnBool = true;
          $.each(fields, function( index, value ) {
            console.log(value);
            if($('#'+value).val() == "" || $('#'+value).val() == null){
              $('#'+value).keypress(function() {
                  genericEmptyFieldValidator([value]);
              });

              $('#'+value).css("border-color", "red");
              
              returnBool = false;
            }else{
              $('#'+value).css("border-color", "blue");
            }
          });

          return returnBool;
      }

      function postWorkerDetails(fields, languagesArray, skillsArray) {
        var dataString = "";
        var working_slots = "";
        var free_slots = "";

        dataString = "first_name=" + $('#'+fields[0]).val() + "&last_name=" + $('#'+fields[1]).val() +
            "&address_proof_name=" + $('#'+fields[2]).val() + "&address_proof_id=" + $('#'+fields[3]).val() + 
            "&id_proof_name=" + $('#'+fields[4]).val() + "&id_proof_id=" +  $('#'+fields[5]).val() + 
            "&mobile=" +  $('#'+fields[6]).val() + "&education=" +  $('#'+fields[7]).val() + 
            "&experience=" +  $('#'+fields[8]).val() + "&working_domain=" + $('#'+fields[9]).val() +
            "&current_working_city=" + $('#'+fields[10]).val() + "&current_working_area=" +  $('#'+fields[11]).val() + 
            "&preferred_working_city=" + $('#'+fields[12]).val() + "&preferred_working_area=" + $('#'+fields[13]).val()+ 
            "&birth_date=" +  $('#'+fields[14]).val() + "&address=" + $('#'+fields[15]).val() +
            "&gender=" + $("input[name='gender']:checked").val() +
            "&working_slots=" + $('#'+fields[17]).val() +
            "&free_slots=" + $('#'+fields[18]).val() +
            "&languages=" + languagesArray + 
            "&skills=" + skillsArray +
            "&emergancy_mobile=" + $('#emergancy_mobile').val() ;
        
        console.log(dataString);
          $.ajax({
          type: "POST",
          url: "<?= $this->baseUrl ?>workers/addNewWorker",
          data: dataString,
          cache: false,
          success: function(result){
            alert(result);
            console.log(result);
            $(fields).each(function(i, idVal){ 
              $("#"+idVal).val(""); 
            });
            $('#languages').val("");
            $('#skills').val("");
            $('#emergancy_mobile').val(""); 
            alert("Added Successfully");
          },
          error: function(result){
            alert(result);
            return false;
          }
        });
      }

      function validateWorkerDetails(){
          
           fields = ["first_name","last_name","address_proof_name", "address_proof_id", 
                "id_proof_name", "id_proof_id", "mobile", 
                "education", "experience", "working_domain", 
                "current_working_city", "current_working_area", "preferred_working_city", 
                "preferred_working_area", "birth_date", "address" ];
                /*, "working_slot1_from", "working_slot1_to", "free_slot1_from", 
                "free_slot1_to"*/
           //emergancy_mobile not compulsary
          /*var languagesArray = []; 
          $('#languages :selected').each(function(i, selected){ 
            languagesArray[i] = $(selected).val(); 
          });*/

          var languagesArray = []; 
          $('#languages').each(function(i, selected){ 
            languagesArray[i] = $(selected).val(); 
          });

          var skillsArray = []; 
          $('#skills').each(function(i, selected){ 
            skillsArray[i] = $(selected).val(); 
          });

          
          if(genericEmptyFieldValidator(fields)){
            
            //var phoneVal = $('#mobile').val();
                    
            /*var stripped = phoneVal.replace(/[\(\)\.\-\ ]/g, '');    
            if (isNaN(parseInt(stripped))) {
              //error("Contact No", "The mobile number contains illegal characters");
              $('#mobile').css("border", "1px solid OrangeRed");
              return false;
            }
            else if (phoneVal.length != 10) {
              //error("Contact No", "Make sure you included valid contact number");
              $('#mobile').css("border", "1px solid OrangeRed");
              return false;
            }*/
            
            postWorkerDetails(fields, languagesArray, skillsArray);

          }
          return false;
      }



      function validateAgentRegister() {

            fields = ["company_name", "address", "email", "mobile", "first_name", "username", "password"];
            
            if (genericEmptyFieldValidator(fields) ) {
              alert("inside genericEmptyFvhxbvjhsieldValidator");
              //$('span[id^="password_span"]').empty();
              var dataString = "";

              dataString = "company_name=" + $('#company_name').val() + "&address=" + $('#address').val() +
                            "&email=" + $('#email').val() + "&mobile=" + $('#mobile').val() +
                            "&first_name=" + $('#first_name').val() + "&last_name=" + $('#last_name').val() + 
                            "&username=" + $('#username').val() + "&password=" + $('#password').val() ; 

              $.ajax({
                type: "POST",
                url: "<?= $this-> agentBaseUrl?>"+"home/signup",
                data: dataString,
                cache: false,
                success: function(result){
                  alert("inside succeessss");
                  console.log("insode success");
                  window.location.reload();
                  //alert(result);
                  /*var hash = window.location.hash.slice(); //Puts hash in variable, and removes the # character;
                  if (hash){
                    hash = (hash.split("?")[1]).split("=")[1];
                    window.location.replace(hash);              
                  }
                  else{
                    location.reload();
                  }*/
                },
                error: function(result){
                  alert("inside error");
                  console.log("insode error");

                  /*$("#password_span").append("<font color='red'>Incorrect Value for Username or Password</font>");
                  setTimeout(function () {
                    $('span[id^="password_span"]').empty();
                  }, 15000);*/
                }
              });
            }
        
        return false;
    }

    function validateAgentLogin() {

          fields = ["username_login", "password_login"];
          
          if (genericEmptyFieldValidator(fields) ) {
            //$('span[id^="password_span"]').empty();
            var dataString = "";

            dataString = "username=" + $('#username_login').val() + "&password=" + $('#password_login').val() ; 

            $.ajax({
              type: "POST",
              url: "<?= $this-> agentBaseUrl?>"+"home/login",
              data: dataString,
              cache: false,
              success: function(result){
                alert("inside succeessss");
                console.log("insode success");
                window.location.reload();
                //alert(result);
                /*var hash = window.location.hash.slice(); //Puts hash in variable, and removes the # character;
                if (hash){
                  hash = (hash.split("?")[1]).split("=")[1];
                  window.location.replace(hash);              
                }
                else{
                  location.reload();
                }*/
              },
              error: function(result){
                alert("inside error");
                console.log("insode error");

                /*$("#password_span").append("<font color='red'>Incorrect Value for Username or Password</font>");
                setTimeout(function () {
                  $('span[id^="password_span"]').empty();
                }, 15000);*/
              }
            });
          }
      
      return false;
    }


  </script>