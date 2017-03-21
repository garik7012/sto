$(document).ready(function () {
   $('form').submit(function () {
       data = $(this).serializeArray();
       dataForm = {};
       $.each(data,function(){
           dataForm[this.name] = this.value;
       });
   }) 
});