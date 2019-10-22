// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here, other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
var config = {
    apiKey: "AIzaSyBAT6MvcUCIz-4LUBo6O_uasMoePaKECrY",
    authDomain: "laravel-fcm-b0f07.firebaseapp.com",
    databaseURL: "https://laravel-fcm-b0f07.firebaseio.com",
    projectId: "laravel-fcm-b0f07",
    storageBucket: "laravel-fcm-b0f07.appspot.com",
    messagingSenderId: "745064144574"
  };
  firebase.initializeApp(config);

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

