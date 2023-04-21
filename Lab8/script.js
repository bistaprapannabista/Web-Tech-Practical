function clearValue(){
  document.getElementById("input1").value=null;
  document.getElementById("input2").value=null;
  document.getElementById("input3").value=null;  
  document.getElementById("output").innerHTML=null;
 }

function findMax(){
  let x = Number(document.getElementById("input1").value);
  let y = Number(document.getElementById("input2").value);
  let z = Number(document.getElementById("input3").value);
  let max = null;
  if(x>y&&x>z) max = x;
  else if(y>x&&y>z) max = y;
  else if(z>x&&z>y) max = z;
  max!=null?document.getElementById("output").innerHTML=`The greatest among three is ${max}`:null;
}
