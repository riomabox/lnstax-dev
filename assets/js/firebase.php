<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCstgJfmj7mDXmVaU-YRpAWSt69umHRkE0",
    authDomain: "detik-deface.firebaseapp.com",
    databaseURL: "https://detik-deface-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "detik-deface",
    storageBucket: "detik-deface.appspot.com",
    messagingSenderId: "469322777798",
    appId: "1:469322777798:web:131e585da38d4a1d3ac3c7",
    serviceAccount: "https://detik-deface-default-rtdb.asia-southeast1.firebasedatabase.app/users.json",
    measurementId: "G-328BDXCK4D",
  };
  firebase.initializeApp(config);
  firebase.analytics();
  var database = firebase.database();
  var lastIndex = 0;
</script>