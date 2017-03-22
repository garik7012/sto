$(document).ready(function () {
   $('form').submit(function (e) {
       data = $(this).serializeArray();
       dataForm = {};
       $.each(data,function(){
           dataForm[this.name] = this.value;
       });
       if(!dataForm.fio) return true;
       var errors = false;
       //при повторной отправке удаляем все ошибки
       $('.errorSpan').remove();
       $('.has-error').removeClass('has-error');
       //выбор услуги
       if(('service_id' in dataForm) && dataForm.service_id == '0'){
       $('select[name="service_id"]').addClass('has-error');
       }
       //год авто
       if(('auto_year' in dataForm) && dataForm.auto_year == '0'){
           $('select[name="auto_year"]').addClass('has-error');
       }
       //выбор времени
       if(('auto_year' in dataForm) && !dataForm.order_time){
            $('.g-order_time').addClass('has-error');
       }


       //проверка введенного имени
       var fio = dataForm.fio;
       var reg = /^[а-яА-ЯёЁa-zA-Z - \d]+$/;
       var err = '';
       if (fio.length < 2)  err = "Не менее 2-х символов";
       if (fio.length > 55) err = "Не более 55 символов";
       if (!reg.test(fio)) err = 'Только буквы русского и латинского алфавита, знак "-" (дефис), пробел';
       //если ошибка есть, показываем ее через showError();
       //функция возвращает true, поэтому помечаем что ошибки errors есть
       if (err) errors = showError('fio', err);
       //проверка телефона
       var reg = /^([+]?[0-9\s-\(\)]{5,25})*$/;
       var phone = dataForm.phone;
       if (!reg.test(phone)) err = 'неверный номер';
       if (err) errors = showError('phone', err);

       //если были ошибки при заполнении полей, то выходим
       if (errors) return false;

       //если ошибок не было
        return true;
   }); //< конец действий при нажитии отправить------------




    // ------------------ отображение ошибок ----------------------------------
    /**
     * функция выводит ошибки при заполнении полей.
     * @param fieldName - поле в котором у нас ошибка
     * @param err - текст ошибки
     * @returns {boolean} true
     */
    var showError = function (fieldName, err) {
        //создаем поле для вывода ошибок. его будем клонировать
        errorField = $('<span class="errorSpan help-block"><strong></strong></span>');
        //выводим ошибку
        eF = errorField.clone();
        eF.children().text(err);
        $('input[name=' + fieldName + ']').after(eF);
        $('input[name=' + fieldName + ']').addClass('has-error');
        return true;
    }

});