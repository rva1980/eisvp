function has_id(id){try{var tmp=document.getElementById(id).value;}catch(e){return false;}
return true;}
function has_name(nm){try{var tmp=cfrm.nm.type;}catch(e){return false;}
return true;}
function $$(id){if(!has_id(id)&&!has_name(id)){alert("El campo "+id+" No Existe!\n Validación de Formulario.");return false;}
if(has_id(id)){return document.getElementById(id).value;}else{return;}}
function $val(id){return document.getElementById(id);}
function trim(id){$val(id).value=$val(id).value.replace(/^\s+/,'').replace(/\s+$/,'');}
var required={field:[],add:function(name,type,mess){this.field[this.field.length]=[name,type,mess];},out:function(){return this.field;},clear:function(){this.field=[];}};var validate={check:function(cform){var error_message='Por favor verifique los siguientes Errores:\n\n';var mess_part='';var to_focus='';var tmp=true;for(var i=0;i<required.field.length;i++){if(this.checkit(required.field[i][0],required.field[i][1],cform)){}else{error_message=error_message+'Debe Ingresar '+required.field[i][2]+'\n';if(has_id(required.field[i][0])&&to_focus.length===0){to_focus=required.field[i][0];}
tmp=false;}}
if(!tmp){alert(error_message);}
if(to_focus.length>0){document.getElementById(to_focus).focus();}
return tmp;},checkit:function(cvalue,ctype,cform){if(ctype=="VALIDAR_NO_VACIO"){if(this.trim($$(cvalue)).length<1){return false;}else{return true;}}else if(ctype=="VALIDAR_EMAIL"){exp=/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;if($$(cvalue).match(exp)==null){return false;}else{return true;}}},trim:function(s){if(s.length>0){return s.replace(/^\s+/,'').replace(/\s+$/,'');}else{return s;}}};