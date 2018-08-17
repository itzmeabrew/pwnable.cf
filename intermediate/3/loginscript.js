

<script type = 'text/javascript'> 
$(function() {
    $('.level-form').submit(function(e) {
        if (document.getElementById('user').value == 'heaven' && document.getElementById('pass').value == 'hell') {} else {
            e.preventDefault();
            alert('Incorrect login')
        }
    })
}) < /script>




<script type="text/javascript">
    var pass;
    pass = prompt("Password", "");
    if (pass == "9286jas") {
        window.location.href = "/levels/main/5?pass=9286jas";
    }
</script>


<form method="POST" action="">
<input type="hidden" value="17294104" name="score"/>
<input type="submit" value="Send"/>
</form>



<script type="text/javascript">
if ( window.addEventListener ) {  
  var state = 0, konami = [38,38,40,40,37,39,37,39,66,65];  
  window.addEventListener("keydown", function(e) {  
    if ( e.keyCode == konami[state] ) state++;  
    else state = 0;  
    if ( state == 10 )  
      window.location = "";  //you can write your own code here
    }, true);  
}  
</script>