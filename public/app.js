//   // Click submit and add doc with fields
// addModalForm.addEventListener('submit', e => {
//   e.preventDefault();
//   const db = firebase.firestore();
//   db.collection('videos').add({
//     subject: addModalForm.subjectSel.value,
//     book: addModalForm.bookSel.value,
//     page: addModalForm.pageSel.value,
//     IGLink: addModalForm.email.value,
//   });
// });


document.addEventListener("DOMContentLoaded", event => {
    const app = firebase.app();
 
    const db = firebase.firestore();

db.collection('videos').onSnapshot(snapshot => {

  snapshot.docChanges().forEach(change => {


  })
})
});

const formA = document.querySelector(".login-form");

var subjectObject = {
    "History": {
      "נאציזם ושואה": ["page 10", "page 13", "page 14"],
      "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]    
    },
      "English": {
      "PHP": ["12", "13", "14"]
    }, 
    "Math": {
      "ahsf": ["12", "13", "14"]
    }
  }
  window.onload = function() {
    var subjectSel = document.getElementById("subject");
    var bookSel = document.getElementById("book");
    var pageSel = document.getElementById("page");
    for (var x in subjectObject) {
      subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() {
      //empty Chapters- and Topics- dropdowns
      pageSel.length = 1;
      bookSel.length = 1;
      //display correct values
      for (var y in subjectObject[this.value]) {
        bookSel.options[bookSel.options.length] = new Option(y, y);
      }
    }
    bookSel.onchange = function() {
      //empty Chapters dropdown
      pageSel.length = 1;
      //display correct values
      var z = subjectObject[subjectSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        pageSel.options[pageSel.options.length] = new Option(z[i], z[i]);
      }
    }
    const IGLink = document.querySelector("#IG_link");


    // Click submit in add modal
formA.addEventListener('submit', e => {
  e.preventDefault();
  const db = firebase.firestore();
  db.collection('videos').add({
    subject: subjectSel.value,
    book: bookSel.value,
    page: pageSel.value,
    IGLink: IGLink.value,
  });
});
  }



