function sendToMyDB() {
    var name_6 = document.getElementById("name_6");
    var email_6 = document.getElementById("email_6");
    var message_6 = document.getElementById("message_6");
    db.collection("หมูกระทะคุณย่า").doc().set({
            name_1: name_6.value,
            email_1: email_6.value,
            message_1: message_6.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
