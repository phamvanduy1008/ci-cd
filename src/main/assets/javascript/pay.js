let galleryArray = [
  {
    id: 1,
    name: "Ống hút gạo",
    src: "/assets/img/onghutgao.webp",
    desc: "Một trong những lợi ích của ống hút gạo là dễ dàng phânhủy trong 3 tháng thay vì hàng trăm năm như ống hút bình thường.",
    price: 20.0,
  },

  {
    id: 3,
    name: "Bình giữ nhiệt inox",
    src: "/assets/img/binhgiunhiet.jpg",
    desc: "Chất liệu rất bền, có thể tái chế, tái sử dụng nhiều lần mà không gây nguy hiểm cho sức khỏe. Chỉ cần bạn vệ sinh sạch sẽ là được.",
    price: 20.0,
  },
  {
    id: 4,
    name: "Túi vải không dệt",
    src: "/assets/img/tuivaikhongdet.jpg",
    desc: "Những loại túi vải này có thể tái sử dụng bằng cách giặt sạch sau mỗi lần dùng. Chính vì vậy mà túi vải đã trở thành một món đồ dùng thân thiện với môi trường",
    price: 20.0,
  },
  {
    id: 5,
    name: "Ống hút tre",
    src: "/assets/img/onghuttre.jpg",
    desc: "Có thể vệ sinh và tái sử dụng, kháng khuẩn tự nhiên, phân hủy tự nhiên. Sử dụng tre Việt Nam tự nhiên 100% và có thể sử dụng với đồ uống nóng & lạnh",
    price: 20.0,
  },
  {
    id: 6,
    name: "Bông tắm xơ mướp",
    src: "/assets/img/bongtamxomuop.png",
    desc: "Xơ mướp còn được làm thành bông tắm vệ sinh cá nhân. Sản phẩm vừa có tác dụng tẩy tế bào chết, vừa tốt cho việc lưu thông máu.",
    price: 20.0,
  },
  {
    id: 8,
    name: "Túi vải dứa",
    src: "/assets/img/tuivaidua.jpg",
    desc: "Sản phẩm này được dệt từ các sợi PP, có sức chịu tải rất tốt, thường được dùng để đựng cám, gạo, thực phẩm đi chợ,… Độ bền của sản phẩm có thể lên đến 5 năm, vì vậy bạn hoàn toàn có thể tái sử dụng nhiều lần.",
    price: 20.0,
  },
  {
    id: 9,
    name: "Xà phòng thiên nhiên",
    src: "/assets/img/xaphongthiennhien.jpg",
    desc: "Các loại xà bông tắm làm từ các thành phần tự nhiên như bơ, mật ong, nha đam… hoặc các dầu thực vật (oliu, dầu dừa…) Không có chất bảo quản, không có chất hóa học tạo mùi.",
    price: 20.0,
  },
  {
    id: 10,
    name: "Bộ ống hút inox",
    src: "/assets/img/boonghutinox.jpg",
    desc: "Việc sử dụng bộ ống hút inox – một sản phẩm thân thiện với môi trường khá phổ biến, hiện đang là giải pháp tối ưu nhất.",
    price: 20.0,
  },
  {
    id: 11,
    name: "Bàn chải tre",
    src: "/assets/img/banchaitre.jpg",
    desc: "Sản phẩm với phần thân được làm từ tre, sợi lông làm từ sợi sinh học dễ phân hủy và vỏ hộp làm từ giấy tái chế.",
    price: 20.0,
  },
  {
    id: 12,
    name: "Bình nước giữ nhiệt bằng tre",
    src: "/assets/img/binhnuoctre.jpg",
    desc: "Bình nước làm từ tre là sản phẩm thân thiện môi trường. Có thể tái sử dụng nhiều lần và không gây hại cho môi trường khi thải ra ngoài.",
    price: 20.0,
  },
  {
    id: 14,
    name: "Giỏ tre, nứa",
    src: "/assets/img/giotrenua.jpg",
    desc: "Chúng dễ phân hủy không gây hại tới đất. Đồng thời tăng thêm thu nhập cho những người làm nghề đan lát.",
    price: 20.0,
  },
  {
    id: 15,
    name: "Túi đựng thực phẩm tự phân huỷ sinh học",
    src: "/assets/img/tuidungthucpham.webp",
    desc: "Túi có khả năng chống rò rỉ chất bẩn trong quá trình di chuyển. Đặc biệt, nếu các túi rác thông thường mất tới hàng trăm năm mới phân hủy thì túi này chỉ khoảng vài năm, ít gây hại cho môi trường đất.",
    price: 20.0,
  },
  {
    id: 16,
    name: "Ly giấy",
    src: "/assets/img/lygiay.jpg",
    desc: "Sản phẩm được làm ra từ nguyên liệu bột giấy chất lượng cao được tráng lớp PE chống thấm chịu được đồ uống nóng lạnh",
    price: 20.0,
  },
  {
    id: 17,
    name: "Miếng rửa bát xơ mướp",
    src: "/assets/img/miengruabatxomuop.jpg",
    desc: "Vừa rẻ lại dễ tìm, giá thành không cao mà công dụng còn vượt trội hơn hẳn. Miếng rửa bát xơ mướp vừa nhẹ, có khả năng tạo bọt làm sạch vết bẩn.",
    price: 20.0,
  },
  {
    id: 18,
    name: "Vải bọc sáp ong",
    src: "/assets/img/vaibocsapong.jpg",
    desc: "Vải sáp ong được làm hoàn toàn từ các nguyên liệu tự nhiên, không chứa chất độc hại. Bạn có thể dùng đê bọc các loại rau củ, bánh mì, chén dĩa… Có thể tái sử dụng nên có thể thay thế hoàn toàn túi nilon, màng bọc thực phẩm và hộp nhựa.",
    price: 20.0,
  },
  {
    id: 20,
    name: "Kính râm bằng gỗ",
    src: "/assets/img/kinhrambanggo.jpg",
    desc: "Thiết kế phần gọng được làm từ chất liệu gỗ tự nhiên.",
    price: 20.0,
  },
  {
    id: 21,
    name: "Ống hút cỏ bàng",
    src: "/assets/img/onghutcobang.jpg",
    desc: "Bạn có thể sử dụng được cho tất cả các loại nước, kể cả nước nóng. Ống hút cỏ không tan hay biến dạng trong nước dù bạn ngâm chúng trong thời gian dài.",
    price: 20.0,
  },
  {
    id: 22,
    name: "Ống hút bã mía",
    src: "/assets/img/onghutbamia.jpeg",
    desc: "Sản phẩm được làm từ chất liệu bã mía nên có khả năng tự phân hủy 100% trong điều kiện môi trường tự nhiên. Đặc biệt, quá trình này không sinh ra các chất vô cơ hay hạt vi nhựa.",
    price: 20.0,
  },
  {
    id: 24,
    name: "Túi tote vải tái sử dụng",
    src: "/assets/img/tuitote.jpg",
    desc: "Một chiếc túi vải có thể được dùng trong các hoạt động trong cuộc sống như được dùng làm túi đi học, túi du dịch, túi mua sắm,...",
    price: 20.0,
  },
  {
    id: 25,
    name: "Bộ dụng cụ ăn uống bã mía",
    src: "/assets/img/hopbamia.jpg",
    desc: "Các loại hộp bã mía dùng đựng cơm, thức ăn nhanh… thay thế tuyệt vời cho các loại hộp nhựa xốp. Nguyên liệu chính là từ bã mía, có khả năng tự phân hủy sinh học.",
    price: 20.0,
  },
  {
    id: 26,
    name: "Ván trượt tạo từ phế liệu lưới đánh cá",
    src: "/assets/img/vantruot.jpeg",
    desc: "Làm từ 100% chất liệu lưới đánh cá cũ. Bạn cũng có thể lựa chọn màu sắc bánh xe - được làm từ 100% chất liệu tái chế.",
    price: 20.0,
  },
  {
    id: 28,
    name: "Lọ làm từ vỏ dừa",
    src: "/assets/img/vodua.webp",
    desc: "Được làm từ vỏ dừa. Thuần chay, thân thiện với môi trường",
    price: 20.0,
  },
  {
    id: 29,
    name: "Cốc làm từ bã cà phê",
    src: "/assets/img/lybacafe.jpg",
    desc: "Với chất liệu làm từ bã cà phê chiếm 80%, cốc đảm bảo an toàn sử dụng cho người dùng so với các dòng ly nhựa, thủy tinh thông thường.",
    price: 20.0,
  },
];

function setItem() {
  var dem = 0;
  var sum = 0;
  const ul = document.getElementById("list_pay");
  ul.innerHTML = "";
  galleryArray.forEach((value) => {
    let count = localStorage.getItem(value.id);
    if (count !== null || count > 0) {
      dem += parseInt(count);
      sum += count * value.price;
      ul.innerHTML += `<li class="flex mt-10 item-product-${value.id}">
            <div class="w-[20%] relative">
                <img class="w-[70%] m-auto rounded-lg" src="${value.src}" />
            </div>
            <div class="flex flex-col ml-2 justify-between my-[-4px] flex-1">
                <span class="text-3xl font-medium">${value.name}</span>
                <div class="flex justify-between">
                <div class="flex text-xl mt-1 items-center text-center">
                <span id="add_${
                  value.id
                }" class="px-2 pb-1 text-2xl font-bold  cursor-pointer bg-[#ccc]">+</span>
                <span id="sl_${
                  value.id
                }" class="py-1 px-4 text-3xl">${count}</span>
                <span id="minus_${
                  value.id
                }" class="px-3 pb-1 text-2xl font-bold cursor-pointer bg-[#ccc]">-</span>
               </div>
                <span id="total_${value.id}" class="text-3xl text-right">${
        count * parseFloat(value.price)
      }.000 <span class="border-b-[2px] border-[black]">đ</span>
                </div>
            </div>
        </li>`;
    }
  });
  document.getElementById("pay_sl").innerHTML = `Đơn hàng (${dem} sản phẩm)`;
  document.getElementById("pay_sp").innerHTML = `${dem}`;
  document.getElementById("pay_temp").innerHTML = `${sum}.000  `;
  document.getElementById("pay_sum").innerHTML = `${sum}.000  `;
}

setItem();

document.getElementById("pay_btn").onclick = () => {
  localStorage.clear();
  alert("Thanh toán thành công!!!");
  setItem();
};

galleryArray.forEach((value) => {
  if (localStorage.getItem(value.id) > 0) {
    document.getElementById(`add_${value.id}`).onclick = () => {
      setData(value.id, true, value.price);
    };
  }
  if (localStorage.getItem(value.id) > 0) {
    document.getElementById(`minus_${value.id}`).onclick = () => {
      var count = localStorage.getItem(value.id);
      if (count > 0) {
        setData(value.id, false, value.price);
      } else localStorage.removeItem(value.id);
    };
  }
});

function setData(id, check, price) {
  var count = localStorage.getItem(id);
  var sp = document.getElementById("pay_sp").innerHTML;
  let res = parseInt(document.getElementById("pay_sum").innerHTML);
  sp -= count;
  res -= parseInt(count) * price;
  check ? count++ : count--;
  sp += count;
  res += parseInt(count) * price;
  localStorage.setItem(id, count);
  if (parseInt(count) == 0) {
    localStorage.removeItem(id);
    document.querySelector(".item-product-" + id).remove();
    document.getElementById("pay_sum").innerHTML = `${res}.000`;
    document.getElementById("pay_temp").innerHTML = `${res}.000  `;
  }
  document.getElementById("pay_sl").innerHTML = `Đơn hàng (${sp} sản phẩm)`;
  document.getElementById("pay_sp").innerHTML = `${sp}`;
  document.getElementById(`sl_${id}`).innerHTML = count;
  document.getElementById(`total_${id}`).innerHTML = `${
    count * parseFloat(price)
  }.000 <span class="border-b-[2px] border-[black]">đ</span>`;
  document.getElementById("pay_sum").innerHTML = `${res}.000`;
  document.getElementById("pay_temp").innerHTML = `${res}.000  `;
}

function result(res, count, price) {
  if (isNaN(res)) {
    return (res += parseInt(count) * price);
  } else return res;
}
