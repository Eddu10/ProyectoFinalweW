// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDfAFotSUwYoYXJ8n0YnJ-XgDcqHd1UDhw",
  authDomain: "el-foraneo.firebaseapp.com",
  projectId: "el-foraneo",
  storageBucket: "el-foraneo.appspot.com",
  messagingSenderId: "565146398751",
  appId: "1:565146398751:web:667b71624c42055d21252a",
  measurementId: "G-ZS2BQ2FTKN"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);