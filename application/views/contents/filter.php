<!DOCTYPE html>
<html>
<style>
.mcard-content {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<body>

<h2>Filter DIV Elements</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('transit')"> transit</button>
  <button class="btn" onclick="filterSelection('langsung')"> langsung</button>
    
</div>

<div class="container">
<!--   <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div> -->
   <?php
   $maskapai = 'SRI';
     for($i = 0 ;$i < count($data[0][$maskapai]) ; $i++){ ?>

  <?php       if (isset($data[0][$maskapai][$i]['eco']) ){ ?> 

       <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) ; $j++) { ?>                    
                    <?php if(count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) == 1) {?>
                      <div class="mcard-content langsung">
                    <?php } else { ?>
                      <div class="mcard-content transit ">
                      <?php } ?>
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kode'].') '; ?></p>

                       <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kode'].') '; ?></p>
                  </div>
                  <?php } }}?>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("mcard-content");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
