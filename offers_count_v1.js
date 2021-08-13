<script>
var settings = {
  "url": "https://seller-api.takealot.com/v1/offers/count?API KEY=b34c6e60420aeec262346d1d5a7384da1bba3d474f09ff299fdd8325f3f16e6e75787d5b0af0c95b006bed7163f005fc554e7b59309a8395adb58c4eb4e6477b",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  console.log(response);
});


var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://seller-api.takealot.com/v1/offers/count?API%20KEY=b34c6e60420aeec262346d1d5a7384da1bba3d474f09ff299fdd8325f3f16e6e75787d5b0af0c95b006bed7163f005fc554e7b59309a8395adb58c4eb4e6477b");

xhr.send();
</script>