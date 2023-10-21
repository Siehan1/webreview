const judul = document.getElementById("judul-film").innerText;
const rating = document.getElementById("rating-film");
const umur = document.getElementById("batas-umur");
const durasi = document.getElementById("durasi-film");

getFilmDetail(judul);

// function showInfo() {
//   rating.innerHTML = "";
//   getFilmDetail(judul).then((datas) => {
//     datas.forEach((data) => {
//       // const childEl = document.createElement("span");

//       Object.keys(data).forEach((key) => {
//         const childTd = document.createElement("span");
//         // console.log(val);
//         childTd.innerText = data[key];
//         //   childEl.appendChild(childTd);
//       });
//     });
//   });
// }
$.ajax({
  url: "http://www.omdbapi.com",
  type: "get",
  dataType: "json",
  data: {
    apikey: "64f76c30",
    t: judul,
  },
  success: function (result) {
    // $.each(result, function (i, data) {
    // rating.innerHTML = "";
    //   console.log(data);
    //   Object.keys(data).forEach((key) => {
    //     const childSpan = document.createElement("span");
    //     childSpan.innerText = data[key];
    //   });
    // });

    Object.keys(result).forEach((key) => {
      const childSpan = document.createElement("span");
      childSpan.innerText = result[key];
    });
  },
});

async function getFilmDetail(judul) {
  const res = await fetch("http://www.omdbapi.com?apikey=64f76c30&t=" + judul);
  const datas = await res.json();
  console.log(datas);
  return datas;
}
