let treeArray = [
  {
    id: 1,
    name: "Sen đá",
    src: "/assets/img/caysenda.jpg",
    desc: "Là một loại cây sukulen có thân thảo, dễ chăm sóc và phổ biến trong việc trồng trong nhà.",
    point: 300,
  },
  {
    id: 2,
    name: "Cây dây nhện",
    src: "/assets/img/caydaynhen.jpg",
    desc: "Là một loại cây cảnh phổ biến với các lá mảng xanh dẹp và dải mảng màu trắng hoặc vàng.",
    point: 200,
  },
  {
    id: 3,
    name: "Cây tuyết tùng",
    src: "/assets/img/caytuyettung.jpg",
    desc: "Là một loại cây gỗ nhỏ thuộc họ Cupressaceae. Chúng có nguồn gốc từ khu vực Bắc Mỹ và châu Á và được trồng rộng rãi trên toàn thế giới như cây cảnh và cây rào",
    point: 500,
  },
  {
    id: 4,
    name: "Xương rồng",
    src: "/assets/img/cayxuongrong.jpg",
    desc: "Loại cây xanh thủy sinh từ khu vực khí hậu ôn đới ấm đến nhiệt đới và thường được trồng làm cây cảnh trong nhà",
    point: 100,
  },
  {
    id: 5,
    name: "Sen đá",
    src: "/assets/img/caysenda.jpg",
    desc: "Là một loại cây sukulen có thân thảo, dễ chăm sóc và phổ biến trong việc trồng trong nhà.",
    point: 300,
  },
  {
    id: 6,
    name: "Cây dây nhện",
    src: "/assets/img/caydaynhen.jpg",
    desc: "Là một loại cây cảnh phổ biến với các lá mảng xanh dẹp và dải mảng màu trắng hoặc vàng.",
    point: 200,
  },
  {
    id: 7,
    name: "Cây tuyết tùng",
    src: "/assets/img/caytuyettung.jpg",
    desc: "Là một loại cây gỗ nhỏ thuộc họ Cupressaceae. Chúng có nguồn gốc từ khu vực Bắc Mỹ và châu Á và được trồng rộng rãi trên toàn thế giới như cây cảnh và cây rào",
    point: 500,
  },
  {
    id: 8,
    name: "Xương rồng",
    src: "/assets/img/cayxuongrong.jpg",
    desc: "Loại cây xanh thủy sinh từ khu vực khí hậu ôn đới ấm đến nhiệt đới và thường được trồng làm cây cảnh trong nhà",
    point: 100,
  },
];

showT(treeArray);

function showT(curArray) {
  for (var i = 0; i < curArray.length; i++) {
    document.getElementById("list-tree").innerHTML += `
    <div class="col l-5 m-12 c-12">
        <div class="exchange__wrap-item">
            <div class="circle"></div>
            <div class="exchange__wrap-info">
                <h1>${curArray[i].name}</h1>
                <p>
                    ${curArray[i].desc}
                </p>
                <p><span>Điểm: </span>${curArray[i].point}</p>
                <button>Đổi ngay</button>
            </div>
            <img src="${curArray[i].src}" alt="" />
        </div>
    </div>
        `;
  }
}

function setItem() {
  var count = 0;
  for (let i = 1; i <= 30; i++) {
    var x = localStorage.getItem(i);
    if (x > 0) count += parseInt(x);
  }
  document.getElementById("exchange_sp").innerHTML = count;
}

setItem();
