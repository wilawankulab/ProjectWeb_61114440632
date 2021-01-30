function sendToMyDB() {
    var name_4 = document.getElementById("name_4");
    var email_4 = document.getElementById("email_4");
    var message_4 = document.getElementById("message_4");
    db.collection("ลามูน").doc().set({
            name: name_4.value,
            email: email_4.value,
            message: message_4.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
