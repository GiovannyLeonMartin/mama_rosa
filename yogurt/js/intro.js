 function calcula_resta(){
var n1=0;
var n2=0;
var n3=0;
var n4=0;
var n5=0;
var n6=0;
var n7=0;
var n8=0;
var n9=0;
var n10=0;
var l=55;
var m=33
     n1=parseInt(document.getElementById('tentacles1').value);
     n2=parseInt(document.getElementById('tentacles2').value);
     n3=parseInt(document.getElementById('tentacles3').value);
     n4=parseInt(document.getElementById('tentacles4').value);
     n5=parseInt(document.getElementById('tentacles5').value);
     n6=parseInt(document.getElementById('tentacles6').value);
     n7=parseInt(document.getElementById('tentacles7').value);
     n8=parseInt(document.getElementById('tentacles8').value);
     n9=parseInt(document.getElementById('tentacles9').value);
     n10=parseInt(document.getElementById('tentacles10').value);

    res1=(n1*l)+(n2*m)+(n3*l)+(n4*m)+(n5*l)+(n6*m)+(n7*l)+(n8*m)+(n9*l)+(n10*m);


console.log("el resultado es :"+res1+"MNX");
document.getElementById('lbResultado').innerHTML = "Precio a pagar : "+""+res1+" "+"MNX";
}
