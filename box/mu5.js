function sendToMyDB() {
    var name_5 = document.getElementById("name_5");
    var email_5 = document.getElementById("email_5");
    var message_5 = document.getElementById("message_5");
    db.collection("ไปเดชกันท์").doc().set({
            name: name_5.value,
            email: email_5.value,
            message: message_5.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
