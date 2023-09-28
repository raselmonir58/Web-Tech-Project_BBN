function validate(){


    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('username').value;
    var num = document.getElementById('num').value;
    var add = document.getElementById('add').value;
    let blood = document.getElementById('blood').value;
    let password = document.getElementById('password').value;
    let confirmpassword = document.getElementById('confirmpassword').value;
    let gender = document.getElementById('gender').value;
    let dob = document.getElementById('dob').value;
    let role = document.getElementById('role').value;



    if(name == ""){
        document.getElementById('n').innerHTML = "username can't left empty";
        return false;

    }else if(email == ""){
        document.getElementById('e').innerHTML = "email can't left empty";
        return false;
    }else if(username == ""){
        document.getElementById('un').innerHTML = "username can't left empty";
        return false;
    }else if(num == ""){
        document.getElementById('n').innerHTML = "Pnumber can't left empty";
        return false;
    }else if(add == ""){
        document.getElementById('ad').innerHTML = "address can't left empty";
        return false;
    }else if(blood == ""){
        document.getElementById('b').innerHTML = "blood can't left empty";
        return false;
    }else if(password == ""){
        document.getElementById('p').innerHTML = "password can't left empty";
        return false;
    }
    else if(confirmpassword == ""){
        document.getElementById('cp').innerHTML = "confirmpassword can't left empty";
        return false;
    }
    else if(gender == ""){
        document.getElementById('g').innerHTML = "gender can't left empty";
        return false;
    }
    else if(dob == ""){
        document.getElementById('d').innerHTML = "DOB can't left empty";
        return false;
    }
    else if(role == ""){
        document.getElementById('r').innerHTML = "role can't left empty";
        return false;
    }
    else{
        return true;
    }


}