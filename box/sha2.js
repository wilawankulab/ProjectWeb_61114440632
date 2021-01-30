function sendToMyDB() {
    var name_12 = document.getElementById("name_12");
    var email_12 = document.getElementById("email_12");
    var message_12 = document.getElementById("message_12");
    db.collection("อ้น").doc().set({
            name: name_12.value,
            email: email_12.value,
            message: message_12.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
