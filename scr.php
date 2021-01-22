<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
<script type="text/javascript">
               $(document).ready(function() { 
            $("button").click(function() { 
                $(".anyClass").animate({ 
                    scrollTop: $( 
                      ".anyClass").get(0).scrollHeight 
                }, 1); 
            }); 
            setInterval(function(){$("#button-s").click()}, 1000);
        }); 
</script>