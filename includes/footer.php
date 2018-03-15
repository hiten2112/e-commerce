
</div><br><br>
<div class="col-md-12 text-center">&copy;Copyright2017-2018 Easykart</div>
<!--details modal-->



<script>
jQuery(window).scroll(function(){
var vscroll = jQuery(this).scrollTop();
console.log(vscroll);
});
function detailsmodal(id){
  var data = {"id" : id};
  jQuery.ajax({
    url :'/tutorials/includes/detailsmodal.php',
     method : "post",
     data : data,
     success : function(data){
       jQuery('body').append(data);
       jQuery('#details-modal').modal('toggle');
     },
     error : function(){
       alert("something went worng");
     }
  });

}
</script>
  </body>
</html>
