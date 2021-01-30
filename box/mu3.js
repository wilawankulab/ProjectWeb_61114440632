function sendToMyDB() {
    var name_3 = document.getElementById("name_3");
    var email_3 = document.getElementById("email_3");
    var message_3 = document.getElementById("message_3");
    db.collection("เจน").doc().set({
            name: name_3.value,
            email: email_3.value,
            message: message_3.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
