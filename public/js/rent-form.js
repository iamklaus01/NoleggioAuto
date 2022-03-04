$(document).ready(function(){
  $(".form-wrapper .button").click(function(){
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    if(currentSectionIndex === 3){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
      setTimeout(() => {
        $('.parc').click();
      }, 3000);
    }
  });
});


/*Datas*/
let price = document.getElementById("price").value;
let departure = document.getElementById("rent-day");
let arrival = document.getElementById("return-day");

departure.value = new Date();
departure.min = departure.value;

/*addEventListener*/
document.querySelector(".particular-button").addEventListener('click' , fillInfo);
departure.addEventListener('input' , setInputValue);


/* To fill in */
let hidden_input_nbreH = document.querySelector(".nbreH-hidden");
let nbreOfHours = document.querySelector(".nbre-heure");
let total_price = document.querySelector(".prix-T");
let code = document.querySelector(".paiement-code");

/* Functions*/
function setInputValue() {
  let date_advanced = new Date(departure.value).getTime();
  date_advanced =new Date(date_advanced+3600*1000);
  let year = date_advanced.getFullYear().toString();
  let month = (date_advanced.getMonth() > 9)?(date_advanced.getMonth()+1).toString():'0'+(date_advanced.getMonth()+1).toString();
  let day = (date_advanced.getDate() > 9)?date_advanced.getDate().toString():'0'+date_advanced.getDate().toString();
  let hour = (date_advanced.getHours() > 9)?date_advanced.getHours().toString():'0'+date_advanced.getHours().toString();
  let min = (date_advanced.getMinutes() > 9)?date_advanced.getMinutes().toString():'0'+date_advanced.getMinutes().toString();
  let sec = (date_advanced.getSeconds() > 9)?date_advanced.getSeconds().toString():'0'+date_advanced.getSeconds().toString();
  let the_date = year+'-'+month+'-'+day+'T'+hour+':'+min+':'+sec;

  arrival.value = the_date;
  arrival.min = arrival.value;
}
function fillInfo(){
  let date2 = new Date(arrival.value);
  let date1 = new Date(departure.value)
  let nbre = parseFloat((date2 - date1)/3600000).toFixed(2);
  hidden_input_nbreH.value = nbre;
  nbreOfHours.innerHTML = nbre;
  total_price.innerHTML = nbre *parseInt(price);
  code.innerHTML = new Date().getTime();
}