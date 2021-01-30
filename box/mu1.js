function sendToMyDB() {
    var name_1 = document.getElementById("name_1");
    var email_1 = document.getElementById("email_1");
    var message_1 = document.getElementById("message_1");
    db.collection("แก่นจันทร์").doc().set({
            name: name_1.value,
            email: email_1.value,
            message: message_1.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
