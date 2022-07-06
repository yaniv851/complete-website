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

function uploadVid(files) {
  const file = files.item(0);

  const storageRef = firebase.storage().ref();
  //upload video to history folder inside storage.
  const vidRef = storageRef.child('נאציזם ושואה');
  var spaceRef = vidRef.child('page 13');
  var random = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  var ref = spaceRef.child(random).put(file);
  //מחר השאילתא תתבצע באמצעות משפטי תנאי וכמובן לא צריך לשבור את הראש מכיוון שהקוד הנדרש כבר מוכן ונמצא בין הצ'אטים שלי ושל אייל
  //מה שנדרש ממך זה לשים את קטע הקוד הנ"ל בתוך משפט התנאי ולהגיד שאם בחרתי במקצוע היסטוריה תעביר לתיקיה היסטוריה

}

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
    const IGLink = document.querySelector("#IG_link");

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


  
  



