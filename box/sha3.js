function sendToMyDB() {
    var name_13 = document.getElementById("name_13");
    var email_13 = document.getElementById("email_13");
    var message_13 = document.getElementById("message_13");
    db.collection("โคโคะ").doc().set({
            name: name_13.value,
            email: email_13.value,
            message: message_13.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
