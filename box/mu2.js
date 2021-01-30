function sendToMyDB() {
    var name_2 = document.getElementById("name_2");
    var email_2 = document.getElementById("email_2");
    var message_2 = document.getElementById("message_2");
    db.collection("มิก").doc().set({
            name: name_2.value,
            email: email_2.value,
            message: message_2.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
