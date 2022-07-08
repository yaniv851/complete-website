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
    book: bookSel,
    page: pageSel,
    IGLink: IGLink,
  });
  if(bookSel.value == "נאציזם ושואה"){
    window.open("history_videos.html");
  }
});


  function uploadVid(files) {
    const file = files.item(0);
  
    const storageRef = firebase.storage().ref();
    //upload video to history folder inside storage.
    const vidRef = storageRef.child('נאציזם ושואה');
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
  
    //מחר השאילתא תתבצע באמצעות משפטי תנאי וכמובן לא צריך לשבור את הראש מכיוון שהקוד הנדרש כבר מוכן ונמצא בין הצ'אטים שלי ושל אייל
    //מה שנדרש ממך זה לשים את קטע הקוד הנ"ל בתוך משפט התנאי ולהגיד שאם בחרתי במקצוע היסטוריה תעביר לתיקיה היסטוריה
  
  }

  
  



