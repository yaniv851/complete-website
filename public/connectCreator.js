const bookSel = document.getElementById("book");
const pageSel = document.getElementById("page");
const IGLink = document.querySelector("#IG_link");
const formA = document.querySelector(".login-form");


document.addEventListener("DOMContentLoaded", event => {
    const app = firebase.app();
 
    const db = firebase.firestore();

    

db.collection('videos').onSnapshot(snapshot => {

  snapshot.docChanges().forEach(change => {


  })
})
});

    

    // Click submit in add modal
formA.addEventListener('submit', e => {
  e.preventDefault();
  const db = firebase.firestore();
  db.collection('videos').add({
    book: bookSel.value,
    page: pageSel.value,
    IGLink: IGLink.value,
  });
  if(bookSel.value == "נאציזם ושואה"){
    location.href = "history_videos.html";
  }
  if(bookSel.value == "לשון"){
    location.href = "language_videos.html";
  }
});


  function uploadVid(files) {
    const file = files.item(0);
  
    const storageRef = firebase.storage().ref();
    //upload video to history folder inside storage.
    const vidRef = storageRef.child('נאציזם ושואה');
    const vidRef2 = storageRef.child('לשון');

    if(pageSel.value == "page 10"){
      var spaceRef = vidRef.child('page 10');
      var random = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
      var ref = spaceRef.child(random).put(file);
    }
    if(pageSel.value == "page 13"){
      var spaceRef = vidRef.child('page 13');
      var random = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
      var ref = spaceRef.child(random).put(file);
    }

    if(pageSel.value == "הגייה"){
      var spaceRef = vidRef2.child('pronouncing');
      var random = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
      var ref = spaceRef.child(random).put(file);
    }

    if(pageSel.value == "שם המספר"){
      var spaceRef = vidRef2.child('number');
      var random = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
      var ref = spaceRef.child(random).put(file);
    }
  
    //מחר השאילתא תתבצע באמצעות משפטי תנאי וכמובן לא צריך לשבור את הראש מכיוון שהקוד הנדרש כבר מוכן ונמצא בין הצ'אטים שלי ושל אייל
    //מה שנדרש ממך זה לשים את קטע הקוד הנ"ל בתוך משפט התנאי ולהגיד שאם בחרתי במקצוע היסטוריה תעביר לתיקיה היסטוריה
  
  }

  
  



