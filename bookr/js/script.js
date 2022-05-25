function dissolveLogin(){
    document.getElementById('dissolve-one').style.display = 'block';
    document.getElementById('dissolve-two').style.display = 'None';
    document.getElementById('loginbtn').style.backgroundColor = '#fc892c';
    document.getElementById('signupbtn').style.backgroundColor = '#ffffff';
}

function dissolveSignup(){
    document.getElementById('dissolve-one').style.display = 'None';
    document.getElementById('dissolve-two').style.display = 'block';
    document.getElementById('loginbtn').style.backgroundColor = '#ffffff';
    document.getElementById('signupbtn').style.backgroundColor = '#fc892c';
}

function addService(){
    document.getElementById('hide').style.display = 'block';
}

function split_stri(input){
    var fields = input.split(':');
    return fields[0];
}

function myFunction(name) {
    return name + ",";
  }

