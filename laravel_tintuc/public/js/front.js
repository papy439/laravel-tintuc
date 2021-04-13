$('#btnSendSub').click(function(){


var txtEmailSub = $('txtEmailSub').val();


//check email co trong hay khong
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(txtEmailSub) == false){
        alert('Email không hợp lệ, vui lòng kiểm tra lại !');
        return false;
    }

    alert('Email này oke');

});