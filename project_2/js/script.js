/**
 * Created by swarup on 5/7/2017.
 */

//function onlyAlphabets(e, t) {
//    //try {
//    //    if (window.event) {
//    //        var charCode = window.event.keyCode;
//    //    }
//    //    else if (e) {
//    //        var charCode = e.which;
//    //    }
//    //    else { return true; }
//    //    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode==08) || (charCode==127))
//    //        return true;
//    //    else
//    //        return false;
//    //}
//    //catch (err) {
//    //    alert(err.Description);
//    //}
//    
//     var charCode = (e.which) ? evt.which : event.keyCode
//         if (charCode > 31 && (charCode < 48 || charCode > 57))
//            return false;
//
//         return true;
//}

	function isAlphaKey(evt){	
        var charCode = (e.which) ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

                return true;
      }

function onlyNumbers(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode >= 48 && charCode <= 57))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}


function getage(dob){
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    //alert(age+' years old');
    return age;
}


function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}