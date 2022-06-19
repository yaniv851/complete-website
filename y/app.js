document.addEventListener("DOMContentLoaded", event => {
  const app = firebase.app();
  const db = firebase.firestore();
  const count = db.collection('israel').doc('mercaz');
  

  count.onSnapshot(doc => {
    const data = doc.data();
    const viewdata = document.querySelector("#container");
    viewdata.textContent = [data.city +' - '+ data.people];
    console.log(data.city);

  })
    
});