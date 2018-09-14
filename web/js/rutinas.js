function formulario(){
    var nombre_completo=document.getElementById("txtNombre").value;
    var run=document.getElementById("txtRun").value;
    var largo=run.length;
    if (largo!=8) {
        alert("rut mal ingresado");
        return;
    }
    var suma=0;var mult=3;
    for (var index = 0; index < 8; index++) {
        var caracter=run.substring(index,index+1);
        suma=suma+(parseInt(caracter)*mult);
        mult--;
        if (mult==1) {
            mult=7;
        }        
        
    }
    alert("suma:"+suma);    
    alert("Digito:"+(11-(suma % 11)));
}