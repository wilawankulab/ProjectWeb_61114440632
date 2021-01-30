function sendToMyDB() {
    var name_11 = document.getElementById("name_11");
    var email_11 = document.getElementById("email_11");
    var message_11 = document.getElementById("message_11");
    db.collection("อินดี้").doc().set({
            name: name_11.value,
            email: email_11.value,
            message: message_11.value,


        })
        .then(function() {
            console.log("Document successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document: ", error);
        });



}
