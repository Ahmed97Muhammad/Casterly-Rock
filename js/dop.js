<script>
  function setFries()
{
    var el = document.getElementById("PI");
    if(el.checked)
    {
        document.getElementById("firstname").disabled = true;
        
        document.getElementById("lastname").disabled = true;
        
        document.getElementById("Address").disabled = true;
        
        document.getElementById("PhoneNumber}").disabled = true;
        
        document.getElementById("Email").disabled = true;
        
        document.getElementById("NOP").disabled = true;
        
        document.getElementById("category").disabled = true;
    }
    else
    {
        document.getElementById("fries").disabled = true;    
    }
  }  
</script>


<div><
    input type="radio" name="o1" id="burger" onchange="setFries();"/>Burger</div>

<div id="yesFries"><input type="checkbox" name="e1" id="fries" disabled="disabled"/>Fries with that?</div>

<div><input type="radio" name="o1" id="pizza" onchange="setFries();"/>Pizza</div>

<div><input type="radio" name="o1" id="hotdog" onchange="setFries();"/>Hot Dog</div>