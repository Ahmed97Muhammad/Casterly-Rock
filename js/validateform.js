function validate(){
var txts  = document.querySelectorAll("input[type='text']");
 for(var i=0;i<txts.length;i++){
  if(!txts[i].value)
   txts[i].parentNode.classList.add('invalid');
  else
    txts[i].parentNode.classList.remove('invalid');
 }
}