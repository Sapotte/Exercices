var birthDate;
var jour;
var age;

document.getElementById("ok").addEventListener("click", function(e) {
    e.preventDefault;
    birthDate =  new Date(document.getElementById("naissance").value);
    jour = new Date();
    if (isNaN(birthDate)) {
        alert("Veuillez renseigner votre date de naissance")
    } else if (birthDate > jour){
        alert("Vous n'êtes pas encore né...")
    }else {
        var diff = jour - birthDate;
        var age = new Date(diff); 
        age = Math.abs(age.getUTCFullYear() - 1970);
        if ((birthDate.getDate()==jour.getDate()) && (birthDate.getMonth()==jour.getMonth())) {
            alert("Joyeux anniversaire! Vous avez " + age + " ans aujourd'hui!")
        } else {
            alert("Vous avez " + age + " ans !")
        }   
    }
})




