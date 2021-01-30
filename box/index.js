
src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"
src="https://www.gstatic.com/firebasejs/7.9.1/firebase-firestore.js"
src="https://www.gstatic.com/firebasejs/7.9.3/firebase-analytics.js"

  
  var firebaseConfig = {
    apiKey: "AIzaSyCunav6ym7I_k9iW3X0-zC31zLsGEiU0L8",
    authDomain: "recomend-fde93.firebaseapp.com",
    databaseURL: "https://recomend-fde93.firebaseio.com",
    projectId: "recomend-fde93",
    storageBucket: "recomend-fde93.appspot.com",
    messagingSenderId: "315863403021",
    appId: "1:315863403021:web:dd21d3cb7ccab2305de344",
    measurementId: "G-7VTFS2RYLM"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  const db = firebase.firestore();