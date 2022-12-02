

// xử lý filter
const btnPrice = document.querySelector('.price-js');


btnPrice.addEventListener('click',function(){
  document.querySelector('.price-choice').classList.toggle('open-filter');

  var elementI = document.querySelector('.price-js i');
  if(elementI){
    elementI.classList.toggle('ti-plus');
    elementI.classList.toggle('ti-minus');
  }
})



function closeFilterPrice(){
    document.querySelector('.price-choice').classList.remove('open-filter');

    var elementI = document.querySelector('.price-js i');
    if(elementI){
      elementI.classList.add('ti-plus');
      elementI.classList.remove('ti-minus');
    }
}


document.addEventListener(
    "click",
    function(event) {
      // If user either clicks X button OR clicks outside the modal window, then close modal by calling closeModal()
      if (!event.target.closest(".price-choice") &&
      !event.target.closest(".price-js")
      ) {
        closeFilterPrice();
      }
    },
    false
  )

// lọc giá tiền
var price = document.querySelector('.price-filter .title-filter');


var filterPrice =document.querySelectorAll('.price-choice input');
var arrPrice = [];
for(var i = 0, length = filterPrice.length; i < length; i++ ){
  arrPrice.push(filterPrice[i]);

  arrPrice[i].onclick = function(e){
    price.innerText = e.target.value;
  }
}



// slider

$(document).ready(function(){
  $('.image-slider-2').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      infinite: true, //false: khong vo tan
      // autoplay: true,
      // autoplaySpeed: 2000,
      draggable: true, //keo tha
      prevArrow:`<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
      nextArrow:`<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`,
      responsive:[
          {
              breakpoint: 1024,
              settings: {
              slidesToShow: 3,
              slidesToScroll: 3
                  }
          },
          {
              breakpoint: 740,
              settings: {
              slidesToShow: 2,
              slidesToScroll: 2
                  }
          },
          
      ]
  });
});





